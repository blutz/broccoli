<?php get_header(); ?>
    <div id="content" class="container">
    	<div class="row">
    		<div class="span3">
	    		<?php get_template_part('menu', 'projects'); ?>
	    	</div><!-- end div.span3 -->
			<div id="main" class="span9" role="main">
				<?php get_template_part('loop', 'page'); ?>
			</div><!-- /#main -->
		</div><!-- end div.row -->
    </div><!-- /#content -->
<?php get_footer(); ?>