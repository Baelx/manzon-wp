<?php


function manzon_add_meta() {
    add_meta_box(
        'manzon_service_type',  
        __('Service Type'),  
        'manzon_service_type_mb_content',
        'manzon_service',
        'side'                           
    );
}


function manzon_service_type_mb_content($post) {
    wp_nonce_field('save_manzon_service_type', 'manzon_service_type_nonce');
    $value = get_post_meta( $post->ID, '_manzon_service_type_key', true );
    ?>
    <label for="manzon-service-type-input">Which service type does this fall under?</label>
    <br>
    <select id="manzon-service-type-input" name="manzon-service-type-input">
        <option value=""> - Select one - </option>
        <option value="residential" <?php selected($value, 'residential') ?>>Residential</option>
        <option value="commercial" <?php selected($value, 'commercial') ?>>Commercial</option>
    </select>
    <?php
}

/**
 * Services type meta box save
 */
function save_manzon_service_type( $post_id) {
    if ( ! isset( $_POST['manzon_service_type_nonce'])) {
        return;
    }

    if (! wp_verify_nonce( $_POST['manzon_service_type_nonce'], 'save_manzon_service_type')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (! isset($_POST['manzon-service-type-input'])) {
        return;
    }

    $manzon_service_type_data = sanitize_text_field($_POST['manzon-service-type-input']);

    update_post_meta($post_id, '_manzon_service_type_key', $manzon_service_type_data );
}


add_action( 'add_meta_boxes', 'manzon_add_meta' );
add_action( 'save_post', 'save_manzon_service_type' );
