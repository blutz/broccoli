<?php get_header(); ?>
    <div id="content" class="container">
    	<div class="row">
	    	<div id="project-menu" class="span3">
	    		<div class="project-menu-wrap">
	    			<ul class="project-menu-menu">
	    				<li><a href="#" data-toggle="collapse" data-target="#menu-cpo">CPO <i class="icon-chevron-down"></i></a>
	    					<ul class="collapse" id="menu-cpo">
		    					<a href="#"><li class="active-project">Test link</li></a>
		    					<a href="#"><li>Test link</li></a>
		    				</ul>
	    				</li>
	    				<li><a href="#" data-toggle="collapse" data-target="#menu-cposa">Service (CPOSA) <i class="icon-chevron-down"></i></a>
	    					<ul class="collapse" id="menu-cposa">
		    					<a href="#"><li>Test link</li></a>
		    					<a href="#"><li>Test link</li></a>
		    				</ul>
	    				</li>
	    				<li><a href="#" data-toggle="collapse" data-target="#menu-src">Retention (SRC) <i class="icon-chevron-down"></i></a>
	    					<ul class="collapse" id="menu-src">
		    					<a href="#"><li>Test link</li></a>
		    					<a href="#"><li>Test link</li></a>
		    				</ul>
	    				</li>
	    				<li><a href="#" data-toggle="collapse" data-target="#menu-siac">Access (SIAC) <i class="icon-chevron-down"></i></a>
	    			<?php wp_nav_menu(array(
						'theme_location' => 'siac_projects',
						'container' => '',
						'items_wrap' => '<ul id="menu-siac" class="collapse %2$s">%3$s</ul>',
						'menu_class' => ''				
					)); ?>

	    				
<!--
	    					<ul class="collapse" id="menu-siac">
		    					<a href="#"><li>Test link</li></a>
		    					<a href="#"><li>Test link</li></a>
		    				</ul>
-->
	    				</li>
	    			</ul>
	    		</div>
	    	</div><!-- end div#project-menu -->
			<div id="main" class="span9" role="main">
				<?php get_template_part('loop', 'page'); ?>
			</div><!-- /#main -->
		</div><!-- end div.row -->
    </div><!-- /#content -->
<?php get_footer(); ?>