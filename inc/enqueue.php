<?php
class HelloEnqueue{
  public static function init(){
    add_action('wp_enqueue_scripts', array('HelloEnqueue', 'enqueue_styles'));
    //add_action('wp_enqueue_scripts', array('HelloEnqueue', 'enqueue_scripts'));
  }
  public static function enqueue_scripts(){
    wp_enqueue_script('item-slider-scripts', get_stylesheet_directory() . 'assets/js/item-slider-block.js', array('jquery', 'font-awesome-pro-js'), false, true);
  }
  public static function enqueue_styles(){
    wp_enqueue_style('hello-elementor-child-style', get_stylesheet_directory_uri() . '/style.css', ['hello-elementor-theme-style',	],	'1.0.0'	);
    wp_enqueue_style('item-slider-scripts', get_stylesheet_directory() . '/assets/css/item-slider-block.min.css', array(), false, 'all');
    wp_enqueue_style('hello-child-styles', get_stylesheet_directory() . '/assets/css/hello-child.min.css', array(), false, 'all');
  }
}
HelloEnqueue::init();
