<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts' );

/**
 * Include the TGM_Plugin_Activation class.
 *
 */
require_once get_stylesheet_directory() . '/hello-child/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'hello_child_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 */
function hello_child_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		array(
			'name'     => 'Elementor Website Builder',
			'slug'     => 'elementor',
			'required' => false,
		),
		array(
			'name'     => 'Smush – Compress, Optimize and Lazy Load Images',
			'slug'     => 'wp-smushit',
			'required' => false,
		),
		array(
			'name'     => 'SVG Support',
			'slug'     => 'svg-support',
			'required' => false,
		),
		array(
			'name'     => 'Wordfence Security – Firewall & Malware Scan',
			'slug'     => 'wordfence',
			'required' => false,
		),
		array(
			'name'     => 'Wordfence Assistant',
			'slug'     => 'wordfence-assistant',
			'required' => false,
		),
		array(
			'name'     => 'WP Mail SMTP by WPForms',
			'slug'     => 'wp-mail-smtp',
			'required' => false,
		),
		array(
			'name'     => 'WPS Hide Login',
			'slug'     => 'wps-hide-login',
			'required' => false,
		),
		array(
			'name'     => 'Yoast SEO',
			'slug'     => 'wordpress-seo',
			'required' => false,
		),

	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 */
	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}
