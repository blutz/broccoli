<?php get_header(); ?>

<div id="latest-container">
	<div class="container latest">
		<div class="row">
			<div id="latest-rotator" class="span9">
				<?php query_posts('posts_per_page=4'); ?>
				<?php $postnumber = 1; ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div id="latest-rotator-item<?php echo $postnumber; ?>" class="latest-rotator-item <?php if($postnumber == 1) echo 'active';?>">
					<?php the_post_thumbnail('slider',array('class' => "latest-rotator-image")); ?>
					<div class="latest-rotator-item-text">
						<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
						<?php the_content('Read more &raquo;'); ?>
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
			<div id="latest-socialmedia-container" class="span3">
				<div id="latest-socialmedia">
					<h3>Latest Tweet</h3>
<!-- 					<p>The CPO Men's Retreat is this weekend! Contact Eder Gaona if you would like to attend for a couple days away from LA.</p> -->
						<p><?php latest_tweet(); ?></p>
					<a href="https://twitter.com/uclacpo" class="twitter-follow-button" data-show-count="false">Follow @uclacpo</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
			</div>
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
					<?php //print_r($item); ?>
					<a href="<?php echo $item->url; ?>"><button class="btn-main"><?php echo $item->title; ?></button></a>
				<?php endforeach; ?>
			</div>

		<div id="pagebody-main-tabs">
			<ul class="nav nav-tabs">
			   <li class="active"><a href="#access" data-toggle="tab">Access</a></li>
			   <li><a href="#retention" data-toggle="tab">Retention</a></li>
			   <li><a href="#service" data-toggle="tab">Service</a></li>
			   <li><a href="#risk" data-toggle="tab">Risk management</a></li>
			</ul>
			<div class="tab-content">
			   <div class="tab-pane active" id="access">
					<h2>Getting students to college</h2>
					<button class="btn-main btn-collapse visible-phone" data-toggle="collapse" data-target=".access-collapse">View all access projects <b class="caret"></b></button>
<!--
					<ul id="access-projectlist">
						<a href="#"><li>American Indian Recruitment</li></a>
						<a href="#"><li>Higher Opportunity Program For Education</li></a>
						<a href="#"><li>MEChA Xinachtli</li></a>
						<a href="#"><li>Mentors for Academic And Peer Support</li></a>
						<a href="#"><li>Pacific Islander Education and Retention</li></a>
						<a href="#"><li>Samahang Pilipino Advancing Community Empowerment</li></a>
						<a href="#"><li>Students Heightening Academic Performance through Education</li></a>
					</ul>
-->
					<?php wp_nav_menu(array(
						'theme_location' => 'siac_projects',
						'container' => '',
						'items_wrap' => '<ul id="access-projectlist" class="projectlist %2$s">%3$s</ul>',
						'menu_class' => ''				
					)); ?>
	
					<?php dynamic_sidebar('siac'); ?>
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
					<?php wp_nav_menu(array(
						'theme_location' => 'cposa_projects',
						'container' => '',
						'items_wrap' => '<ul id="cposa-projectlist" class="projectlist %2$s">%3$s</ul>',
						'menu_class' => ''				
					)); ?>
					<?php dynamic_sidebar('cposa'); ?>
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