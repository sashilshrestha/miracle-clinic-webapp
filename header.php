<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body>
	<div id="load">
		<?php echo get_custom_logo(); ?>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/loading.gif" alt="" class="spinner">
	</div>
	<header id="wrapper-navbar">
		<nav id="main-nav">
			<div class="top-header bg-dark">
				<div class="container mx-auto">
					<p><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/mail-icon.png">miracleskinhair@gmail.com</p> <span class="mx-3">|</span>
					<p><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/phone-icon.png">01-5919826, 9817125774</p>

				</div>
			</div>
			<div class="navbar">
				<div class="container mx-auto justify-between">
					<div class="navbar-brand">
						<?php echo get_custom_logo(); ?>
					</div>

					<!-- The WordPress Menu goes here -->
					
					<?php
					wp_nav_menu(
						array(
							'menu_id' => 'primary-menu',
							'menu_class'      => 'nav-links',
						)
					);
					?>
					<div class="ham-burger">
						<div class="all-lines">
							<div class="line line1"></div>
							<div class="line line2"></div>
							<div class="line line3"></div>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>