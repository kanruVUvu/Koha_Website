const loader = document.getElementById("preloader");
window.addEventListener("load",function(){
    loader.style.display="none";
    loader.hide('blind', {}, 5000);
    // $('#preloader').fadeOut('slow', function (){}).hide(1);
})
window.setTimeout(function() {
    $("#preloader").hide('blind', {}, 5000)
}, 5000);
// window.setTimeout(function (){
//     loader.style.display="none";
//     // $('#preloader').fadeOut('slow', function (){}).hide(1);
// },5000);
