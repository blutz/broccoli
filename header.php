<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

  <link rel="icon" href="/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">


  <?php if (current_theme_supports('bootstrap-responsive')) { ?><meta name="viewport" content="width=device-width, initial-scale=1.0"><?php } ?>

  <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.5.3.min.js"></script>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.7.2.min.js"><\/script>')</script>

  <?php roots_head(); ?>
  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<!-- Facebook code -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=72296391616";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


  <!--[if lt IE 7]><div class="alert">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</div><![endif]-->

  <?php
  	if( is_front_page() )
      get_template_part('templates/header', 'front');
    else
      get_template_part('templates/header', 'inside');
  ?>
