<?php
require_once('wp-bootstrap-navwalker.php');

function be_load_resources() {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js'
        , array('jquery'), '3.3.7', true );
}


add_action('wp_enqueue_scripts', 'be_load_resources');


// Allows WP to manage our navigation Navigation Menus
register_nav_menus( 
    array(
        'primary' => __('Primary Menu'),
        'seconds' => __('Second Menu')
    )
);
