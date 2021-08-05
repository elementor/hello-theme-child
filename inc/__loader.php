<?php
  class HelloElementorChildLoader{

    public static function init(){

      //Load all inc files
      self::load('acf');
      //self::load('acf-blocks');
      self::load('enqueue');
      self::load('features');
      self::load('cpt-floorplan');

    }
    private static function load($file){
      require get_stylesheet_directory() . '/inc/' . $file . '.php';
    }

  }
HelloElementorChildLoader::init();
