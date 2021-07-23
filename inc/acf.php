<?php
//class to load all acf assets
  class ACF{

    public static function init(){
      foreach(glob(get_stylesheet_directory() . '/inc/acf/*.php') as $filename){
        include $filename;
      }
    }


  }
ACF::init();
