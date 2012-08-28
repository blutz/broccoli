/* Author:
	Byron Lutz
*/

/***** GET RID OF HARD IMAGE SIZES *****/
$(document).ready(function() {
	$('.wp-post-image').removeAttr('height').removeAttr('width');
	$('.size-thumbnail').removeAttr('height');
});

/***** MAKE CLICKING AN ACCORDIAN BUTTON NOT SCROLL TO TOP *****/
$(document).ready(function() {
	$('[data-toggle="collapse"]').click(function(e) {
		e.preventDefault();
	});
	$('.project-menu-menu > li > ul').on('show', function (e) {
		$(this).parent().find('a i').attr('class','icon-chevron-up');
	})
	$('.project-menu-menu > li > ul').on('hide', function (e) {
		$(this).parent().find('a i').attr('class','icon-chevron-down');
	})
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
		$('#project-content').before($('#project-side'));
	}
	
	if(width <= 979) {
		$('.bighello-describe').parent().removeClass('span5').addClass('span8');
		$('#latest-rotator').removeClass('span9').addClass('span12');
		$('#latest-socialmedia-container').removeClass('span3').addClass('span12');
	}
});

