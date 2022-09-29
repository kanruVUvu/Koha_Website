var bY = document.getElementById("range-Y");
var bX = document.getElementById("range-X");
var baseplate_output = document.getElementById("baseplate");
var user_col_output = document.getElementById("user_col");
var rangeCol = document.getElementById("rangeCol");
var brightness_col_output = document.getElementById("brightness_col");
var contrast_col_output = document.getElementById("contrast_col");
var saturation_col_output = document.getElementById("saturation_col");
var zcol= document.getElementById("zoom");
var zcol_output = document.getElementById("zoom_col");
var enlargecol= document.getElementById("enlarger");
var enlargecol_output = document.getElementById("enlarge_col");
var hubblepic = document.getElementById('hubblepic');
var t_size = document.getElementById("t_size");
var p_price = document.getElementById("p_price");
var pieces = document.getElementById("pieces");
var brightcol= document.getElementById("bright");
var contrastcol= document.getElementById("contrast");
var saturationcol= document.getElementById("saturation");
var y = bY.value;
var x = bX.value;
var p_qty_html = document.getElementById("p_qty");
var p_qty = document.getElementById("p_qty").value;
var selected_mobile_control = document.getElementsByClassName("pmc-header-item,selected").innerHTML;

var baseplate_output_mob = document.getElementById("baseplate-mob");
var user_col_output_mob = document.getElementById("user_col-mob");
var brightness_col_output_mob = document.getElementById("brightness_col-mob");
var contrast_col_output_mob = document.getElementById("contrast_col-mob");
var saturation_col_output_mob = document.getElementById("saturation_col-mob");
var zcol_output_mob = document.getElementById("zoom_col-mob");
var enlargecol_output_mob = document.getElementById("enlarge_col-mob");
var rangeCol_mob = document.getElementById("rangeCol-mob");
var enlargecol_mob= document.getElementById("enlarger-mob");
var zcol_mob= document.getElementById("zoom-mob");
var brightcol_mob= document.getElementById("bright-mob");
var contrastcol_mob= document.getElementById("contrast-mob");
var saturationcol_mob= document.getElementById("saturation-mob");



// const val = document. querySelector('p_qty'). value;


baseplate_output.innerHTML = (bY.value) + "&nbsp &nbsp x &nbsp &nbsp" + (bX.value);
t_size.innerHTML = "Size : " + ((y)*25.6).toFixed() + " cm x " + ((x)*25.6).toFixed()+ " cm";
pieces.innerHTML = "Pieces : "+x*y*1024;
// alert(p_qty);
p_price.innerHTML = "Price : ₹ " + ((y * x)*999)*p_qty;
user_col_output.innerHTML = 'Colours Used: '+ (rangeCol.value);
brightness_col_output.innerHTML = 'Brightness: '+ (brightcol.value);
contrast_col_output.innerHTML = 'Contrast: '+ (contrastcol.value);
saturation_col_output.innerHTML = 'Saturation: '+ (saturationcol.value);
zcol_output.innerHTML = 'Image Zoom (Crop): '+ (zoom.value);
enlargecol_output.innerHTML = 'Image Enlarge: '+ (enlargecol.value);

//for mobile
user_col_output_mob.innerHTML = 'Colours Used: '+ (rangeCol.value?rangeCol.value:rangeCol_mob.value);
brightness_col_output_mob.innerHTML = 'Brightness: '+ (brightcol.value?brightcol.value:brightcol_mob.value);
contrast_col_output_mob.innerHTML = 'Contrast: '+ (contrastcol.value?contrastcol.value:contrastcol_mob.value);
saturation_col_output_mob.innerHTML = 'Saturation: '+ (saturationcol.value?saturationcol.value:saturationcol_mob.value);
zcol_output_mob.innerHTML = 'Image Zoom (Crop): '+ (zoom.value?zoom.value:zoom_mob.value);
enlargecol_output_mob.innerHTML = 'Image Enlarge: '+ (enlargecol.value?enlargecol.value:enlargecol_mob.value);
baseplate_output_mob.innerHTML = (bY.value) + "&nbsp &nbsp x &nbsp &nbsp" + (bX.value);





function deepdive(){
  zoomlevel = enlargecol.valueAsNumber;
  hubblepic.style.webkitTransform = "scale("+zoomlevel+")";
  hubblepic.style.transform = "scale("+zoomlevel+")";
  zcol_output.innerHTML = 'Image Zoom (Crop) : '+ (enlargecol.value)+"%";
  zcol_output_mob.innerHTML = 'Image Zoom (Crop) : '+ (enlargecol.value)+"%";
}

brightcol.oninput = function() {
	brightness_col_output_mob.innerHTML = 'Brightness  : '+ (brightcol.value);
  brightness_col_output.innerHTML = 'Brightness  : '+ (brightcol.value);
  
  console.log(brightcol,brightcol.value);
}
contrastcol.oninput = function() {
	contrast_col_output_mob.innerHTML = 'Contrast: '+ (contrastcol.value);
  contrast_col_output.innerHTML = 'Contrast: '+ (contrastcol.value);
  console.log(contrast_col_output,contrast_col_output_mob)
}
saturationcol.oninput = function() {
	saturation_col_output_mob.innerHTML = 'Saturation: '+ (saturationcol.value);
  saturation_col_output.innerHTML = 'Saturation: '+ (saturationcol.value);
  
}
zcol.oninput = function() {
	zcol_output_mob.innerHTML = 'Image Zoom (Crop): '+ (zoom.value);
  zcol_output.innerHTML = 'Image Zoom (Crop): '+ (zoom.value);
  
}
enlargecol.oninput = function() {
	enlargecol_output_mob.innerHTML = 'Image Enlarge: '+ (enlargecol.value);
  enlargecol_output.innerHTML = 'Image Enlarge: '+ (enlargecol.value);
  
}
rangeCol.oninput = function() {
	user_col_output_mob.innerHTML = 'Colours Used: '+ (rangeCol.value);
  user_col_output.innerHTML = 'Colours Used: '+ (rangeCol.value);
  
}

//mobile
brightcol_mob.oninput = function() {
  brightness_col_output.innerHTML = 'htness: '+ (brightcol_mob.value);
  brightness_col_output_mob.innerHTML = 'htness: '+ (brightcol_mob.value);
  console.log(brightcol_mob,brightcol_mob.value);
}
 contrastcol_mob.oninput = function() {
  contrast_col_output.innerHTML = 'Contrast: '+ (contrastcol_mob.value);
  contrast_col_output_mob.innerHTML = 'Contrast: '+ (contrastcol_mob.value);
}
saturationcol_mob.oninput = function() {
  saturation_col_output.innerHTML = 'Saturation: '+ (saturationcol_mob.value);
  saturation_col_output_mob.innerHTML = 'Saturation: '+ (saturationcol_mob.value);
}
zcol_mob.oninput = function() {
  zcol_output.innerHTML = 'Image Zoom (Crop): '+ (zoom_mob.value);
  zcol_output_mob.innerHTML = 'Image Zoom (Crop): '+ (zoom_mob.value);
}
enlargecol_mob.oninput = function() {
  enlargecol_output.innerHTML = 'Image Enlarge: '+ (enlargecol_mob.value);
  enlargecol_output_mob.innerHTML = 'Image Enlarge: '+ (enlargecol_mob.value);
}
rangeCol_mob.oninput = function() {
  user_col_output.innerHTML = 'Colours Used: '+ (rangeCol_mob.value);
  user_col_output_mob.innerHTML = 'Colours Used: '+ (rangeCol_mob.value);
} 

p_qty_html.onchange = function (){
  var p_qty = document.getElementById("p_qty").value;
  p_price.innerHTML = "Product price: ₹ " + ((y * x)*999)*p_qty;
}

document.getElementById("vplus").onclick = function() {
  bY.value = parseInt(bY.value) + 1;
  baseplate_output.innerHTML = (bY.value) + "&nbsp &nbsp x &nbsp &nbsp" + (bX.value);
  baseplate_output_mob.innerHTML = (bY.value) + "&nbsp &nbsp x &nbsp &nbsp" + (bX.value);
  var fixx = (y)*25.6
  var zx = Math.round(fixx * 10) / 10
  var fixy = (x)*25.6
  var zy = Math.round(fixy * 10) / 10
  t_size.innerHTML = "Image Size: " + zx.toFixed() + " cm x " + zy.toFixed()+ " cm";
  pieces.innerHTML = "Pieces: "+x*y*1024;
  document.getElementById('para').submit()
}
document.getElementById("vminus").onclick = function() {
  bY.value = parseInt(bY.value) - 1;
  baseplate_output.innerHTML = (bY.value) + "&nbsp &nbsp x &nbsp &nbsp" + (bX.value);
  baseplate_output_mob.innerHTML = (bY.value) + "&nbsp &nbsp x &nbsp &nbsp" + (bX.value);
  var fixx = (y)*25.6
  var zx = Math.round(fixx * 10) / 10
  var fixy = (x)*25.6
  var zy = Math.round(fixy * 10) / 10
  pieces.innerHTML = "Pieces: "+x*y*1024;
  t_size.innerHTML = "Image Size: " + zx.toFixed() + " cm x " + zy.toFixed()+ " cm";
}
document.getElementById("vplus-mob").onclick = function() {
  bY.value = parseInt(bY.value) + 1;
  baseplate_output.innerHTML = (bY.value) + "&nbsp &nbsp x &nbsp &nbsp" + (bX.value);
  baseplate_output_mob.innerHTML = (bY.value) + "&nbsp &nbsp x &nbsp &nbsp" + (bX.value);
  var fixx = (y)*25.6
  var zx = Math.round(fixx * 10) / 10
  var fixy = (x)*25.6
  var zy = Math.round(fixy * 10) / 10
  t_size.innerHTML = "Image Size: " + zx.toFixed() + " cm x " + zy.toFixed()+ " cm";
  pieces.innerHTML = "Pieces: "+x*y*1024;
  document.getElementById('para').submit()
}
document.getElementById("vminus-mob").onclick = function() {
  bY.value = parseInt(bY.value) - 1;
  baseplate_output.innerHTML = (bY.value) + "&nbsp &nbsp x &nbsp &nbsp" + (bX.value);
  baseplate_output_mob.innerHTML = (bY.value) + "&nbsp &nbsp x &nbsp &nbsp" + (bX.value);
  var fixx = (y)*25.6
  var zx = Math.round(fixx * 10) / 10
  var fixy = (x)*25.6
  var zy = Math.round(fixy * 10) / 10
  pieces.innerHTML = "Pieces: "+x*y*1024;
  t_size.innerHTML = "Image Size: " + zx.toFixed() + " cm x " + zy.toFixed()+ " cm";
}

document.getElementById("hplus").onclick = function() {
  bX.value = parseInt(bX.value) + 1;
  baseplate_output.innerHTML = (bY.value) + "&nbsp &nbsp x &nbsp &nbsp" + (bX.value);
  baseplate_output_mob.innerHTML = (bY.value) + "&nbsp &nbsp x &nbsp &nbsp" + (bX.value);
  var fixx = (y)*25.6
  var zx = Math.round(fixx * 10) / 10
  var fixy = (x)*25.6
  var zy = Math.round(fixy * 10) / 10
  t_size.innerHTML = "Image Size: " + zx + " cm x " + zy+ " cm";
  pieces.innerHTML = "Pieces: "+x*y*1024;
  document.getElementById('para').submit()
}
document.getElementById("hminus").onclick = function() {
  bX.value = parseInt(bX.value) - 1;
  baseplate_output.innerHTML = (bY.value) + "&nbsp &nbsp x &nbsp &nbsp" + (bX.value);
  baseplate_output_mob.innerHTML = (bY.value) + "&nbsp &nbsp x &nbsp &nbsp" + (bX.value);
  var fixx = (y)*25.6
  var zx = Math.round(fixx * 10) / 10
  var fixy = (x)*25.6
  var zy = Math.round(fixy * 10) / 10
  t_size.innerHTML = "Image Size: " + zx + " cm x " + zy+ " cm";
  pieces.innerHTML = "Pieces: "+x*y*1024;
  document.getElementById('para').submit()
}
document.getElementById("hplus-mob").onclick = function() {
  bX.value = parseInt(bX.value) + 1;
  baseplate_output.innerHTML = (bY.value) + "&nbsp &nbsp x &nbsp &nbsp" + (bX.value);
  baseplate_output_mob.innerHTML = (bY.value) + "&nbsp &nbsp x &nbsp &nbsp" + (bX.value);
  var fixx = (y)*25.6
  var zx = Math.round(fixx * 10) / 10
  var fixy = (x)*25.6
  var zy = Math.round(fixy * 10) / 10
  t_size.innerHTML = "Image Size: " + zx + " cm x " + zy+ " cm";
  pieces.innerHTML = "Pieces: "+x*y*1024;
  document.getElementById('para').submit()
}
document.getElementById("hminus-mob").onclick = function() {
  bX.value = parseInt(bX.value) - 1;
  baseplate_output.innerHTML = (bY.value) + "&nbsp &nbsp x &nbsp &nbsp" + (bX.value);
  baseplate_output_mob.innerHTML = (bY.value) + "&nbsp &nbsp x &nbsp &nbsp" + (bX.value);
  var fixx = (y)*25.6
  var zx = Math.round(fixx * 10) / 10
  var fixy = (x)*25.6
  var zy = Math.round(fixy * 10) / 10
  t_size.innerHTML = "Image Size: " + zx + " cm x " + zy+ " cm";
  pieces.innerHTML = "Pieces: "+x*y*1024;
  document.getElementById('para').submit()
}

bY.onmouseup = function() {
  baseplate_output.innerHTML = (bY.value) + "&nbsp &nbsp x &nbsp &nbsp" + (bX.value);
  baseplate_output_mob.innerHTML = (bY.value) + "&nbsp &nbsp x &nbsp &nbsp" + (bX.value);
  // document.getElementById('para').submit()
}

bX.onmouseup = function() {
  baseplate_output.innerHTML = (bY.value) + "&nbsp &nbsp x &nbsp &nbsp" + (bX.value);
  baseplate_output_mob.innerHTML = (bY.value) + "&nbsp &nbsp x &nbsp &nbsp" + (bX.value);
  // document.getElementById('para').submit()
}

document.getElementById("colminus").onclick = function() {
  rangeCol.value = parseInt(rangeCol.value) - 1;
  user_col_output.innerHTML = 'Colours Used: '+ (rangeCol.value);
  user_col_output_mob.innerHTML = 'Colours Used: '+ (rangeCol.value);
}
document.getElementById("colplus").onclick = function() {
  rangeCol.value = parseInt(rangeCol.value) + 1;
  user_col_output.innerHTML = 'Colours Used: '+ (rangeCol.value); 
  user_col_output_mob.innerHTML = 'Colours Used: '+ (rangeCol.value);
}
document.getElementById("colminus-mob").onclick = function() {
  rangeCol_mob.value = parseInt(rangeCol_mob.value) - 1;
  user_col_output.innerHTML = 'Colours Used: '+ (rangeCol_mob.value);
  user_col_output_mob.innerHTML = 'Colours Used: '+ (rangeCol_mob.value);
}
document.getElementById("colplus-mob").onclick = function() {
  rangeCol_mob.value = parseInt(rangeCol_mob.value) + 1;
  user_col_output.innerHTML = 'Colours Used: '+ (rangeCol_mob.value); 
  user_col_output_mob.innerHTML = 'Colours Used: '+ (rangeCol_mob.value);
}

document.getElementById("brightminus").onclick = function() {
  brightcol.value = parseInt(brightcol.value) - 1;
  brightness_col_output.innerHTML = 'Brightness: '+ (brightcol.value);
  brightness_col_output_mob.innerHTML = 'Brightness: '+ (brightcol.value);
  console.log(brightcol,brightcol.value,brightcol_mob,brightcol_mob.value);
}
document.getElementById("brightplus").onclick = function() {
  brightcol.value = parseInt(brightcol.value) + 1;
  brightness_col_output.innerHTML = 'Brightness: '+ (brightcol.value); 
  brightness_col_output_mob.innerHTML = 'Brightness: '+ (brightcol.value);
  console.log(brightcol,brightcol.value,brightcol_mob,brightcol_mob.value);
}
document.getElementById("brightminus-mob").onclick = function() {
  brightcol_mob.value = parseInt(brightcol_mob.value) - 1;
  brightness_col_output.innerHTML = 'Brightness: '+ (brightcol_mob.value);
  brightness_col_output_mob.innerHTML = 'Brightness: '+ (brightcol_mob.value);
  console.log(brightcol,brightcol.value,brightcol_mob,brightcol_mob.value);
}
document.getElementById("brightplus-mob").onclick = function() {
  brightcol_mob.value = parseInt(brightcol_mob.value) + 1;
  brightness_col_output.innerHTML = 'Brightness: '+ (brightcol_mob.value); 
  brightness_col_output_mob.innerHTML = 'Brightness: '+ (brightcol_mob.value);
  console.log(brightcol,brightcol.value,brightcol_mob,brightcol_mob.value);
}

document.getElementById("saturationminus").onclick = function() {
  saturationcol.value = parseInt(saturationcol.value) - 1;
  saturation_col_output.innerHTML = 'Saturation: '+ (saturationcol.value);
  saturation_col_output_mob.innerHTML = 'Saturation: '+ (saturationcol.value);
}
document.getElementById("saturationplus").onclick = function() {
  saturationcol.value = parseInt(saturationcol.value) + 1;
  saturation_col_output.innerHTML = 'Saturation: '+ (saturationcol.value); 
  saturation_col_output_mob.innerHTML = 'Saturation: '+ (saturationcol.value);
}
document.getElementById("saturationminus-mob").onclick = function() {
  saturationcol_mob.value = parseInt(saturationcol_mob.value) - 1;
  saturation_col_output.innerHTML = 'Saturation: '+ (saturationcol_mob.value);
  saturation_col_output_mob.innerHTML = 'Saturation: '+ (saturationcol_mob.value);
}
document.getElementById("saturationplus-mob").onclick = function() {
  saturationcol_mob.value = parseInt(saturationcol_mob.value) + 1;
  saturation_col_output.innerHTML = 'Saturation: '+ (saturationcol_mob.value); 
  saturation_col_output_mob.innerHTML = 'Saturation: '+ (saturationcol_mob.value);
}

document.getElementById("contrastminus").onclick = function() {
  contrastcol.value = parseInt(contrastcol.value) - 1;
  contrast_col_output.innerHTML = 'Contrast: '+ (contrastcol.value);
  contrast_col_output_mob.innerHTML = 'Contrast: '+ (contrastcol.value);
}
document.getElementById("contrastplus").onclick = function() {
  contrastcol.value = parseInt(contrastcol.value) + 1;
  contrast_col_output.innerHTML = 'Contrast: '+ (contrastcol.value); 
  contrast_col_output_mob.innerHTML = 'Contrast: '+ (contrastcol.value);
}
document.getElementById("contrastminus-mob").onclick = function() {
  contrastcol_mob.value = parseInt(contrastcol_mob.value) - 1;
  contrast_col_output.innerHTML = 'Contrast: '+ (contrastcol_mob.value);
  contrast_col_output_mob.innerHTML = 'Contrast: '+ (contrastcol_mob.value);
}
document.getElementById("contrastplus-mob").onclick = function() {
  contrastcol_mob.value = parseInt(contrastcol_mob.value) + 1;
  contrast_col_output.innerHTML = 'Contrast: '+ (contrastcol_mob.value); 
  contrast_col_output_mob.innerHTML = 'Contrast: '+ (contrastcol_mob.value);
}

document.getElementById("zoomminus").onclick = function() {
  zcol.value = parseInt(zcol.value) - 1;
  zcol_output.innerHTML = 'Image Zoom (Crop): '+ (zcol.value);
  zcol_output_mob.innerHTML = 'Image Zoom (Crop): '+ (zcol.value);
}
document.getElementById("zoomplus").onclick = function() {
  zcol.value = parseInt(zcol.value) + 1;
  zcol_output.innerHTML = 'Image Zoom (Crop): '+ (zcol.value); 
  zcol_output_mob.innerHTML = 'Image Zoom (Crop): '+ (zcol.value);
}
document.getElementById("zoomminus-mob").onclick = function() {
  zcol_mob.value = parseInt(zcol_mob.value) - 1;
  zcol_output.innerHTML = 'Image Zoom (Crop): '+ (zcol_mob.value);
  zcol_output_mob.innerHTML = 'Image Zoom (Crop): '+ (zcol_mob.value);
}
document.getElementById("zoomplus-mob").onclick = function() {
  zcol_mob.value = parseInt(zcol_mob.value) + 1;
  zcol_output.innerHTML = 'Image Zoom (Crop): '+ (zcol_mob.value); 
  zcol_output_mob.innerHTML = 'Image Zoom (Crop): '+ (zcol_mob.value);
}

/* document.getElementById("enlargeminus").onclick = function() {
  enlargecol.value = parseInt(enlargecol.value) - 1;
  enlargecol_output.innerHTML = 'Image Enlarge: '+ (enlargecol.value);
  enlargecol_output_mob.innerHTML = 'Image Enlarge: '+ (enlargecol.value);
}

document.getElementById("enlargeplus").onclick = function() {
  enlargecol.value = parseInt(enlargecol.value) + 1;
  enlargecol_output.innerHTML = 'Image Enlarge: '+ (enlargecol.value); 
  enlargecol_output_mob.innerHTML = 'Image Enlarge: '+ (enlargecol.value);
}
document.getElementById("enlargeminus-mob").onclick = function() {
  enlargecol.value = parseInt(enlargecol.value) - 1;
  enlargecol_output.innerHTML = 'Image Enlarge: '+ (enlargecol-mob.value);
  enlargecol_output_mob.innerHTML = 'Image Enlarge: '+ (enlargecol-mob.value);
}

document.getElementById("enlargeplus-mob").onclick = function() {
  enlargecol.value = parseInt(enlargecol.value) + 1;
  enlargecol_output.innerHTML = 'Image Enlarge: '+ (enlargecol-mob.value); 
  enlargecol_output_mob.innerHTML = 'Image Enlarge: '+ (enlargecol-mob.value);
} 
 
enlargecol.onmouseup = function() {
enlargecol_output.innerHTML = 'Image Enlarge: '+ (enlargecol.value); 
enlargecol_output_mob.innerHTML = 'Image Enlarge: '+ (enlargecol.value);
}
 */
/* function selectMobileTabControl(e,item) {
	$('.pmc-header-item.selected').removeClass('selected');
	e.target.addClass('selected');
	${`#pmcSize`}.style.display = none;
	${`#pmcColour`}.style.display = none;
	${`#pmcEnhance`}.style.display = none;
	${`#pmcZoom`}.style.display = none;
	${`#pmc${item}`}.style = block;
} */
