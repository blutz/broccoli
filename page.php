<?php get_header(); ?>
    <div id="content" class="container">
    	<div class="row">
	    	<div id="project-menu" class="span3">
	    		<div class="project-menu-wrap">
	    			<ul class="project-menu-menu">
	    				<li><a href="#">CPO</a>
	    					<ul>
		    					<a href="#"><li class="active-project">Test link</li></a>
		    					<a href="#"><li>Test link</li></a>
		    				</ul>
	    				</li>
	    				<li><a href="#">Service (CPOSA)</a>
	    					<ul>
		    					<a href="#"><li>Test link</li></a>
		    					<a href="#"><li>Test link</li></a>
		    				</ul>
	    				</li>
	    				<li><a href="#">Retention (SRC)</a>
	    					<ul>
		    					<a href="#"><li>Test link</li></a>
		    					<a href="#"><li>Test link</li></a>
		    				</ul>
	    				</li>
	    				<li><a href="#">Access (SIAC)</a>
	    					<ul>
		    					<a href="#"><li>Test link</li></a>
		    					<a href="#"><li>Test link</li></a>
		    				</ul>
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