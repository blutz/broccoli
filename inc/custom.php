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
		'name' => __( 'Access/Outreach (SIOC)' ),
		'id' => 'sioc',
		'description' => __( 'Info about SIOC goes here' ),
		'before_widget' => '<p>',
		'after_widget' => '</p>',
		'before_title' => '',
		'after_title' => ''		
	));
	register_sidebar(array(
		'name' => __( 'Retention (SRC)' ),
		'id' => 'src',
		'description' => __( 'Info about SRC goes here' ),
		'before_widget' => '<p>',
		'after_widget' => '</p>',
		'before_title' => '',
		'after_title' => ''		
	));
	register_sidebar(array(
		'name' => __( 'Service (CPOSA)' ),
		'id' => 'cposa',
		'description' => __( 'Info about CPOSA goes here' ),
		'before_widget' => '<p>',
		'after_widget' => '</p>',
		'before_title' => '',
		'after_title' => ''		
	));
	register_sidebar(array(
		'name' => __( 'Risk management (SREC)' ),
		'id' => 'srec',
		'description' => __( 'Info about SREC goes here' ),
		'before_widget' => '<p>',
		'after_widget' => '</p>',
		'before_title' => '',
		'after_title' => ''		
	));
	
    
    register_sidebar(array(
		'name' => __( 'Front body' ),
		'id' => 'front-body',
		'description' => __( 'Text for the front page body' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h1>',
		'after_title' => '</h1>'		
    ));
    
	register_sidebar(array(
		'name' => __( 'Footer' ),
		'id' => 'footer-sidebar',
		'description' => __( 'Contact info for the footer' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>'		
    ));


}

add_action('widgets_init', 'cpoWidgets');


// Add the hr button to TinyMCE
function cpo_mce_buttons_2($buttons) {	
	/**
	 * Add in a core button that's disabled by default
	 */
	$buttons[] = 'hr';

	return $buttons;
}
add_filter('mce_buttons_2', 'cpo_mce_buttons_2');
