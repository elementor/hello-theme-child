<?php
  class HelloElementorChildLoader{

    public static function init(){

      //Load all inc files
      //self::load('filename');


    }
    private static function load($file){
      require get_stylesheet_directory() . '/inc/' . $file . '.php';
    }

  }
HelloElementorChildLoader::init();
