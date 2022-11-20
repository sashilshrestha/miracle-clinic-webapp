<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-gray-900 antialiased'); ?>>

	<?php do_action('tailpress_site_before'); ?>

	<div id="page" class="min-h-screen flex flex-col">

		<?php do_action('tailpress_header'); ?>

		<header>

			<div class="mx-auto container">
				<div class="lg:flex lg:justify-between lg:items-center border-b py-6">
					<div class="flex justify-between items-center">
						<div>
							<?php if (has_custom_logo()) { ?>
								<?php the_custom_logo(); ?>
							<?php } else { ?>
								<a href="<?php echo get_bloginfo('url'); ?>" class="font-extrabold text-lg uppercase">
									<?php echo get_bloginfo('name'); ?>
								</a>

								<p class="text-sm font-light text-gray-600">
									<?php echo get_bloginfo('description'); ?>
								</p>

							<?php } ?>
						</div>
					</div>

					<?php
					wp_nav_menu(
						array(
							'container_id'    => 'primary-menu',
							'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
							'menu_class'      => 'lg:flex lg:-mx-4',
							'theme_location'  => 'primary',
							'li_class'        => 'lg:mx-4',
							'fallback_cb'     => false,
						)
					);
					?>
				</div>
			</div>
		</header>

		<div id="content" class="site-content flex-grow">

			<?php if (is_front_page()) { ?>
			<?php } ?>

			<?php do_action('tailpress_content_start'); ?>

			<main>