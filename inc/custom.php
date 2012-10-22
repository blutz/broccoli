<?php 

function cpoWidgets() {
	// Register bighello sidebar
	register_sidebar(array(
		'name' => __( 'Top text' ),
		'id' => 'top-text',
		'description' => __( 'An area for the top information on the site.' ),
		'before_widget' => '<span class="bighello-describe">',
		'after_widget' => '</span>',
		'before_title' => '',
		'after_title' => ''		
	));
	
	// Register access sidebar
	register_sidebar(array(
		'name' => __( 'Access (SIAC)' ),
		'id' => 'siac',
		'description' => __( 'Info about SIAC goes here' ),
		'before_widget' => '<p>',
		'after_widget' => '</p>',
		'before_title' => '',
		'after_title' => ''		
	));
}

add_action('widgets_init', 'cpoWidgets');