/* Author:
	Byron Lutz
*/

/***** SHOW APPROPRIATE HEADING ON SIDEBAR *****/
$(document).ready(function() {
	if($(window).innerWidth() >= 768)
		$('.project-menu-menu .active').parent().collapse('show');
});

/***** IMAGE SLIDER *****/
var maxSlides = 4;
// Switches from the current slide to whatever is defined in the event object
function sliderHandler(e) {
	e.preventDefault();
	console.log(e);
	
	// Find current slide number
	var currentItem = $('.latest-rotator-item.active').attr('id').substr(19);
	currentItem = parseInt(currentItem);
	if (!currentItem)
		currentItem = 1;
	
	// Find slide number we are switching to
	var nextItem = e.target.id.substr(16);
	console.log(nextItem);
	if(nextItem == 'next' || nextItem == 'ontrols-next')
		nextItem = currentItem + 1;
	else if (nextItem == 'prev' || nextItem == 'ontrols-prev')
		nextItem = currentItem -1;
	console.log(nextItem);
	nextItem = parseInt(nextItem);
	if (nextItem < 1)
		nextItem = 1;
	console.log(nextItem);
	if (nextItem > maxSlides)
		nextItem = maxSlides;
	console.log(nextItem);
		
	console.log("current: "+currentItem);
	console.log("next: "+nextItem);
	
	// Make sure we actually have to switch the slide
	if(currentItem == nextItem)
		return;
		
	// Now actually make the slide switch
	// Switch item
	$('#latest-rotator-item'+currentItem).removeClass('active');
	$('#latest-rotator-item'+nextItem).addClass('active');
	// Change navigation active state
	$('li#rotator-current').removeAttr('id');
	$('a#rotator-control-'+nextItem).parent().attr('id','rotator-current');
}

$(document).ready(function() {
	$('[id^="rotator-control-"]').click(sliderHandler);
});



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
	fixResponsive();
});

$(window).resize(function() {
	fixResponsive();
});

function fixResponsive() {
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
}

