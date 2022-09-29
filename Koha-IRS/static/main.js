var bY = document.getElementById("range-Y");
var bX = document.getElementById("range-X");
var baseplate_output = document.getElementById("baseplate");
var user_col_output = document.getElementById("user_col");
var brightness_col_output = document.getElementById("brightness_col");
var contrast_col_output = document.getElementById("contrast_col");
var saturation_col_output = document.getElementById("saturation_col");
var zcol_output = document.getElementById("zoom_col");
var enlargecol= document.getElementById("enlarger");
var enlargecol_output = document.getElementById("enlarge_col");
var hubblepic = document.getElementById('hubblepic');
var t_size = document.getElementById("t_size");
var p_price = document.getElementById("p_price");
var rangeCol = document.getElementById("rangeCol");
var zcol= document.getElementById("zoom");
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
var mi = window.innerWidth < 768;
// document.getElementById("mobileIndicator").checked;

console.log(mi);



// const val = document. querySelector('p_qty'). value;


baseplate_output.innerHTML = (bY.value) + "&nbsp &nbsp x &nbsp &nbsp" + (bX.value);
t_size.innerHTML = "Size : " + Math.floor((y)*25.6) + " cm x " + Math.floor((x)*25.6) + " cm";
pieces.innerHTML = "Pieces : "+x*y*1024;
// alert(p_qty);
p_price.innerHTML = "Price : ₹ " + ((y * x)*999)*p_qty;
user_col_output.innerHTML = 'Colours Used: '+ (mi===true?rangeCol_mob.value:rangeCol.value);
brightness_col_output.innerHTML = 'Brightness: '+ (mi===true?brightcol_mob.value:brightcol.value);
contrast_col_output.innerHTML = 'Contrast: '+ (mi===true?contrastcol_mob.value:contrastcol.value);
saturation_col_output.innerHTML = 'Saturation: '+ (mi===true?saturationcol_mob.value:saturationcol.value);
zcol_output.innerHTML = 'Image Zoom (Crop): '+ (mi===true?zcol_mob.value:zcol.value);
enlargecol_output.innerHTML = 'Image Enlarge: '+ (mi===true?enlargecol_mob.value:enlargecol.value);

//for mobile
user_col_output_mob.innerHTML = 'Colours Used: '+ (mi===true?rangeCol.value:rangeCol_mob.value);
brightness_col_output_mob.innerHTML = 'Brightness: '+ (mi===true?brightcol.value:brightcol_mob.value);
contrast_col_output_mob.innerHTML = 'Contrast: '+ (mi===true?contrastcol.value:contrastcol_mob.value);
saturation_col_output_mob.innerHTML = 'Saturation: '+ (mi===true?saturationcol.value:saturationcol_mob.value);
zcol_output_mob.innerHTML = 'Image Zoom (Crop): '+ (mi===true?zcol.value:zcol_mob.value);
enlargecol_output_mob.innerHTML = 'Image Enlarge: '+ (mi===true?enlargecol.value:enlargecol_mob.value);
baseplate_output_mob.innerHTML = (bY.value) + "&nbsp &nbsp x &nbsp &nbsp" + (bX.value);





function deepdive(){
  return;

  zoomlevel = (mi===true?enlargecol.valueAsNumber:enlargecol_mob.valueAsNumber);
  hubblepic.style.webkitTransform = "scale("+zoomlevel+")";
  hubblepic.style.transform = "scale("+zoomlevel+")";
  zcol_output.innerHTML = 'Image Zoom (Crop) : '+ (mi===true?enlargecol.value:enlargecol_mob.value)+"%";
  zcol_output_mob.innerHTML = 'Image Zoom (Crop) : '+ (mi===true?enlargecol.value:enlargecol_mob.value)+"%";
}

function setBrightness(){
  
  brightness_col_output_mob.innerHTML = 'Brightness  : '+ (mi===true?brightcol.value:brightcol_mob.value);
  brightness_col_output.innerHTML = 'Brightness  : '+ (mi===true?brightcol.value:brightcol_mob.value);

}
function setContrast(){
  contrast_col_output_mob.innerHTML = 'Contrast: '+ (mi===true?contrastcol.value:contrastcol_mob.value);
  contrast_col_output.innerHTML = 'Contrast: '+ (mi===true?contrastcol.value:contrastcol_mob.value);
}
function setSaturation(){
  saturation_col_output_mob.innerHTML = 'Saturation: '+ (mi===true?saturationcol.value:saturationcol_mob.value);
  saturation_col_output.innerHTML = 'Saturation: '+ (mi===true?saturationcol.value:saturationcol_mob.value);
}
function setZoom(){
  zcol_output_mob.innerHTML = 'Image Zoom (Crop): '+ (mi===true?zcol.value:zcol_mob.value);
  zcol_output.innerHTML = 'Image Zoom (Crop): '+ (mi===true?zcol.value:zcol_mob.value);
}
function setEnlarge(){
  enlargecol_output_mob.innerHTML = 'Image Enlarge: '+ (mi===true?enlargecol.value:enlargecol_mob.value);
  enlargecol_output.innerHTML = 'Image Enlarge: '+ (mi===true?enlargecol.value:enlargecol_mob.value);
}
function setRangeCol(){
  user_col_output_mob.innerHTML = 'Colours Used: '+ (mi===true?rangeCol.value:rangeCol_mob.value);
  user_col_output.innerHTML = 'Colours Used: '+ (mi===true?rangeCol.value:rangeCol_mob.value);
}

brightcol.oninput = setBrightness();
brightcol_mob.oninput = setBrightness();
contrastcol.oninput = setContrast();
contrastcol_mob.oninput = setContrast();
saturationcol.oninput = setSaturation();
saturationcol_mob.oninput = setSaturation();
zcol.oninput = setZoom();
zcol_mob.oninput = setZoom();
// enlargecol.oninput = setEnlarge();
// enlargecol_mob.oninput = setEnlarge();
rangeCol.oninput =setRangeCol();
rangeCol_mob.oninput = setRangeCol();


p_qty_html.onchange = function (){
  var p_qty = document.getElementById("p_qty").value;
  p_price.innerHTML = "Product price: ₹ " + ((y * x)*999)*p_qty;
}


function vPlus(){
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

function vMinus(){
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


document.getElementById("vplus").onclick = function() {
 vPlus();
}
document.getElementById("vminus").onclick = function() {
  vMinus();
}
document.getElementById("vplus-mob").onclick = function() {
 vPlus();
}
document.getElementById("vminus-mob").onclick = function() {
 vMinus();
}

function hPlus(){
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

function hMinus(){
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

document.getElementById("hplus").onclick = function() {
  hPlus();
}
document.getElementById("hminus").onclick = function() {
  hMinus();
}
document.getElementById("hplus-mob").onclick = function() {
  hPlus();
}
document.getElementById("hminus-mob").onclick = function() {
  hMinus();
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

function upDownByOne(type, operation){
  let temp;
  switch(type){
    case 'col': 
      temp = parseInt(mi===true?rangeCol_mob.value:rangeCol.value) +(operation==='addition'?1:-1);
      rangeCol.value = temp;
      rangeCol_mob.value =temp;
      break;
    case 'bright':
      temp = parseInt(mi===true?brightcol_mob.value:brightcol.value) +(operation==='addition'?1:-1);
      brightcol.value = temp;
      brightcol_mob.value = temp;
      break;
    case 'sat':
      temp = parseInt(mi===true?saturationcol_mob.value:saturationcol.value) +(operation==='addition'?1:-1);
      saturationcol.value = temp;
      saturationcol_mob.value = temp;
      break;
    case 'contrast':
      temp = parseInt(mi===true?contrastcol_mob.value:contrastcol.value) +(operation==='addition'?1:-1);
      contrastcol.value = temp;
      contrastcol_mob.value = temp;
      break;
    case 'zoom':
      temp=  parseInt(mi===true?zcol_mob.value:zcol.value)  +(operation==='addition'?1:-1);
      zcol.value =temp;
      zcol_mob.value = temp;
      break;

  }
}

document.getElementById("colminus").onclick = function() {
  upDownByOne('col','subtraction')
  setRangeCol();
}
document.getElementById("colplus").onclick = function() {
  upDownByOne('col','addition')
  setRangeCol();
}
document.getElementById("colminus-mob").onclick = function() {
  upDownByOne('col','subtraction')
  setRangeCol();
}
document.getElementById("colplus-mob").onclick = function() {
  upDownByOne('col','addition')
  setRangeCol();
}

document.getElementById("brightminus").onclick = function() {
  upDownByOne('bright','subtraction')
  setBrightness();
}
document.getElementById("brightplus").onclick = function() {
  upDownByOne('bright','addition')
  setBrightness();
}
document.getElementById("brightminus-mob").onclick = function() {
  upDownByOne('bright','subtraction')
  setBrightness();
}
document.getElementById("brightplus-mob").onclick = function() {
  upDownByOne('bright','addition')
  setBrightness();
}

document.getElementById("saturationminus").onclick = function() {
  upDownByOne('sat','subtraction')
  setSaturation();
}
document.getElementById("saturationplus").onclick = function() {
  upDownByOne('sat','addition')
  setSaturation();
}
document.getElementById("saturationminus-mob").onclick = function() {
  upDownByOne('sat','subtraction')
  setSaturation();
}
document.getElementById("saturationplus-mob").onclick = function() {
  upDownByOne('sat','addition')
  setSaturation();
}

document.getElementById("contrastminus").onclick = function() {
  upDownByOne('contrast','subtraction')
  setContrast();
}
document.getElementById("contrastplus").onclick = function() {
  upDownByOne('contrast','addition')
  setContrast();
}
document.getElementById("contrastminus-mob").onclick = function() {
  upDownByOne('contrast','subtraction')
  setContrast();
}
document.getElementById("contrastplus-mob").onclick = function() {
  upDownByOne('contrast','addition')
  setContrast();
}

document.getElementById("zoomminus").onclick = function() {
  upDownByOne('zoom','subtraction')
  setZoom();
}
document.getElementById("zoomplus").onclick = function() {
  upDownByOne('zoom','addition')
  setZoom();
}
document.getElementById("zoomminus-mob").onclick = function() {
  upDownByOne('zoom','subtraction')
  setZoom();
}
document.getElementById("zoomplus-mob").onclick = function() {
  upDownByOne('zoom','addition')
  setZoom();
}



/* function selectMobileTabControl(e,item) {
	$('.pmc-header-item.selected').removeClass('selected');
	e.target.addClass('selected');
	${`#pmcSize`}.style.display = none;
	${`#pmcColour`}.style.display = none;
	${`#pmcEnhance`}.style.display = none;
	${`#pmcZoom`}.style.display = none;
	${`#pmc${item}`}.style = block;
} */
