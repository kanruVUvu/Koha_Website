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



function deepdive(){
  zoomlevel = enlargecol.valueAsNumber;
  hubblepic.style.webkitTransform = "scale("+zoomlevel+")";
  hubblepic.style.transform = "scale("+zoomlevel+")";
  zcol_output.innerHTML = 'Image Zoom (Crop) : '+ (enlargecol.value)+"%";
}

brightcol.oninput = function() {
  brightness_col_output.innerHTML = 'Brightness: '+ (brightcol.value);
}
contrastcol.oninput = function() {
  contrast_col_output.innerHTML = 'Contrast: '+ (contrastcol.value);
}
saturationcol.oninput = function() {
  saturation_col_output.innerHTML = 'Saturation: '+ (saturationcol.value);
}
zcol.oninput = function() {
  zcol_output.innerHTML = 'Image Zoom (Crop): '+ (zoom.value);
}
enlargecol.oninput = function() {
  enlargecol_output.innerHTML = 'Image Enlarge: '+ (enlargecol.value);
}
rangeCol.oninput = function() {
  user_col_output.innerHTML = 'Colours Used: '+ (rangeCol.value);
}

p_qty_html.onchange = function (){
  var p_qty = document.getElementById("p_qty").value;
  p_price.innerHTML = "Product price: ₹ " + ((y * x)*999)*p_qty;
}

document.getElementById("vplus").onclick = function() {
  bY.value = parseInt(bY.value) + 1;
  baseplate_output.innerHTML = (bY.value) + "&nbsp &nbsp x &nbsp &nbsp" + (bX.value);
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
  // document.getElementById('para').submit()
}

bX.onmouseup = function() {
  baseplate_output.innerHTML = (bY.value) + "&nbsp &nbsp x &nbsp &nbsp" + (bX.value);
  // document.getElementById('para').submit()
}
document.getElementById("colminus").onclick = function() {
  rangeCol.value = parseInt(rangeCol.value) - 1;
  user_col_output.innerHTML = 'Colours Used: '+ (rangeCol.value);
}

document.getElementById("colplus").onclick = function() {
  rangeCol.value = parseInt(rangeCol.value) + 1;
  user_col_output.innerHTML = 'Colours Used: '+ (rangeCol.value); 
}
rangeCol.onmouseup = function() {
user_col_output.innerHTML = 'Colours Used: '+ (rangeCol.value); 
}
document.getElementById("brightminus").onclick = function() {
  brightcol.value = parseInt(brightcol.value) - 1;
  brightness_col_output.innerHTML = 'Brightness: '+ (brightcol.value);
}

document.getElementById("brightplus").onclick = function() {
  brightcol.value = parseInt(brightcol.value) + 1;
  brightness_col_output.innerHTML = 'Brightness: '+ (brightcol.value); 
}
brightcol.onmouseup = function() {
brightness_col_output.innerHTML = 'Brightness: '+ (brightcol.value); 
}
document.getElementById("saturationminus").onclick = function() {
  saturationcol.value = parseInt(saturationcol.value) - 1;
  saturation_col_output.innerHTML = 'Saturation: '+ (saturationcol.value);
}

document.getElementById("saturationplus").onclick = function() {
  saturationcol.value = parseInt(saturationcol.value) + 1;
  saturation_col_output.innerHTML = 'Saturation: '+ (saturationcol.value); 
}
rangeCol.onmouseup = function() {
saturation_col_output.innerHTML = 'Saturation: '+ (saturationcol.value); 
}
document.getElementById("contrastminus").onclick = function() {
  contrastcol.value = parseInt(contrastcol.value) - 1;
  contrast_col_output.innerHTML = 'Contrast: '+ (contrastcol.value);
}

document.getElementById("contrastplus").onclick = function() {
  contrastcol.value = parseInt(contrastcol.value) + 1;
  contrast_col_output.innerHTML = 'Contrast: '+ (contrastcol.value); 
}
contrastcol.onmouseup = function() {
contrast_col_output.innerHTML = 'Contrast: '+ (contrastcol.value); 
}
document.getElementById("zoomminus").onclick = function() {
  zcol.value = parseInt(zcol.value) - 1;
  zcol_output.innerHTML = 'Image Zoom (Crop): '+ (zcol.value);
}

document.getElementById("zoomplus").onclick = function() {
  zcol.value = parseInt(zcol.value) + 1;
  zcol_output.innerHTML = 'Image Zoom (Crop): '+ (zcol.value); 
}
zcol.onmouseup = function() {
zcol_output.innerHTML = 'Image Zoom (Crop): '+ (zcol.value); 
}
document.getElementById("enlargeminus").onclick = function() {
  enlargecol.value = parseInt(enlargecol.value) - 1;
  enlargecol_output.innerHTML = 'Image Enlarge: '+ (enlargecol.value);
}

document.getElementById("enlargeplus").onclick = function() {
  enlargecol.value = parseInt(enlargecol.value) + 1;
  enlargecol_output.innerHTML = 'Image Enlarge: '+ (enlargecol.value); 
}
enlargecol.onmouseup = function() {
enlargecol_output.innerHTML = 'Image Enlarge: '+ (enlargecol.value); 
}
