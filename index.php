<?php get_header(); ?>
    <div id="content" class="container">
    	<div class="row">
	    	<div id="project-menu" class="span3">
				<?php get_template_part('menu', 'projects'); ?>
	    	</div><!-- end div#project-menu -->
			<div id="main" class="span9" role="main">
				<?php get_template_part('loop', 'single'); ?>
			</div><!-- /#main -->
		</div><!-- end div.row -->
    </div><!-- /#content -->
<?php get_footer(); ?>