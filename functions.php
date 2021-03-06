<?php
/**
 * Roots functions
 */

if (!defined('__DIR__')) { define('__DIR__', dirname(__FILE__)); }

require_once locate_template('/inc/util.php');            // Utility functions
require_once locate_template('/inc/config.php');          // Configuration and constants
require_once locate_template('/inc/activation.php');      // Theme activation
require_once locate_template('/inc/template-tags.php');   // Template tags
require_once locate_template('/inc/cleanup.php');         // Cleanup
require_once locate_template('/inc/scripts.php');         // Scripts and stylesheets
require_once locate_template('/inc/htaccess.php');        // Rewrites for assets, H5BP .htaccess
require_once locate_template('/inc/hooks.php');           // Hooks
require_once locate_template('/inc/actions.php');         // Actions
require_once locate_template('/inc/widgets.php');         // Sidebars and widgets
require_once locate_template('/inc/custom.php');          // Custom functions
require_once locate_template('/inc/front-page.php');	  // Front page customization plugin

function roots_setup() {

  // Make theme available for translation
  load_theme_textdomain('roots', get_template_directory() . '/lang');

  // Register wp_nav_menu() menus (http://codex.wordpress.org/Function_Reference/register_nav_menus)
  register_nav_menus(array(
    'top_navigation' => __('Top Navigation', 'cpo'),
    'front_buttons' => __('Front Buttons', 'cpo'),
    'sioc_projects' => __('SIOC Navigation', 'cpo'),
    'src_projects' => __('SRC Navigation', 'cpo'),
    'fitted' => __('[FITTED] Navigation', 'cpo'),
    'cposa_education_projects' => __('CPOSA Education Navigation', 'cpo'),
    'cposa_health_projects' => __('CPOSA Health Navigation', 'cpo'),
    'cposa_justice_projects' => __('CPOSA Social Justice Navigation', 'cpo'),
    'srec_projects' => __('SREC Navigation', 'cpo'),
    'cpo_nav' => __('Inner page navigation', 'cpo'),
  ));

  // Add post thumbnails (http://codex.wordpress.org/Post_Thumbnails)
  add_theme_support('post-thumbnails');
  // set_post_thumbnail_size(150, 150, false);
  add_image_size('project-pic', 870, 9999); // 300px wide (and unlimited height)
  add_image_size('slider', 450, 350, true); // 300px wide (and unlimited height)


  // Add post formats (http://codex.wordpress.org/Post_Formats)
  // add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

  // Tell the TinyMCE editor to use a custom stylesheet
  add_editor_style('css/editor-style.css');

}

add_action('after_setup_theme', 'roots_setup');
