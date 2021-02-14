<?php

function manzon_register_taxonomy_service_area() {
     $labels = array(
         'name'              => _x( 'Areas', 'taxonomy general name' ),
         'singular_name'     => _x( 'Area', 'taxonomy singular name' ),
         'search_items'      => __( 'Search Areas' ),
         'all_items'         => __( 'All Areas' ),
         'edit_item'         => __( 'Edit Area' ),
         'update_item'       => __( 'Update Area' ),
         'add_new_item'      => __( 'Add Area' ),
         'new_item_name'     => __( 'New Area' ),
         'menu_name'         => __( 'Area' ),
     );
     $args   = array(
         'hierarchical'      => false, 
         'labels'            => $labels,
         'show_ui'           => true,
         'show_admin_column' => true,
         'query_var'         => true,
         'rewrite'           => [ 'slug' => 'service_area' ],
     );
     register_taxonomy( 'service_area', [ 'manzon_service' ], $args );
}

function manzon_register_taxonomy_feature() {
    $labels = array(
        'name'              => _x( 'Features', 'taxonomy general name' ),
        'singular_name'     => _x( 'Feature', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Features' ),
        'all_items'         => __( 'All Features' ),
        'edit_item'         => __( 'Edit Feature' ),
        'update_item'       => __( 'Update Feature' ),
        'add_new_item'      => __( 'Add Feature' ),
        'new_item_name'     => __( 'New Feature Name' ),
        'menu_name'         => __( 'Feature' ),
    );
    $args   = array(
        'hierarchical'      => false, 
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'feature' ],
    );
    register_taxonomy( 'feature', [ 'manzon_service' ], $args );
}

function manzon_register_all_taxonomies() {
    manzon_register_taxonomy_feature();
    manzon_register_taxonomy_service_area();
}
add_action( 'init', 'manzon_register_all_taxonomies' );