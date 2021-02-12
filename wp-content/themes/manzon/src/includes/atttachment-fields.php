<?php
//function to add custom media field
function custom_media_add_media_custom_field( $form_fields, $post ) {
    $field_value = get_post_meta( $post->ID, 'custom_media_style', true );

    $form_fields['custom_media_style'] = array(
        'value' => $field_value ? $field_value : '',
        'label' => __( 'Style' ),
        'helps' => __( 'Enter your style' ),
        'input'  => 'select'
    );

    return $form_fields;
}
add_filter( 'attachment_fields_to_edit', 'custom_media_add_media_custom_field', null, 2 );

//save your custom media field
function custom_media_save_attachment( $attachment_id ) {
    if ( isset( $_REQUEST['attachments'][ $attachment_id ]['custom_media_style'] ) ) {
        $custom_media_style = $_REQUEST['attachments'][ $attachment_id ]['custom_media_style'];
        update_post_meta( $attachment_id, 'custom_media_style', $custom_media_style );

    }
}
add_action( 'edit_attachment', 'custom_media_save_attachment' );