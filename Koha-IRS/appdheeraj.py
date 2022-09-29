# import mysql.connector
import pymysql
from PIL import Image
import multiprocessing
from flask import Flask, render_template, request, redirect, url_for, session, flash
from common import cache
import legofy

app = Flask(__name__)
cache.init_app(app=app, config={"CACHE_TYPE": "filesystem", 'CACHE_DIR': 'tmp/'})
app.config['UPLOADED_FILES'] = 'static/uploads'

# app = Flask(__name__)
# cache.init_app(app=app, config={"CACHE_TYPE": "filesystem", 'CACHE_DIR': 'tmp/'})
# app.config['UPLOADED_FILES'] = 'static/uploads'
app.secret_key = "Aryan"


# global new_token

@app.route('/')
def home():
    r_token = request.args.get('token')
    new_token = request.args.get('token')
    myd = pymysql.connect(
        host="localhost",
        user="kclegobricks_USR",
        password="e88d677a03970fc",
        database="Koha_php")
    cur = myd.cursor()
    # sql = """SELECT email from jwt_auth where token = ?"""
    if (cur.execute("SELECT token from jwt_auth where token = '%s'" % (r_token,))):
        row = cur.fetchone()
        res = row[0]
        print(res)
        new_token = r_token
        print(r_token)
        curem = myd.cursor()
        curem.execute("SELECT email from jwt_auth where token = '%s'" % (r_token,))
        row = curem.fetchone()
        cus_email = row[0]
        print(cus_email)
        session["email"] = cus_email
        # print(res)
        # new_token = r_token
        # print(r_token)

        if res != r_token:
            return redirect('http://www.thekoha.com/')

        # print(result)
        myd.commit()
        myd.close()
        # return render_template('index.html', imglb='', bX=2, bY=2, rangeCol=20)
    else:
        return redirect('http://www.thekoha.com/')

    return render_template('index.html', imglb='', bX=2, bY=2, rangeCol=20)


@app.route('/pixelate', methods=['GET', 'POST'])
def pixelate():
    # cus_email = home()
    email = session["email"]
    # print(email)
    if request.method == "POST":
        imagereq = request.files['imagefile']
        if imagereq:
            imgpath = "static/uploads/" + imagereq.filename
            imagename = imagereq.filename
            imagereq.save(imgpath)
            imglb = imagereq.filename
        else:
            return render_template('index.html')

        bY = 2
        bX = 2
        num_of_colors = 20
        user_colors = []
        p_qty=10

        palette = legofy.legonize(imglb, imgpath, (bY, bX), num_of_colors, user_colors)
        out_img_path = "outputs/" + imglb[:-4] + "_lego_gap.png"
        return render_template('pixelate.html', imagepath=out_img_path, imglb=imglb, bX=bX, bY=bY,
                               rangeCol=num_of_colors, palette=palette, autoselect='on', autofit='on', bright=50, p_qty=p_qty,
                               contrast=50, saturation=50, zoom=100, enlarge=20)
  


@app.route('/pixelizer', methods=['GET', 'POST'])
def pixelizer():
    email = session["email"]
    cus_email = home()
    print(cus_email)
    global process

    if request.method == "POST":
        if not process == None:
            process.terminate()
            print('Terminated:', process)

        imglb = request.form['imglb']
        if imglb == '':
            imagereq = request.files['imagefile']
            imgpath = "static/uploads/" + imagereq.filename
            imagereq.save(imgpath)
            imglb = imagereq.filename
            print(imgpath)
        else:
            imgpath = 'static/uploads/' + imglb
            imagereq = Image.open(imgpath)
            print(imgpath)

        bY = int(request.form['rangeY'])
        bX = int(request.form['rangeX'])
        num_of_colors = int(request.form['rangeCol'])
        autofit = request.form.get('autofit')
        p_qty = int(request.form['p_qty'])
        autoselect = request.form.get('autoselect')
        bright = int(request.form['bright'])
        contrast = int(request.form['contrast'])
        saturation = int(request.form['saturation'])
        zoom = int(request.form['zoom'])
        
        # enlarger = int(request.form['enlarger'])
        enlarger = 0
        if autofit != "on":
            autofit = ""
        if autoselect != "on":
            autoselect = ""

        user_colors = []
        for i in range(50):
            if int(request.form[f'btn{i}_val']):
                user_colors.append(request.form[f'btn{i}_col'])

        if request.form.get('base_btn') == "" or request.form.get('btncol') == "":
            process = multiprocessing.Process(target=l1, args=(
                imglb, imgpath, (bY, bX), num_of_colors, user_colors, autoselect, autofit, zoom,
                bright, contrast, saturation))
            process.start()
            print(process)
            process.join()

            # Get a value
            palette = cache.get('myvals')

            # palette = legofy.legonize(imglb, imgpath, (bY, bX), num_of_colors, user_colors, autoselect, autofit, zoom,
            #                           bright=bright, contrast=contrast, saturation=saturation)

            out_img_path = "outputs/" + imglb[:-4] + "_lego_gap.png"

            return render_template('pixelate.html', imagepath=out_img_path, imglb=imglb, bX=bX, bY=bY,
                                   rangeCol=num_of_colors, palette=palette, autoselect=autoselect, autofit=autofit,
                                   bright=bright, p_qty=p_qty,
                                   contrast=contrast, saturation=saturation, zoom=zoom, enlarger=enlarger)

        elif request.form.get('nxt') == 'Preview':
            # render_img_path = "static/outputs/" + imglb[:-4] + "_lego_gap.png"
            legofy.render(imglb, imgpath, (bY, bX), num_of_colors, user_colors, autoselect, autofit, zoom,
                          finalize=True, bright=bright, contrast=contrast, saturation=saturation)
            out_img_path = ["outputs/" + imglb[:-4] + "_bg1.png", "outputs/" + imglb[:-4] + "_bg2.png",
                            "outputs/" + imglb[:-4] + "_bg3.png", "outputs/" + imglb[:-4] + "_bg4.png",
                            "outputs/" + imglb[:-4] + "_bg5.png", "outputs/" + imglb[:-4] + "_bg6.png"]
            data = bX*bY

            actualysize = round(bY*25.6)
            actualxsize = round(bX*25.6)        
            actualpieces = bY*bX*1024
            actualprice = bY*bX*999
            return render_template('pixelizer.html', image_filename=imglb, imagepath=out_img_path, data=data, actualysize=actualysize, actualxsize=actualxsize, actualpieces=actualpieces, actualprice=actualprice)


        elif request.form.get('nxt') == 'Change':
            return render_template('index.html', imglb='', bX=2, bY=2, rangeCol=20)

        elif request.form.get('nxt') == 'Add to Cart':
            palette = legofy.legonize(imglb, imgpath, (bY, bX), num_of_colors, user_colors, autoselect, autofit, zoom,
                                      finalize=True, bright=bright, contrast=contrast, saturation=saturation)
                                      
            mydb3 = pymysql.connect(
                host="localhost",
                user="kclegobricks_USR",
                password="e88d677a03970fc",
                database="Koha_php",
                max_allowed_packet=67108864
            )
            cur = mydb3.cursor()
            sql_check = "SELECT * from cart where p_id=%s and cust_email = %s"
            add = (10001, email,)
            print(email)
            row = cur.execute(sql_check, add)
            print(row)
            if row >0:
                # return redirect("http://thekoha.com/cart")
                flash('There is a custom Item already in your Cart.', 'danger')
                # return redirect('http://localhost/html/cart.php')
                return  render_template('index.html', flash_message="True")
                
            
          
            mydb2 = pymysql.connect(
                host="localhost",
                user="kclegobricks_USR",
                password="e88d677a03970fc",
                database="Koha_php",
                max_allowed_packet=67108864
            )
            cur = mydb2.cursor()
            
            sql_cart = """INSERT INTO cart(cust_email,p_id,p_type,p_title,image,ip_add,qty,p_price,u_price,size,uploaded_image,bg_1,bg_2,bg_3,bg_4,bg_5,bg_6,color_code,csv,lego,lego_gap,output_images) VALUES (%s,%s,%s,'Custom Image',%s,%s,%s,%s,%s,%s,%s, %s,%s, %s,%s, %s,%s,%s, %s,%s, %s,%s) """
            p_size = str(bX) + "x" + str(bY)
            p_price = 999 * bX * bY
            u_price = p_price * p_qty
          
            val2 = (
                email, 10001, "Custom", "Koha-IRS/" + "static/outputs/" + imglb[:-4] + "_lego_gap.png", "::1", p_qty,
                u_price, p_price, p_size, imglb, imglb[:-4] + "_bg1.png", imglb[:-4] + "_bg2.png",
                imglb[:-4] + "_bg3.png",
                imglb[:-4] + "_bg4.png",
                imglb[:-4] + "_bg5.png", "outputs/" + imglb[:-4] + "_bg6.png", imglb[:-4] + "_color_code.png",
                imglb[:-4] + "_csv.csv", imglb[:-4] + "_lego.png", imglb[:-4] + "_lego_gap.png",
                imglb[:-4] + "_output.png")
            cur.execute(sql_cart, (val2))
            mydb2.commit()
            mydb2.close()
            # cus_email = home()
            # print(cus_email)
           
          
            mydb = pymysql.connect(
                host="localhost",
                user="kclegobricks_USR",
                password="e88d677a03970fc",
                database="Koha_php",
                max_allowed_packet=67108864
            )
            cur = mydb.cursor()
            
            sql = """INSERT INTO lego_images (cust_email,p_id,p_type,image,ip_add,qty,p_price,u_price,size,uploaded_image,bg_1,bg_2,bg_3,bg_4,bg_5,bg_6,color_code,csv,lego,lego_gap,output_images) VALUES (%s,%s,%s,%s,%s,%s,%s,%s,%s,%s, %s,%s, %s,%s, %s,%s,%s, %s,%s, %s,%s) """
           
            val = (
                email, 10001, "Custom", "Koha-IRS/" + "static/outputs/" + imglb[:-4] + "_lego_gap.png", "::1", p_qty,
                u_price, p_price, p_size, imglb, imglb[:-4] + "_bg1.png", imglb[:-4] + "_bg2.png",
                imglb[:-4] + "_bg3.png",
                imglb[:-4] + "_bg4.png",
                imglb[:-4] + "_bg5.png", "outputs/" + imglb[:-4] + "_bg6.png", imglb[:-4] + "_color_code.png",
                imglb[:-4] + "_csv.csv", imglb[:-4] + "_lego.png", imglb[:-4] + "_lego_gap.png",
                imglb[:-4] + "_output.png")
            cur.execute(sql, (val))
            mydb.commit()
            mydb.close()

            # mydb3 = pymysql.connect(
            #     host="localhost",
            #     user="kclegobricks_USR",
            #     password="e88d677a03970fc",
            #     database="Koha_php",
            #     max_allowed_packet=67108864
            # )
            # cur = mydb3.cursor()
            # sql4 = """INSERT INTO customer_orders (order_id, customer_id, due_amount, invoice_no, qty, size, order_date, order_status,uploaded_image,bg_1,bg_2,bg_3,bg_4,bg_5,bg_6,color_code,csv,lego,lego_gap,output_images)VALUES (%s, %s,%s, %s,%s, %s,%s,%s, %s,%s, %s,%s, %s,%s,%s, %s,%s, %s,%s, %s)"""
            # sql = """INSERT INTO lego_images (uploaded_image,bg_1,bg_2,bg_3,bg_4,bg_5,bg_6,color_code,csv,lego,lego_gap,output_images) VALUES (%s, %s,%s, %s,%s, %s,%s, %s,%s, %s,%s, %s)"""
            # # val = (
            # # imglb, imglb[:-4] + "_bg1.png", imglb[:-4] + "_bg2.png", imglb[:-4] + "_bg3.png", imglb[:-4] + "_bg4.png",
            # # imglb[:-4] + "_bg5.png", "outputs/" + imglb[:-4] + "_bg6.png", imglb[:-4] + "_bg7.png",
            # # imglb[:-4] + "_color_code.png", imglb[:-4] + "_csv.csv", imglb[:-4] + "_lego.png",
            # # imglb[:-4] + "_lego_gap.png", imglb[:-4] + "_output.png")
            # val = (
            #     imglb, imglb[:-4] + "_bg1.png", imglb[:-4] + "_bg2.png", imglb[:-4] + "_bg3.png",
            #     imglb[:-4] + "_bg4.png",
            #     imglb[:-4] + "_bg5.png", "outputs/" + imglb[:-4] + "_bg6.png", imglb[:-4] + "_bg7.png",
            #     imglb[:-4] + "_color_code.png", imglb[:-4] + "_csv.csv", imglb[:-4] + "_lego.png",
            #     imglb[:-4] + "_lego_gap.png")
            # cur.execute(sql, (val))
            # mydb3.commit()
            # mydb3.close()

# return render_template('pixelate.html')
# palette = legofy.legonize(imglb, imgpath, (bY, bX), num_of_colors, user_colors, autoselect, autofit, zoom,
                                     # bright=bright, contrast=contrast, saturation=saturation)
            # out_img_path = "outputs/" + imglb[:-4] + "_lego_gap.png"
            return render_template('pixelate.html', imglb=imglb, bX=bX, bY=bY,
                                   rangeCol=num_of_colors, palette=palette, autoselect=autoselect, autofit=autofit,
                                   bright=bright, p_qty=p_qty,
                                   contrast=contrast, saturation=saturation, zoom=zoom, enlarger=enlarger)
                             

        else:
            palette = legofy.legonize(imglb, imgpath, (bY, bX), num_of_colors, user_colors, autoselect, autofit, zoom,
                                      bright=bright, contrast=contrast, saturation=saturation)
            out_img_path = "outputs/" + imglb[:-4] + "_lego_gap.png"

            return render_template('pixelate.html', imglb=imglb, imagepath=out_img_path, bX=bX, bY=bY,
                                   rangeCol=num_of_colors, palette=palette, autoselect=autoselect, autofit=autofit,
                                   bright=bright, p_qty=p_qty,
                                   contrast=contrast, saturation=saturation, zoom=zoom, enlarger=enlarger)
@app.route('/atc', methods=['GET', 'POST'])


# @app.route('/picker', methods=['GET', 'POST'])
# def picker():
#     if request.method == "POST":
#         imglb = request.form['imglb']
#     return ('', 204)

# def pixelizer():
#     global process, request

#     if not process == None:
#         process.terminate()
#         print('Terminated:', process)

#     process = multiprocessing.Process(target=_pixelizer, args=(request.method, request.form, request.files,))
#     process.start()
#     print(process)

#     return ('', 204)

def l1(imglb, imgpath, bXY, num_of_colors, user_colors, autoselect, autofit, zoom, bright, contrast, saturation):
    bY, bX = bXY
    palette = legofy.legonize(imglb, imgpath, (bY, bX), num_of_colors, user_colors, autoselect, autofit, zoom,
                              bright=bright, contrast=contrast, saturation=saturation)

    # store a value
    cache.set('myvals', palette)
    return palette


if __name__ == '__main__':
    global process

    process = None
    app.run(debug=True)
