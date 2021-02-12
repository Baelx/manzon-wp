<?php

function manzon_load_scripts() {
    wp_enqueue_style('manzon_frontend_css', get_template_directory_uri() . '/dist/main.css', false, '1.0.0', 'all');
    wp_enqueue_script( 'manzon_frontend_js', get_template_directory_uri() . '/dist/main.js', array ( 'jquery' ), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'manzon_load_scripts');
