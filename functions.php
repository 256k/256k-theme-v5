<?php

// stylesheets and javascripts
function addResources() {
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style( 'font-awesome.min', get_template_directory_uri() .'/sass/_vendors/font-awesome/css/font-awesome.min.css', array(), null, 'all'  );
  wp_enqueue_script( 'jquery', $in_footer = true );
  // wp_enqueue_script( 'app', get_template_directory_uri() 'js/app.js' );
}

add_action('wp_enqueue_scripts', 'addResources');



//  custom except length

function custom_excerpt_length(){
  return 20;
}

add_filter('excerpt_length', 'custom_excerpt_length');



function theme_setup(){

  // registering menus
  register_nav_menus(array(
  'nav-menu' => __("Navigation Menu"),
  'footer' => __("footer Menu")
  ));


  // featured image support
  add_theme_support('post-thumbnails');



}

add_action('after_setup_theme', 'theme_setup');
