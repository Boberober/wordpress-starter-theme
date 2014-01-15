<?php 
// require_once('wp_bootstrap_navwalker.php'); 

add_action( 'init', 'site_init' );
add_theme_support( 'post-thumbnails' );

add_action( 'wp_enqueue_scripts', 'load_scripts' );



function load_scripts() {
    wp_enqueue_script( 'jquery' );
}
function site_init() {
  include(dirname(__FILE__) . '/architecture.php');

  register_my_menus();
} 
function site_widgets_init(){
    // include(dirname(__FILE__) . '/widgets.php');  
}
function register_my_menus() {
  register_nav_menus(array(
      'header-menu' => __( 'Header Menu' ),
    )
  );
}
function wpt_register_js() {
    wp_enqueue_script('jquery');
    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
    wp_enqueue_script('jquery.bootstrap.min');
}
add_action( 'init', 'wpt_register_js' );