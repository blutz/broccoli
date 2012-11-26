	    		<div class="project-menu-wrap">
	    			<ul class="project-menu-menu">
	    				<li><a href="#" data-toggle="collapse" data-target="#menu-cpo">CPO <i class="icon-chevron-down"></i></a>
			    			<?php wp_nav_menu(array(
								'theme_location' => 'cpo_nav',
								'container' => '',
								'items_wrap' => '<ul id="menu-cpo" class="collapse %2$s">%3$s</ul>',
								'menu_class' => ''				
							)); ?>
	    				</li>
	    				<li><a href="#" data-toggle="collapse" data-target="#menu-cposa">Service (CPOSA) <i class="icon-chevron-down"></i></a>
			    			<?php wp_nav_menu(array(
								'theme_location' => 'cposa_projects',
								'container' => '',
								'items_wrap' => '<ul id="menu-cposa" class="collapse %2$s">%3$s</ul>',
								'menu_class' => ''				
							)); ?>
	    				</li>
	    				<li><a href="#" data-toggle="collapse" data-target="#menu-src">Retention (SRC) <i class="icon-chevron-down"></i></a>
			    			<?php wp_nav_menu(array(
								'theme_location' => 'src_projects',
								'container' => '',
								'items_wrap' => '<ul id="menu-src" class="collapse %2$s">%3$s</ul>',
								'menu_class' => ''				
							)); ?>
	    				</li>
	    				<li><a href="#" data-toggle="collapse" data-target="#menu-siac">Access (SIAC) <i class="icon-chevron-down"></i></a>
			    			<?php wp_nav_menu(array(
								'theme_location' => 'siac_projects',
								'container' => '',
								'items_wrap' => '<ul id="menu-siac" class="collapse %2$s">%3$s</ul>',
								'menu_class' => ''				
							)); ?>
	    				</li>
	    				<li><a href="#" data-toggle="collapse" data-target="#menu-srec">Risk management (SREC) <i class="icon-chevron-down"></i></a>
			    			<?php wp_nav_menu(array(
								'theme_location' => 'srec_projects',
								'container' => '',
								'items_wrap' => '<ul id="menu-srec" class="collapse %2$s">%3$s</ul>',
								'menu_class' => ''				
							)); ?>
	    				</li>
	    			</ul>
	    		</div>
