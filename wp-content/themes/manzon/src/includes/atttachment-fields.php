<?php
 
// Add custom checkbox attachment field
function add_custom_checkbox_field_to_attachment_fields_to_edit_residential( $form_fields, $post ) {
    $checkbox_field = (bool) get_post_meta($post->ID, 'residential_gallery', true);
    $form_fields['residential_gallery'] = array(
        'label' => 'Residential Gallery',
        'input' => 'html',
        'html' => '<input type="checkbox" id="attachments-'.$post->ID.'-checkbox_field" name="attachments['.$post->ID.'][residential_gallery]" value="1"'.($checkbox_field ? ' checked="checked"' : '').' /> ',
        'value' => $checkbox_field,
        'helps' => '',
        'required' => false
    );
    return $form_fields;
}
add_filter('attachment_fields_to_edit', 'add_custom_checkbox_field_to_attachment_fields_to_edit_residential', null, 2); 
 
// Save custom checkbox attachment field
function save_custom_checkbox_attachment_field_residential($post, $attachment) {  
    if( isset($attachment['residential_gallery']) ){  
        update_post_meta($post['ID'], 'residential_gallery', sanitize_text_field( $attachment['residential_gallery'] ) );  
    }else{
         delete_post_meta($post['ID'], 'residential_gallery' );
    }
    return $post;  
}
add_filter('attachment_fields_to_save', 'save_custom_checkbox_attachment_field_residential', null, 2);

 
// Add custom checkbox attachment field
function add_custom_checkbox_field_to_attachment_fields_to_edit_commercial( $form_fields, $post ) {
    $checkbox_field = (bool) get_post_meta($post->ID, 'commercial_gallery', true);
    $form_fields['commercial_gallery'] = array(
        'label' => 'Commercial Gallery',
        'input' => 'html',
        'html' => '<input type="checkbox" id="attachments-'.$post->ID.'-commercial_gallery" name="attachments['.$post->ID.'][commercial_gallery]" value="1"'.($checkbox_field ? ' checked="checked"' : '').' /> ',
        'value' => $checkbox_field,
        'helps' => '',
        'required' => false
    );
    return $form_fields;
}
add_filter('attachment_fields_to_edit', 'add_custom_checkbox_field_to_attachment_fields_to_edit_commercial', null, 2); 
 
// Save custom checkbox attachment field
function save_custom_checkbox_attachment_field_commercial($post, $attachment) {  
    if( isset($attachment['commercial_gallery']) ){  
        update_post_meta($post['ID'], 'commercial_gallery', sanitize_text_field( $attachment['commercial_gallery'] ) );  
    }else{
         delete_post_meta($post['ID'], 'commercial_gallery' );
    }
    return $post;  
}
add_filter('attachment_fields_to_save', 'save_custom_checkbox_attachment_field_commercial', null, 2);