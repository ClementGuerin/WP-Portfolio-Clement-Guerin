<?php


add_theme_support('post-thumbnails');


function wp_enqueue_scripts () {
    $path = get_stylesheet_directory_uri();

    $css = array(
        'name'  => $path . '/assets/css/name.css'
    );


    foreach ($css as $id => $path_file) {
        wp_register_style($id, $path_file, array(), false, 'all');
        wp_enqueue_style($id);
    }


    $js = array(
        'name'   => $path . '/assets/js/name.js'
    );


    wp_deregister_script('jquery');

    foreach ($js as $id => $path_file) {
        wp_register_script($id, $path_file, array(), false, true);
        wp_enqueue_script($id);
    }
    

}

add_action('wp_enqueue_scripts', 'wp_enqueue_scripts');

function wp_register_menu () {
  register_nav_menu('header-menu',__( 'Header Menu', 'Main menu at the top of the screen' ));
}

add_action( 'init', 'wp_register_menu' );
