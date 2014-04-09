<?php get_header(); ?>

<div id="latest-container">
	<div class="container latest">
		<div class="row">
			<div id="latest-rotator" class="span12">
				<?php query_posts('posts_per_page=4'); ?>
				<?php $postnumber = 1; ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div id="latest-rotator-item<?php echo $postnumber; ?>" class="latest-rotator-item <?php if($postnumber == 1) echo 'active';?>">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('slider',array('class' => "latest-rotator-image")); ?></a>
					<div class="latest-rotator-item-text">
						<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
						<?php the_excerpt(); ?>
					</div><!-- div.latest-rotator-item-text -->
				</div><!-- end div#latest-rotator-item<?php echo $postnumber; ?> -->
				<?php $postnumber++; ?>
				<?php endwhile; endif; ?>
				
				<ul id="latest-rotator-controls">
					<li><a id="rotator-control-prev" href="#latest-rotator"><div id="latest-rotator-controls-prev"> </div>Prev</a></li>
					<li id="rotator-current"><a id="rotator-control-1" href="#"></a></li>
					<li><a id="rotator-control-2" href="#"></a></li>
					<li><a id="rotator-control-3" href="#"></a></li>
					<li><a id="rotator-control-4" href="#"></a></li>
					<li><a id="rotator-control-next" href="#"><div id="latest-rotator-controls-next"> </div>Next</a></li>
				</ul><!-- end div#latest-rotator-controls -->
			</div><!-- end div#latest-rotator -->
		</div>
	</div><!-- end div.latest -->
</div>

<div class="container pagebody">
	<div class="row">
		<div id="pagebody-main" class="span8">
			<?php dynamic_sidebar('front-body'); ?>
			<div id="pagebody-main-buttonset">
				<?php 
				foreach (wp_get_nav_menu_items('Front page buttons') as $item) :
				?>
					<a href="<?php echo $item->url; ?>"><button class="btn-main"><?php echo $item->title; ?></button></a>
				<?php endforeach; ?>
			</div>

		<div id="pagebody-main-tabs">
			<ul class="nav nav-tabs">
			   <li class="active"><a href="#access" data-toggle="tab">Access/Outreach</a></li>
			   <li><a href="#retention" data-toggle="tab">Retention</a></li>
			   <li><a href="#service" data-toggle="tab">Service</a></li>
			   <li><a href="#fitted" data-toggle="tab">Wellness</a></li>
			   <li><a href="#risk" data-toggle="tab">Risk management</a></li>
			</ul>
			<div class="tab-content">
			   <div class="tab-pane active" id="access">
					<h2>Getting students to college</h2>
					<button class="btn-main btn-collapse visible-phone" data-toggle="collapse" data-target=".access-collapse">View all access projects <b class="caret"></b></button>
					<?php wp_nav_menu(array(
						'theme_location' => 'sioc_projects',
						'container' => '',
						'items_wrap' => '<ul id="access-projectlist" class="projectlist %2$s">%3$s</ul>',
						'menu_class' => ''				
					)); ?>
	
					<?php dynamic_sidebar('sioc'); ?>
				</div><!-- end div.tab-pane#access -->
				<div class="tab-pane" id="retention">
					<h2>Helping students graduate</h2>
					<?php wp_nav_menu(array(
						'theme_location' => 'src_projects',
						'container' => '',
						'items_wrap' => '<ul id="src-projectlist" class="projectlist %2$s">%3$s</ul>',
						'menu_class' => ''				
					)); ?>
					<?php dynamic_sidebar('src'); ?>
				</div>
				<div class="tab-pane" id="service">
					<h2>Students helping our communities</h2>
					<ul id="cposa-projectlist" class="projectlist">
						<li class="menu-title">Education Caucus</li>
						<?php wp_nav_menu(array(
							'theme_location' => 'cposa_education_projects',
							'container' => '',
							'items_wrap' => '%3$s',
							'menu_class' => ''				
						)); ?>
						<li class="menu-title">Health Caucus</li>
						<?php wp_nav_menu(array(
							'theme_location' => 'cposa_health_projects',
							'container' => '',
							'items_wrap' => '%3$s',
							'menu_class' => ''				
						)); ?>
						<li class="menu-title">Social Justice</li>
						<?php wp_nav_menu(array(
							'theme_location' => 'cposa_justice_projects',
							'container' => '',
							'items_wrap' => '%3$s',
							'menu_class' => ''				
						)); ?>

					</ul>
					<?php dynamic_sidebar('cposa'); ?>
				</div>
				<div class="tab-pane" id="fitted">
					<h2>Fitness Improvement Training through Exercise and Diet</h2>
					<?php wp_nav_menu(array(
						'theme_location' => 'fitted',
						'container' => '',
						'items_wrap' => '<ul id="fitted-projectlist" class="projectlist %2$s">%3$s</ul>',
						'menu_class' => ''				
					)); ?>
					<?php dynamic_sidebar('fitted'); ?>
				</div>
				<div class="tab-pane" id="risk">
					<h2>Managing risk while helping our communities</h2>
					<?php wp_nav_menu(array(
						'theme_location' => 'srec_projects',
						'container' => '',
						'items_wrap' => '<ul id="srec-projectlist" class="projectlist %2$s">%3$s</ul>',
						'menu_class' => ''				
					)); ?>
					<?php dynamic_sidebar('srec'); ?>
				</div>
			</div>
		</div>
		</div><!-- end div#pagebody-main -->
		<div id="pagebody-side" class="span4">
			<div class="fb-like-box" data-href="http://www.facebook.com/uclacpo" data-width="300" data-show-faces="true" data-stream="true" data-header="true"></div>
			<!-- insert facebook code here! -->
		</div><!-- end div#pagebody-side -->
	</div>
</div><!-- end div.pagebody -->




<?php get_footer(); ?>
