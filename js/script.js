//Accordion

var action="click"; //click, hover, double click for answer to open. set to click by default
var speed="500"; //Set transition speed

$(document).ready(function(){
	//Question handler
	$('li.q').on(action, function(){
		//Get next element (which is the answer)
		$(this).next()
			.slideToggle(speed)
			//Select all other answers
				.siblings('li.a')
					.slideUp();
		// Get image for active question
		var img = $(this).children('img');
		//Remove the rotate class for all images except the active
		$('img').not(img).removeClass('rotate');
		//Toggle rotate class
		img.toggleClass('rotate');
	});
});
(function(d, m){
	var kommunicateSettings =
		{"appId":"28697f7e85fe0fdff7aad97521eeac9c1","popupWidget":true,"automaticChatOpenOnNavigation":true};
	var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;
	s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
	var h = document.getElementsByTagName("head")[0]; h.appendChild(s);
	window.kommunicate = m; m._globals = kommunicateSettings;
})(document, window.kommunicate || {});
