<?php get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="container">
        	<div class="row">
	        	<div id="project-menu" class="span3">
					<?php get_template_part('menu', 'projects'); ?>
		    	</div><!-- end div#project-menu -->
				<div id="main" class="span9" role="main">
		        	<h1><?php _e('Search Results for', 'roots'); ?> <?php echo get_search_query(); ?></h1>
        	        <?php get_template_part('loop', 'search'); ?>
				</div><!-- /#main -->
      </div><!-- /#main -->
    </div><!-- /#content -->
<?php get_footer(); ?>