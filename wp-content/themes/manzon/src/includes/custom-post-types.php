<?php

function manzon_reviews_post_type() {
    register_post_type('manzon_review',
    array(
        'labels'      => array(
            'name'          => __('Reviews', 'textdomain'),
            'singular_name' => __('Review', 'textdomain'),
            'add_new_item'  => __( 'Add New Review', 'textdomain' ),
        ),
            'public'      => true,
            'has_archive' => true,
            'menu_icon'   => 'dashicons-format-quote',
            'supports'    => ['editor']
        )
    );
}

function manzon_services_post_type() {
    register_post_type('manzon_service',
    array(
        'labels'      => array(
            'name'          => __('Services', 'textdomain'),
            'singular_name' => __('Service', 'textdomain'),
            'add_new_item'  => __( 'Add New Service', 'textdomain' ),

        ),
            'public'      => true,
            'has_archive' => true,
            'menu_icon'   => 'dashicons-lightbulb',
    )
);
}


function manzon_custom_post_types() {
    manzon_reviews_post_type();
    manzon_services_post_type();
}

add_action('init', 'manzon_custom_post_types');