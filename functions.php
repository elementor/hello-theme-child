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
	$ver = time();
	//SCRIPT
	wp_enqueue_script('jquery');
	wp_enqueue_script('cb-script', get_stylesheet_directory_uri() . '/js/script.js', array(), $ver, true);

	//STYLE
	wp_enqueue_style('hello-elementor-child-style',	get_stylesheet_directory_uri() . '/style.css', false, $ver, 'all');
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20 );