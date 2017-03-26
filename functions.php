<?php

// stylesheets and javascripts
function addResources() {
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style( 'font-awesome.min', get_template_directory_uri() .'/sass/_vendors/font-awesome/css/font-awesome.min.css', array(), null, 'all'  );
  wp_enqueue_script( 'jquery', $in_footer = true );
  wp_enqueue_script( 'app', get_template_directory_uri() .'/js/app.js', true );
}

add_action('wp_enqueue_scripts', 'addResources');



//  custom except length

function custom_excerpt_length(){
  return 20;
}

add_filter('excerpt_length', 'custom_excerpt_length');

// add .active class on active navbar
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

function theme_setup(){

  // registering menus
  register_nav_menus(array(
  'nav-menu' => __("Navigation Menu"),
  'footer' => __("footer Menu")
  ));


  // featured image support
  add_theme_support('post-thumbnails');

  // adding website title dynamically
  add_theme_support( 'title-tag' );



}

add_action('after_setup_theme', 'theme_setup');
