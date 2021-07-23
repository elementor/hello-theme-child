<?
class LinksideFeatures{

  public static function init(){
    add_action('after_setup_theme' , array('LinksideFeatures', 'config_custom_logo'));
  }

  public static function config_custom_logo() {

      add_theme_support( 'custom-logo' );

  }
}
LinksideFeatures::init();
