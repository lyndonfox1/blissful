<?php 

if (!function_exists('blissful_enqueue_scripts')):
    function blissful_enqueue_scripts() {
 //enqueue styles
 wp_enqueue_style('blissful-theme', get_stylesheet_uri());
 wp_enqueue_style('blissful-nav-style', get_template_directory_uri() . '/assets/css/bootstrap.css');
//enqueue scripts 

    }
endif;
add_action('wp_enqueue_scripts', 'blissful_enqueue_scripts');



// Theme Setup
if( !function_exists('blissful_setup')):
function blissful_setup(){
    // add theme support image
    add_theme_support('post-thumbnails');

    // Custom logo
    add_theme_support('custom-logo', array(
        'height' => 250,
        'width' => 250,
    ));

    // Register Menu
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu'),
        'footer-menu' => __('Footer'),
        'social-menu' => __('Social')
    ));
}
endif;
add_action('after_setup_theme', 'blissful_setup');