<?php
require_once('wp-bootstrap-navwalker.php');

function be_load_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
}


add_action('wp_enqueue_scripts', 'be_load_resources');


// Allows WP to manage our navigation Navigation Menus
register_nav_menus( 
    array(
        'primary' => __('Primary Menu'),
        'seconds' => __('Second Menu')
    )
);
