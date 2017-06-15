<?php

function ju_enqueue() {
  echo 'Hello World!';
  echo get_template_directory_uri();
  echo '/css/bootstrap.css';
  
  /*
  wp_register_style( 'ju_google_fonts', 'http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic' );
  wp_register_style( 'ju_bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
  wp_register_style( 'ju_style', get_template_directory_uri() . '/style.css');
  wp_register_style( 'ju_dark', get_template_directory_uri() . '/css/dark.css');
  wp_register_style( 'ju_font_icons', get_template_directory_uri() . '/css/font-icons.css');
  wp_register_style( 'ju_animate', get_template_directory_uri() . '/css/animate.css');
  wp_register_style( 'ju_magnific_popup', get_template_directory_uri() . '/css/magnific-popup.css');
  wp_register_style( 'ju_responsive', get_template_directory_uri() . '/css/responsive.css');
  wp_register_style( 'ju_custom', get_template_directory_uri() . '/css/custom.css');
  
  wp_enqueue_style( 'ju_google_fonts' );
  wp_enqueue_style( 'ju_bootstrap' );
  wp_enqueue_style( 'ju_style' );
  wp_enqueue_style( 'ju_dark' );
  wp_enqueue_style( 'ju_font_icons' );
  wp_enqueue_style( 'ju_animate' );
  wp_enqueue_style( 'ju_magnific_popup' );
  wp_enqueue_style( 'ju_responsive' );
  wp_enqueue_style( 'ju_custom' );
  
  wp_register_script( 'ju_plugins', get_template_directory_uri() . '/assets/js/plugins.js', array(), false, true);
  wp_register_script( 'ju_functions', get_template_directory_uri() . '/assets/js/functions.js', array(), false, true);
  
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'ju_plugins' );
  wp_enqueue_script( 'ju_functions' );
  */
}

?>