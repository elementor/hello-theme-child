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
 class HelloElementorChild{
   public static function init(){
     self::load('__loader');
   }
   private static function load($file){
     require_once get_stylesheet_directory() . '/inc/' . $file . '.php';
   }
 }
 HelloElementorChild::init();
