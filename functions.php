<?php

/**
 * Theme setup.
 */
function tailpress_setup()
{
	add_theme_support('title-tag');

	register_nav_menus(
		array(
			'primary' => __('Primary Menu', 'tailpress'),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');

	add_theme_support('align-wide');
	add_theme_support('wp-block-styles');

	add_theme_support('editor-styles');
	add_editor_style('css/editor-style.css');
}

add_action('after_setup_theme', 'tailpress_setup');

/**
 * Enqueue theme assets.
 */
function tailpress_enqueue_scripts()
{
	$theme = wp_get_theme();
	wp_enqueue_script('jquery');
	wp_enqueue_style('tailpress-slider--css-theme', tailpress_asset('resources/css/slider-theme.css'), array(), $theme->get('Version'));
	wp_enqueue_style('tailpress-slider-css', tailpress_asset('resources/css/slider.css'), array(), $theme->get('Version'));
	wp_enqueue_style('tailpress', tailpress_asset('css/app.css'), array(), $theme->get('Version'));
	wp_enqueue_script('tailpress', tailpress_asset('js/app.js'), array(), $theme->get('Version'));
	wp_enqueue_script('tailpress-slider-js', tailpress_asset('resources/js/slider.js'), array(), $theme->get('Version'));
}

add_action('wp_enqueue_scripts', 'tailpress_enqueue_scripts');

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function tailpress_asset($path)
{
	if (wp_get_environment_type() === 'production') {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg('time', time(),  get_stylesheet_directory_uri() . '/' . $path);
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_li_class($classes, $item, $args, $depth)
{
	if (isset($args->li_class)) {
		$classes[] = $args->li_class;
	}

	if (isset($args->{"li_class_$depth"})) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter('nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4);

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class($classes, $args, $depth)
{
	if (isset($args->submenu_class)) {
		$classes[] = $args->submenu_class;
	}

	if (isset($args->{"submenu_class_$depth"})) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter('nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3);

// ----------------------------- Feature image in admin pannel -----------------------------
// show featured images in dashboard
add_image_size('prithak-admin-post-featured-image', 70, 120, false);

// Add the posts and pages columns filter. They both use the same function.
add_filter('manage_posts_columns', 'prithak_add_post_admin_thumbnail_column', 2);
add_filter('manage_pages_columns', 'prithak_add_post_admin_thumbnail_column', 2);

// Add the column
function prithak_add_post_admin_thumbnail_column($prithak_columns)
{
	$prithak_columns['prithak_thumb'] = __('Featured Image');
	return $prithak_columns;
}

// Manage Post and Page Admin Panel Columns
add_action('manage_posts_custom_column', 'prithak_show_post_thumbnail_column', 5, 2);
add_action('manage_pages_custom_column', 'prithak_show_post_thumbnail_column', 5, 2);

// Get featured-thumbnail size post thumbnail and display it
function prithak_show_post_thumbnail_column($prithak_columns, $prithak_id)
{
	switch ($prithak_columns) {
		case 'prithak_thumb':
			if (function_exists('the_post_thumbnail')) {
				echo the_post_thumbnail('prithak-admin-post-featured-image');
			} else
				echo 'hmm… your theme doesn\'t support featured image…';
			break;
	}
}

// ----------------------------- Custom Taxonomy for Custom Post -----------------------------
function taxonomies_services()
{
	$labels = array(
		'name'              => _x('Services Categories', 'taxonomy general name'),
		'singular_name'     => _x('Services Category', 'taxonomy singular name'),
		'search_items'      => __('Search Services Categories'),
		'all_items'         => __('All Services Categories'),
		'parent_item'       => __('Parent Services Category'),
		'parent_item_colon' => __('Parent Services Category:'),
		'edit_item'         => __('Edit Services Category'),
		'update_item'       => __('Update Services Category'),
		'add_new_item'      => __('Add New Services Category'),
		'new_item_name'     => __('New Services Category'),
		'menu_name'         => __('Services Categories'),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'show_in_rest' => true,
		'show_admin_column' => true,
	);
	register_taxonomy('services_category', 'services', $args);
}
add_action('init', 'taxonomies_services', 0);

// ----------------------------- Custom slider post type -----------------------------
function gk_custom_slider()
{
	register_post_type('services', [
		'rewrite' => ['slug' => 'services'],
		'labels' => [
			'name' => 'Services',
			'singular_name' => 'Service',
			'add_new_item' => 'Add New Service',
			'edit_item' => 'Edit Service',
		],
		'menu_icon' => 'dashicons-media-archive',
		'public' => true,
		'has_archive' => true,
		'show_in_rest' => true,
		'menu_position' => 10,
		'supports' => ['title', 'editor', 'thumbnail', 'page-attributes'],
		'taxonomies' => array('services_category')
	]);
}
add_action('init', 'gk_custom_slider');

// ----------------------------- Results post type -----------------------------
function gk_custom_results()
{
	register_post_type('results', [
		'rewrite' => ['slug' => 'results'],
		'labels' => [
			'name' => 'Results',
			'singular_name' => 'Result',
			'add_new_item' => 'Add New Result',
			'edit_item' => 'Edit Result',
		],
		'menu_icon' => 'dashicons-pressthis',
		'public' => true,
		'has_archive' => true,
		'show_in_rest' => true,
		'menu_position' => 14,
		'supports' => ['title', 'editor', 'thumbnail', 'page-attributes', 'taxonomy'],
	]);
}
add_action('init', 'gk_custom_results');

// ----------------------------- Teams post type -----------------------------
function gk_custom_teams()
{
	register_post_type('teams', [
		'rewrite' => ['slug' => 'teams'],
		'labels' => [
			'name' => 'Teams',
			'singular_name' => 'Team',
			'add_new_item' => 'Add New Team',
			'edit_item' => 'Edit Team',
		],
		'menu_icon' => 'dashicons-admin-users',
		'public' => true,
		'has_archive' => true,
		'show_in_rest' => true,
		'menu_position' => 15,
		'supports' => ['title', 'editor', 'thumbnail', 'page-attributes', 'taxonomy'],
	]);
}
add_action('init', 'gk_custom_teams');

// ----------------------------- Testimonials post type -----------------------------
function gk_custom_testimonials()
{
	register_post_type('testimonials', [
		'rewrite' => ['slug' => 'testimonials'],
		'labels' => [
			'name' => 'Testimonials',
			'singular_name' => 'Testimonial',
			'add_new_item' => 'Add New Testimonial',
			'edit_item' => 'Edit Testimonial',
		],
		'menu_icon' => 'dashicons-groups',
		'public' => true,
		'has_archive' => true,
		'show_in_rest' => true,
		'menu_position' => 15,
		'supports' => ['title', 'editor', 'thumbnail', 'page-attributes', 'taxonomy'],
	]);
}
add_action('init', 'gk_custom_testimonials');

// ----------------------------- Adding class name to menu -----------------------------
function anchor_menu_add_class($atts, $item, $args)
{
	if ($item->title == 'Home') {
		$class = 'ss-link'; // your class
		$atts['class'] = $class;
	}
	return $atts;
}
add_filter('nav_menu_link_attributes', 'anchor_menu_add_class', 10, 3);
