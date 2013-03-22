<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
		<div class="project-header">
			<h1><?php the_title(); ?></h1>
			<?php the_post_thumbnail('project-pic'); ?>
		</div>
		<div class="row" id="project-inside">
			<div class="span6" id="project-content">
				<?php 
				$tagline = get_post_meta($post->ID, 'project_tagline', true);
				if(isset($tagline)) : ?>
			      <span class="project-tagline"><?php echo $tagline; ?></span>
			    <?php endif; ?>
			    <?php
 					$facebook_page_url = get_post_meta($post->ID, 'facebook_page_url', true);
					if($facebook_page_url != "") : ?>
					    <div class="fb-like-box" data-href="<?php echo $facebook_page_url; ?>" data-width="300" data-height="400" data-show-faces="true" data-stream="true" data-header="true"></div>
			    <?php endif; ?>
			      <?php the_content(); ?>
			</div><!-- end div#project-content -->
			
			
			
			
			
			
			
			<aside class="span3" id="project-side">
				<?php 
					$caption = get_post(get_post_thumbnail_id($post->ID))->post_excerpt;
					if($caption != "") :
				?>
					<span class="photocaption-above">Above</span>
					<span class="photocaption"><?php echo $caption; ?></span>
				<?php endif; ?>
				<?php
					$twitter_handle = get_post_meta($post->ID, 'twitter_handle', true);
					if($twitter_handle != "") : ?>
						<div id="twitter-button">
							<a href="https://twitter.com/<?php echo $twitter_handle; ?>" class="twitter-follow-button" data-show-count="false">Follow @<?php echo $twitter_handle; ?></a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</div><!-- end div#twitter-button -->
				<?php endif; ?>
				<?php
					$sidebar = get_field('sidebar');
					if ($sidebar != "") : ?>
						<div class="sidebar-part hidden-phone">
							<?php echo $sidebar; ?>
						</div><!-- end div.sidebar-part -->
				<?php endif; ?>
				<?php
					$volunteer_info = get_post_meta($post->ID, 'volunteer_info', true);
					if ($volunteer_info != "") : ?>
						<div class="sidebar-part">
							<h3>Volunteer</h3>
							<?php echo $volunteer_info; ?>
						</div><!-- end div.sidebar-part -->
				<?php endif; ?>
				<?php
					$staff = get_field('staff');
					if ($staff != "") : ?>
						<div class="sidebar-part hidden-phone">
							<h3>Staff</h3>
							<?php echo $staff; ?>
						</div><!-- end div.sidebar-part -->
				<?php endif; ?>
			</aside><!-- end aside#project-side -->
		</div>
<?php endwhile; /* End loop */ ?>