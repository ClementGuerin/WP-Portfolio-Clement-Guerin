<?php

// Load CSS and JS files
// ---------------------------------

function cg_wp_enqueue_scripts () {
    $path = get_stylesheet_directory_uri();

    $css = array(
      'stylesheet'  => $path . '/assets/css/styles.css'
    );


    foreach ($css as $id => $path_file) {
        wp_register_style($id, $path_file, array(), false, 'all');
        wp_enqueue_style($id);
    }


    $js = array(
      'jquery'   => $path . '/assets/js/jquery-3.2.1.slim.min.js',
      'bootstrap'   => $path . '/assets/js/bootstrap.min.js',
      'popper'   => $path . '/assets/js/popper.min.js',
      'main'   => $path . '/assets/js/main.js'
    );


    wp_deregister_script('jquery');

    foreach ($js as $id => $path_file) {
        wp_register_script($id, $path_file, array(), false, true);
        wp_enqueue_script($id);
    }
}

add_action('wp_enqueue_scripts', 'cg_wp_enqueue_scripts');

// Add Primary Menu
// ---------------------------------

function register_primary_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'theme-text-domain' ) );
}

add_action( 'after_setup_theme', 'register_primary_menu' );

// Add Footer Menu
// ---------------------------------

function register_footer_menu() {
  register_nav_menu( 'footer', __( 'Footer Menu', 'theme-text-domain' ) );
}

add_action( 'after_setup_theme', 'register_footer_menu' );

// Add Bootstrap 4 classes to Primary Menu
// ---------------------------------

function add_classes_on_li($classes, $item, $args) {
  $classes['class'] = 'nav-item';
  return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);

function add_classes_on_a($classes) {
  $classes['class'] = "nav-link";
  return $classes;
}
add_filter( 'nav_menu_link_attributes', 'add_classes_on_a');

// Add class to Wordpress excerpt
// ---------------------------------

function add_class_excerpt($excerpt) {
  $excerpt = str_replace( "<p", "<p class=\"excerpt\"", $excerpt );
  return $excerpt;
}

add_filter('the_excerpt',  'add_class_excerpt');

// Support thumbnails
// ---------------------------------

add_theme_support( 'post-thumbnails' );