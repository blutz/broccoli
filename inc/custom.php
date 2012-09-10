<?php 

function registerSlidesJS() {
	wp_register_script('slides-js', get_template_directory_uri() . '/js/slides-beta.js');
}
add_action('wp_enqueue_scripts','registerSlidesJS');

function enqueueSlidesJS() {
	wp_enqueue_script('slides-js');
}
add_action('wp_enqueue_scripts','enqueueSlidesJS');