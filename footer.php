<div id="footer-container">
	<div class="container footer">
		<div class="row">
			<div class="span3 hidden-phone">
				<h1>CPOSA <span>(Service)</span></h1>
				<h2>Education Caucus</h2>
    			<?php wp_nav_menu(array(
					'theme_location' => 'cposa_education_projects',
					'container' => '',
					'items_wrap' => '<ul class="%2$s">%3$s</ul>',
					'menu_class' => ''				
				)); ?>
				<h2>Health Caucus</h2>
    			<?php wp_nav_menu(array(
					'theme_location' => 'cposa_health_projects',
					'container' => '',
					'items_wrap' => '<ul class="%2$s">%3$s</ul>',
					'menu_class' => ''				
				)); ?>
				<h2>Social Justice</h2>
    			<?php wp_nav_menu(array(
					'theme_location' => 'cposa_justice_projects',
					'container' => '',
					'items_wrap' => '<ul class="%2$s">%3$s</ul>',
					'menu_class' => ''				
				)); ?>
			</div><!-- end div.span3 -->
			<div class="span3 hidden-phone">
				<h1>SIAC <span>(Access/Outreach)</span></h1>
    			<?php wp_nav_menu(array(
					'theme_location' => 'siac_projects',
					'container' => '',
					'items_wrap' => '<ul class="%2$s">%3$s</ul>',
					'menu_class' => ''				
				)); ?>
			</div><!-- end div.span3 -->
			<div class="span3 hidden-phone">
				<h1>SRC <span>(Retention)</span></h1>
    			<?php wp_nav_menu(array(
					'theme_location' => 'src_projects',
					'container' => '',
					'items_wrap' => '<ul class="%2$s">%3$s</ul>',
					'menu_class' => ''				
				)); ?>
				<h1>CPO</h1>
    			<?php wp_nav_menu(array(
					'theme_location' => 'cpo_nav',
					'container' => '',
					'items_wrap' => '<ul class="%2$s">%3$s</ul>',
					'menu_class' => ''				
				)); ?>
				<ul class="footer-sm">
					<a href="https://www.facebook.com/uclacpo"><li>Facebook</li></a>
					<a href="http://twitter.com/uclacpo"><li>Twitter</li></a>
				</ul>
			</div><!-- end div.span3 -->
			<div class="span3" id="footer-contact">
				<?php dynamic_sidebar('footer-sidebar'); ?>
				
				<img src="/img/logo-white.png" id="bottomlogo" />
				<p class="copyright">Content &copy; <?php echo date('Y'); ?> UCLA Community Programs Office Department.<br />All rights reserved.</p>
			</div>
		</div>
	</div><!-- end div.footer -->
</div>

  <?php wp_footer(); ?>

</body>
</html>