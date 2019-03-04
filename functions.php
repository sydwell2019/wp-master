<?php

function brand_load_resources() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    wp_enqueue_style('style', get_stylesheet_uri());
}


add_action('wp_enqueue_scripts', 'brand_load_resources');



