<?php

function manzon_reviews_post_type() {
    register_post_type('manzon_review',
    array(
        'labels'      => array(
            'name'          => __('Reviews', 'textdomain'),
            'singular_name' => __('Review', 'textdomain'),
            'add_new_item'  => __('Add New Review', 'textdomain' ),
            'edit_item'     => __('Edit Review', 'textdomain'),
            'add_new_item'  => __( 'Add Review' ),

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
            'edit_item'     => __('Edit Service', 'textdomain'),
            'add_new_item'  => __( 'Add Service' ),

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

function manzon_review_columns($columns) {
    $columns = array(
        'content' => 'Content'
    );

    return $columns;
}

function manzon_review_content_column($column, $post_id) {
    if ( 'content' === $column ) {
        $post_edit_link = get_edit_post_link($post_id);

        echo '<a class="row-title" href="'.$post_edit_link.'">';
        echo get_the_content($post_id);
        echo '</a>';
    }
}


add_action('init', 'manzon_custom_post_types');
add_filter( 'manage_manzon_review_posts_columns', 'manzon_review_columns' );
add_action( 'manage_manzon_review_posts_custom_column', 'manzon_review_content_column', 10, 2);

