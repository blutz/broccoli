/* Author:
	Byron Lutz
*/

$(document).ready(function() {
	var width = $(window).width();
	
	if(width <= 979) {
		$('.bighello-describe').parent().removeClass('span5').addClass('span8');
		$('#latest-rotator').removeClass('span9').addClass('span12');
		$('#latest-socialmedia-container').removeClass('span3').addClass('span12');
	}
});







