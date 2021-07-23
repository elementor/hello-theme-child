<?php
class ACFBlocks{
  public static function init(){
    foreach(glob(get_stylesheet_directory() . '/inc/acf-blocks/*.php') as $filename){
      include $filename;
    }
  }
}
ACFBlocks::init();
