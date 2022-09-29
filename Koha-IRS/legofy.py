from PIL import Image, ImageEnhance, ImageColor, ImageFont, ImageDraw, ImageFilter
import numpy as np
import multiprocessing
# import math
import timeit


user_color_list = {}


def combine_image(tiles, p_size, original_size):
    coord = []
    blank_image = Image.new("RGB", original_size)

    iw = (original_size[1] / p_size[0])
    ih = (original_size[0] / p_size[1])
    for i in range(p_size[0]):
        for ii in range(p_size[1]):
            if i > 0:
                a = 1
            else:
                a = 0
            if ii > 0:
                b = 1
            else:
                b = 0

            coord.append([int(ii * ih) + a, int(i * iw) + b])

    for i in range(len(tiles)):
        # part_img = Image.fromarray(tiles[i])
        blank_image.paste(tiles[i], coord[i])
    return blank_image


def split_image(original_img, p_size):
    im = np.array(original_img)
    M = im.shape[0] // p_size[0]
    N = im.shape[1] // p_size[1]
    size_h = M * p_size[0]
    size_w = N * p_size[1]
    original_size = (size_w, size_h)
    # print(original_img.size, original_size)

    tiles = [im[x:x + M, y:y + N] for x in range(0, size_h, M) for y in range(0, size_w, N)]
    new_tiles = []
    for i in range(len(tiles)):
        new_img = Image.fromarray(tiles[i])  # .astype(np.uint8))
        new_img.save(f'static/outputs/part{i}.png')
        new_tiles.append(new_img)
    return new_tiles, original_size


def convert_palette2array(palette):
    new_palette = []
    for eachcol in palette:
        tmp = eachcol.replace(',', '')
        tmp = tmp.split(' ')
        tmp = [int(tmp[0]), int(tmp[1]), int(tmp[2])]
        new_palette.append(tmp)
    return new_palette


def image2baseplate2(img, palette, baseplate_size):
    img = img.convert('RGB')
    original_width, original_height = img.size

    # Reduce Image
    reduced_img = img.resize((baseplate_size[1] * 32, baseplate_size[0] * 32))

    # enhance image
    eh_obj = ImageEnhance.Sharpness(reduced_img)  # Contrast Brightness Color Sharpness
    enhanced_img = eh_obj.enhance(3.5)

    # convert pallete to array
    user_palette = convert_palette2array(palette)

    # change to user color scheme
    small_img = change_color_scheme(enhanced_img, user_palette)
    num_of_colors = len(user_palette)

    return small_img, num_of_colors, user_palette


def image2baseplate(img, palette, num_of_colors, baseplate_size):
    img = img.convert('RGB')
    # original_width, original_height = img.size

    # Reduce Image
    reduced_img = img.resize((baseplate_size[1] * 32, baseplate_size[0] * 32))

    # enhance image
    eh_obj = ImageEnhance.Sharpness(reduced_img)  # Contrast Brightness Color Sharpness
    enhanced_img = eh_obj.enhance(3.5)

    # change to dev color scheme
    dev_img = change_color_scheme(enhanced_img, palette)

    # create new pallete from color scheme
    user_palette = make_palette(color_distribution(dev_img)[:num_of_colors])
    num_of_colors = len(user_palette)

    # change to user color scheme
    user_img = change_color_scheme(enhanced_img, user_palette)
    # print('selected colors:', len(color_distribution(user_img)))

    small_img = user_img

    # # enlarge Image
    # large_img = small_img.resize((original_width, original_height), resample=0)
    return small_img, num_of_colors, user_palette


# COLOUR SCHEME CHANGE FOURTH ALGORITHM
def change_color_scheme(img, palette):
    img = np.array(img)
    palette = np.array(palette)

    # Calculate the distance to each palette entry from each pixel
    distance = np.linalg.norm(img[:, :, None] - palette[None, None, :], axis=3)

    # Now choose whichever one of the palette colours is nearest for each pixel
    palettised = np.argmin(distance, axis=2).astype(np.uint8)

    # Change to nearest color
    res = palette[palettised]

    # Convert array to image
    small_img = Image.fromarray(res.astype(np.uint8))
    # img2.save('small_img.jpg')
    return small_img


def color_distribution(img):
    # # unique, counts = np.unique(x, return_counts=True)
    # u, c = np.unique(r, return_counts=True)

    # cc = np.argsort(-c)
    # uu = u[cc]

    w, h = img.size
    col_distr = img.getcolors(w * h)
    col_distr.sort(reverse=True)
    return col_distr


def make_palette(col_distr):
    palette = []

    for eachcol in col_distr:
        palette.append(eachcol[1])

    palette = [[i[0], i[1], i[2]] for i in palette]
    # palette = [i for sets in palette for i in sets]
    return palette


def apply_color_overlay(image, color):
    '''Small function to apply an effect over an entire image'''
    overlay_red, overlay_green, overlay_blue = color
    channels = image.split()

    r = channels[0].point(lambda color: overlay_effect(color, overlay_red))
    g = channels[1].point(lambda color: overlay_effect(color, overlay_green))
    b = channels[2].point(lambda color: overlay_effect(color, overlay_blue))

    channels[0].paste(r)
    channels[1].paste(g)
    channels[2].paste(b)

    return Image.merge(image.mode, channels)


def overlay_effect(color, overlay):
    '''Actual overlay effect function'''
    if color < 33:
        return overlay - 100
    elif color > 233:
        return overlay + 100
    else:
        return overlay - 133 + color


def image2lego(small_img, image_filename, baseplate_size, finalize=False):
    brick_plate = Image.open('static/assets/32x32_plate.png')
    brick_plate_width, brick_plate_height = brick_plate.size

    color2 = (200, 200, 200)
    color = (255, 255, 255)

    if finalize:
        lego_baseplates = Image.new("RGBA", ((brick_plate_width*baseplate_size[1]), (brick_plate_height*baseplate_size[0])), "white")

        for bx in range(baseplate_size[1]):
            for by in range(baseplate_size[0]):
                lego_baseplates.paste(apply_color_overlay(brick_plate, color), ((bx * brick_plate_width), (by * brick_plate_height)))

        base_width, base_height = lego_baseplates.size
        large_img = small_img.resize((base_width, base_height), resample=0)

        lego_baseplates = lego_baseplates.convert('RGBA')
        large_img = large_img.convert('RGBA')

        result = Image.blend(large_img, lego_baseplates, alpha=0.3)
        enh_obj = ImageEnhance.Contrast(result)
        lego_image = enh_obj.enhance(1.5)

        lego_image.save(f'static/outputs/{image_filename[:-4]}_lego.png')
        return lego_image

    else:
        gap = 2
        lego_baseplates = Image.new("RGBA", ((brick_plate_width*baseplate_size[1]) + ((baseplate_size[1] - 1)*gap),
                                             (brick_plate_height*baseplate_size[0]) + ((baseplate_size[0] - 1)*gap)), "white")

        large_img = small_img.resize(((brick_plate_width*baseplate_size[1]), (brick_plate_height*baseplate_size[0])), resample=0)

        brick_plate = brick_plate.convert('RGBA')
        large_img = large_img.convert('RGBA')

        for bx in range(baseplate_size[1]):
            for by in range(baseplate_size[0]):
                left, top, right, bottom = (bx * brick_plate_width), (by * brick_plate_height), ((bx * brick_plate_width)+brick_plate_width), ((by * brick_plate_height)+brick_plate_height)
                res = Image.blend(large_img.crop((left, top, right, bottom)), brick_plate, alpha=0.3)
                lego_baseplates.paste(res, ((bx * brick_plate_width)+(gap*bx), (by * brick_plate_height)+(gap*by)))

        enh_obj = ImageEnhance.Contrast(lego_baseplates)
        lego_image_gap = enh_obj.enhance(1.5)

        lego_image_gap.save(f'static/outputs/{image_filename[:-4]}_lego_gap.png')
        return lego_image_gap


def image2output(accual_image, num_of_colors, image_filename):
    brick_image = Image.open('static/assets/blank_brick.png')
    accual_width, accual_height = accual_image.size
    brick_width, brick_height = brick_image.size
    color_decode = {}

    rgb_image = accual_image.convert('RGB')
    image_csv = np.zeros((accual_width, accual_height))

    base_image = Image.new("RGB", (
        (accual_width * brick_width) + (accual_width * 2), (accual_height * brick_height) + (accual_height * 2)), "white")

    for brick_x in range(accual_width):
        for brick_y in range(accual_height):
            x_coord = (brick_x * brick_width) + (2 * brick_x)
            y_coord = (brick_y * brick_height) + (2 * brick_y)
            color = rgb_image.getpixel((brick_x, brick_y))
            base_image.paste(apply_color_overlay(brick_image, color), (x_coord, y_coord))

            font = ImageFont.truetype('static/assets/sans_bold.ttf', 12)
            val = str(manu2_palette_find[f'{color[0]}, {color[1]}, {color[2]}'])

            ImageDraw.Draw(base_image).text((x_coord + 8, y_coord + 8), val, (0, 0, 0), font=font)
            color_decode[val] = color

            image_csv[brick_x][brick_y] = int(val)

    # =================================================================================

    brick_image = Image.open('static/assets/blank_brick_dark.png')
    brick_width, brick_height = brick_image.size

    color_code_img = Image.new("RGB", ((num_of_colors * brick_width) + (num_of_colors * 2), brick_height + 15), "white")

    for i in range(num_of_colors):
        collist = list(color_decode.keys())
        color_code_img.paste(apply_color_overlay(brick_image, color_decode[collist[i]]),
                             ((i * brick_width) + (i * 2), 15))
        ImageDraw.Draw(color_code_img).text(((i * brick_width) + (i * 2) + 8, 0), collist[i], (0, 0, 0), font=font)

    color_code_img.save(f'static/outputs/{image_filename[:-4]}_color_code.png')
    base_image.save(f'static/outputs/{image_filename[:-4]}_output.png')
    np.savetxt(f'static/outputs/{image_filename[:-4]}_csv.csv', image_csv, fmt="%d", delimiter=",")
    return base_image


def auto_crop(img, baseplate_size):
    w, h = img.size
    max_s = max(w, h)
    min_s = min(w, h)
    max_b = max(baseplate_size)
    min_b = min(baseplate_size)

    sw = int((baseplate_size[1] / max_b) * min_s)
    sh = int((baseplate_size[0] / max_b) * min_s)
    # sw = int((baseplate_size[1]/min_b)*min_s)
    # sh = int((baseplate_size[0]/min_b)*min_s)
    # sw = int((max_b/min_b)*min_s)
    # sh = int((max_b/min_b)*min_s)

    if sh > h:
        sh = h
    if sw > w:
        sw = w

    cw, ch, sw, sh = w // 2, h // 2, sw // 2, sh // 2

    bbox = (cw - sw, ch - sh, cw + sw, ch + sh)
    cropped_img = img.crop(bbox)
    # cropped_img.save('test/cropped.png')
    return cropped_img


def auto_zoom(img, zoom):
    w, h = img.size

    cw, ch = w // 2, h // 2
    rw, rh = ((600 - zoom) * cw) // 500, ((600 - zoom) * ch) // 500

    bbox = (cw - rw, ch - rh, cw + rw, ch + rh)
    zoom_crop_img = img.crop(bbox)
    # zoom_crop_img.save('test/zoom_crop_img.png')
    return zoom_crop_img


def dropShadow(image, offset=(5, 5), background=0x444444, shadow=0x444444, border=8, iterations=3):
    """
    Add a gaussian blur drop shadow to an image.  

    image       - The image to overlay on top of the shadow.
    offset      - Offset of the shadow from the image as an (x,y) tuple.  Can be
                positive or negative.
    background  - Background colour behind the image.
    shadow      - Shadow colour (darkness).
    border      - Width of the border around the image.  This must be wide
                enough to account for the blurring of the shadow.
    iterations  - Number of times to apply the filter.  More iterations 
                produce a more blurred shadow, but increase processing time.
    """

    # Create the backdrop image -- a box in the background colour with a
    # shadow on it.
    totalWidth = image.size[0] + abs(offset[0]) + 2 * border
    totalHeight = image.size[1] + abs(offset[1]) + 2 * border
    back = Image.new(image.mode, (totalWidth, totalHeight), background)

    # Place the shadow, taking into account the offset from the image
    shadowLeft = border + max(offset[0], 0)
    shadowTop = border + max(offset[1], 0)
    back.paste(shadow, [shadowLeft, shadowTop, shadowLeft + image.size[0], shadowTop + image.size[1]])

    # Apply the filter to blur the edges of the shadow.  Since a small kernel
    # is used, the filter must be applied repeatedly to get a decent blur.
    n = 0
    while n < iterations:
        back = back.filter(ImageFilter.BLUR)
        n += 1

    # Paste the input image onto the shadow backdrop
    imageLeft = border - min(offset[0], 0)
    imageTop = border - min(offset[1], 0)
    back.paste(image, (imageLeft, imageTop))

    return back


def enhancer(bright, contrast, saturation, imgpath):
    original_img = Image.open(imgpath)
    bright_converted = bright * 0.0202
    enhancerB = ImageEnhance.Brightness(original_img)
    original_img = enhancerB.enhance(bright_converted)
    print(bright_converted)
    contrast_converted = contrast * 0.0202
    enhancerC = ImageEnhance.Contrast(original_img)
    original_img = enhancerC.enhance(contrast_converted)
    print(contrast_converted)
    saturation_converted = saturation * 0.0202
    enhancerCO = ImageEnhance.Color(original_img)
    original_img = enhancerCO.enhance(saturation_converted)
    print(saturation_converted)
    # original_img.show()
    return original_img


def legonize(image_filename=None, imgpath=None, baseplate_size=(2, 2), num_of_colors=20, user_colors=[],
             autoselect='on', autofit='on', zoom=100, finalize=False, bright=50, contrast=50, saturation=50):
    global manu2_palette, manu2_palette_find

    # original_img = Image.open(imgpath)
    original_img = enhancer(bright, contrast, saturation, imgpath)

    manu2_palette = [[244, 244, 244], [208, 206, 201], [178, 180, 178], [140, 138, 136], [100, 100, 100], [22, 22, 22],
                     [0, 187, 220], [175, 205, 215], [139, 190, 232], [126, 147, 167],
                     [62, 135, 203], [0, 94, 184], [51, 63, 72], [0, 53, 80], [190, 202, 234], [221, 121, 117],
                     [197, 70, 68], [218, 41, 28], [177, 162, 202], [142, 127, 174],
                     [236, 208, 181], [240, 196, 160], [250, 170, 141], [248, 173, 109], [229, 158, 109],
                     [189, 154, 122], [181, 129, 80], [255, 105, 0], [166, 85, 35], [107, 53, 41],
                     [105, 63, 35], [78, 53, 36], [120, 78, 144], [248, 229, 154], [213, 200, 151], [239, 182, 97],
                     [255, 209, 0], [255, 163, 0], [229, 155, 220], [177, 78, 181],
                     [174, 164, 111], [174, 184, 98], [181, 189, 0], [239, 215, 229], [94, 126, 41], [231, 147, 183],
                     [207, 87, 138], [51, 85, 37], [45, 200, 77], [0, 154, 68]]

    manu2_palette_find = {'244, 244, 244': 1, '208, 206, 201': 2, '178, 180, 178': 3, '140, 138, 136': 4,
                          '100, 100, 100': 5, '22, 22, 22': 6, '0, 187, 220': 7,
                          '175, 205, 215': 8, '139, 190, 232': 9, '126, 147, 167': 10, '62, 135, 203': 11,
                          '0, 94, 184': 12, '51, 63, 72': 13, '0, 53, 80': 14,
                          '190, 202, 234': 15, '221, 121, 117': 16, '197, 70, 68': 17, '218, 41, 28': 18,
                          '177, 162, 202': 19, '142, 127, 174': 20, '236, 208, 181': 21,
                          '240, 196, 160': 22, '250, 170, 141': 23, '248, 173, 109': 24, '229, 158, 109': 25,
                          '189, 154, 122': 26, '181, 129, 80': 27, '255, 105, 0': 28,
                          '166, 85, 35': 29, '107, 53, 41': 30, '105, 63, 35': 31, '78, 53, 36': 32, '120, 78, 144': 33,
                          '248, 229, 154': 34, '213, 200, 151': 35,
                          '239, 182, 97': 36, '255, 209, 0': 37, '255, 163, 0': 38, '229, 155, 220': 39,
                          '177, 78, 181': 40, '174, 164, 111': 41, '174, 184, 98': 42,
                          '181, 189, 0': 43, '239, 215, 229': 44, '94, 126, 41': 45, '231, 147, 183': 46,
                          '207, 87, 138': 47, '51, 85, 37': 48, '45, 200, 77': 49, '0, 154, 68': 50}

    # AUTOFIT
    if autofit == 'on':
        cropped_img = auto_crop(original_img, baseplate_size)
    else:
        cropped_img = original_img

    # AUTO-ZOOM
    zoom_crop_img = auto_zoom(cropped_img, zoom)

    # AUTOSELECT
    if autoselect == 'on':
        small_img, num_of_colors, user_palette = image2baseplate(zoom_crop_img, manu2_palette, num_of_colors,
                                                                 baseplate_size)
    else:
        small_img, num_of_colors, user_palette = image2baseplate2(zoom_crop_img, user_colors, baseplate_size)

    # IMAGE2LEGO
    starttime = timeit.default_timer()
    brick_img = image2lego(small_img, image_filename, baseplate_size, finalize)
    print("The time difference is :", timeit.default_timer() - starttime)

    # FINALIZE
    if finalize:
        output_img = image2output(small_img, num_of_colors, image_filename)

    # PALETTE BUILD
    palette = []
    for eachcol in manu2_palette:
        tmp = str(eachcol).replace('[', '')
        tmp = tmp.replace(']', '')

        if eachcol in user_palette:
            palette.append([tmp, 1])
        else:
            palette.append([tmp, 0])

    return palette


def render(image_filename=None, imgpath=None, baseplate_size=(2, 2), num_of_colors=20, user_colors=[], autoselect='on',
           autofit='on', zoom=100, finalize=True, bright=50, contrast=50, saturation=50):
    global manu2_palette, manu2_palette_find

    original_img = Image.open(imgpath)
    # original_img.show()
    original_img = enhancer(bright, contrast, saturation, imgpath)

    manu2_palette = [[244, 244, 244], [208, 206, 201], [178, 180, 178], [140, 138, 136], [100, 100, 100], [22, 22, 22],
                     [0, 187, 220], [175, 205, 215], [139, 190, 232], [126, 147, 167],
                     [62, 135, 203], [0, 94, 184], [51, 63, 72], [0, 53, 80], [190, 202, 234], [221, 121, 117],
                     [197, 70, 68], [218, 41, 28], [177, 162, 202], [142, 127, 174],
                     [236, 208, 181], [240, 196, 160], [250, 170, 141], [248, 173, 109], [229, 158, 109],
                     [189, 154, 122], [181, 129, 80], [255, 105, 0], [166, 85, 35], [107, 53, 41],
                     [105, 63, 35], [78, 53, 36], [120, 78, 144], [248, 229, 154], [213, 200, 151], [239, 182, 97],
                     [255, 209, 0], [255, 163, 0], [229, 155, 220], [177, 78, 181],
                     [174, 164, 111], [174, 184, 98], [181, 189, 0], [239, 215, 229], [94, 126, 41], [231, 147, 183],
                     [207, 87, 138], [51, 85, 37], [45, 200, 77], [0, 154, 68]]

    manu2_palette_find = {'244, 244, 244': 1, '208, 206, 201': 2, '178, 180, 178': 3, '140, 138, 136': 4,
                          '100, 100, 100': 5, '22, 22, 22': 6, '0, 187, 220': 7,
                          '175, 205, 215': 8, '139, 190, 232': 9, '126, 147, 167': 10, '62, 135, 203': 11,
                          '0, 94, 184': 12, '51, 63, 72': 13, '0, 53, 80': 14,
                          '190, 202, 234': 15, '221, 121, 117': 16, '197, 70, 68': 17, '218, 41, 28': 18,
                          '177, 162, 202': 19, '142, 127, 174': 20, '236, 208, 181': 21,
                          '240, 196, 160': 22, '250, 170, 141': 23, '248, 173, 109': 24, '229, 158, 109': 25,
                          '189, 154, 122': 26, '181, 129, 80': 27, '255, 105, 0': 28,
                          '166, 85, 35': 29, '107, 53, 41': 30, '105, 63, 35': 31, '78, 53, 36': 32, '120, 78, 144': 33,
                          '248, 229, 154': 34, '213, 200, 151': 35,
                          '239, 182, 97': 36, '255, 209, 0': 37, '255, 163, 0': 38, '229, 155, 220': 39,
                          '177, 78, 181': 40, '174, 164, 111': 41, '174, 184, 98': 42,
                          '181, 189, 0': 43, '239, 215, 229': 44, '94, 126, 41': 45, '231, 147, 183': 46,
                          '207, 87, 138': 47, '51, 85, 37': 48, '45, 200, 77': 49, '0, 154, 68': 50}

    print(autofit, zoom)
    # AUTOFIT
    if autofit == 'on':
        cropped_img = auto_crop(original_img, baseplate_size)
        # cropped_img = original_img
    else:
        cropped_img = original_img

    # AUTOZOOM
    zoom_crop_img = auto_zoom(cropped_img, zoom)

    # AUTOSELECT
    if autoselect == 'on':
        small_img, num_of_colors, user_palette = image2baseplate(zoom_crop_img, manu2_palette, num_of_colors,
                                                                 baseplate_size)
    else:
        small_img, user_palette = image2baseplate2(zoom_crop_img, user_colors, baseplate_size)

    # IMAGE2LEGO
    brick_img = image2lego(small_img, image_filename, baseplate_size, finalize)

    # BACKGROUND IMAGE GENERATOR
    # --PARAMETERS
    # [ w,h, x,y, .,., .,., .,., .,., ]
    num_base = baseplate_size[0]*baseplate_size[1]

    if baseplate_size[0] > 8 or baseplate_size[1] > 8:
        bgs = ['bg6.png', 'bg7.png', ]
        bg_vals = [[360, 280, 310, 190, 20], [1100, 680, 735, 365, 20]]
    elif baseplate_size[0] > 4 or baseplate_size[1] > 4:
        bgs = ['bg3.png', 'bg4.png', 'bg5.png']
        bg_vals = [[320, 220, 500, 170, 8], [370, 245, 365, 130, 8], [300, 245, 330, 125, 8]]
    else:
        bgs = ['bg1.jpg', 'bg2.jpg']
        bg_vals = [[300, 400, 430, 280, 4], [230, 350, 370, 260, 4]]

    # --APPLY TO ALL BG IMAGES
    for i in range(len(bgs)):
        img_bg = Image.open(f'static/assets/{bgs[i]}')

        # Size Calc
        bw = int((baseplate_size[1]/bg_vals[i][4]) * bg_vals[i][0])
        bh = int((baseplate_size[0]/bg_vals[i][4]) * bg_vals[i][1])
        if bw == 0:
            bw = int((1/bg_vals[i][4]) * bg_vals[i][0])
        if bh == 0:
            bh = int((1/bg_vals[i][4]) * bg_vals[i][1])

        # Reduce Image
        # resized_img = brick_img.resize((baseplate_size[1] * bg_vals[i][0], baseplate_size[0] * bg_vals[i][1]))
        resized_img = brick_img.resize((bw, bh))
        w, h = resized_img.size
        # x, y = bg_vals[i][2], bg_vals[i][3]
        x, y = bg_vals[i][2] - (w // 2), bg_vals[i][3] - (h // 2)

        img_bg.paste(resized_img, (x, y))
        img_bg.save(f'static/outputs/{image_filename[:-4]}_bg{i + 1}.png', quality=100)

    return img_bg
