<div id="header-back" class="inside">
	<div class="container header">
		<div class="row inside" id="header-top">
			<div id="header-logo" class="span7">
				<a href="<?php echo site_url(); ?>"><img id="header-logo-img" src="/img/logo-big.png" /></a>
			</div><!-- end div#header-logo -->
			<div id="header-nav" class="span5">
				<form class="input-append" method="get" action="/">
					<input id="search" name="s" type="search" role="search" placeholder="Search..."
					/><submit class="btn"><i class="icon-search"></i></submit>
				</form>
			</div>
			
			<div class="dropdown visible-phone" id="dropdown-nav">
				<button class="dropdown-toggle btn btn-large" data-toggle="dropdown" data-target="#dropdown-nav">Menu <b class="caret"></b></button>	
				<?php wp_nav_menu( array(
					'theme_location' => 'top_navigation',
					'container' => '',
					'menu_class' => 'dropdown-menu',
					'menu_id' => 'mobile-dropdown'
				)); ?>
			</div><!-- end div#dropdown-nav -->
			
			
			
		</div>
		<div class="row" id="header-menu">
			<div class="hidden-phone">
				<?php wp_nav_menu( array(
					'theme_location' => 'top_navigation',
					'container' => '',
					'menu_class' => 'span12',
					'menu_id' => 'header-inside-nav-links'
				)); ?>
			</div><!-- end div.hidden-phone
-->
		</div><!-- end div#header-menu -->
	</div><!-- end div.header -->
</div><!-- end div#header-back -->
