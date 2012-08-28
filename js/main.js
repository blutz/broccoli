/* Author:
	Byron Lutz
*/

/***** GET RID OF HARD IMAGE SIZES *****/
$(document).ready(function() {
	$('.wp-post-image').removeAttr('height').removeAttr('width');
});

/***** RESPONSIVE FIXES *****/
$(document).ready(function() {
	var width = $(window).width();
	
	// Portrait phone
	if(width <= 480) {
	}
	
	// Landscape phone
	if(width <= 767) {
		$('#access-projectlist').addClass("collapse access-collapse");
	}
	
	if(width <= 979) {
		$('.bighello-describe').parent().removeClass('span5').addClass('span8');
		$('#latest-rotator').removeClass('span9').addClass('span12');
		$('#latest-socialmedia-container').removeClass('span3').addClass('span12');
	}
});

