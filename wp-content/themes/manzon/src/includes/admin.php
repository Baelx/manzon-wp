<?php

function manzon_add_admin_page() {
    // Remove comments link
    remove_menu_page( 'edit-comments.php' );

    add_menu_page('Manzon Theme Options',
                  'Manzon Options',
                  'manage_options',
                  'manzon_theme',
                  'manzon_theme_content_callback',
                  'dashicons-building'
                );

    add_action('admin_init', 'manzon_add_admin_settings');
}

function manzon_add_admin_settings() {
    register_setting('manzon-settings-group', 'phone_number');
    register_setting('manzon-settings-group', 'email_address');
    register_setting('manzon-settings-group', 'facebook_link');
    register_setting('manzon-settings-group', 'instagram_link');
    register_setting('manzon-settings-group', 'google_link');
    
    add_settings_section('manzon-contact-options', 'Contact Information', 'manzon_contact_options_callback', 'manzon_theme');
    add_settings_section('manzon-social-options', 'Social Media Links', 'manzon_social_media_callback', 'manzon_theme');
    
    add_settings_field('phone_number', 'Phone number', 'manzon_phone_number_callback', 'manzon_theme', 'manzon-contact-options');
    add_settings_field('email_address', 'Email address', 'manzon_email_address_callback', 'manzon_theme', 'manzon-contact-options');
    add_settings_field('facebook_link', 'Facebook link', 'manzon_facebook_link_callback', 'manzon_theme', 'manzon-social-options');
    add_settings_field('instagram_link', 'Instagram link', 'manzon_instagram_link_callback', 'manzon_theme', 'manzon-social-options');
    add_settings_field('google_link', 'Google business link', 'manzon_google_link_callback', 'manzon_theme', 'manzon-social-options');
}

function manzon_contact_options_callback() {
    echo 'Update your contact info. These fields will be updated on the site automatically.';
}

function manzon_social_media_callback() {
    echo 'Update your social media links. The social icons in the site footer use these links. If you leave one empty, the icon won\'t appear.';
}

function manzon_theme_content_callback() {
    require_once(get_template_directory() . '/src/templates/manzon-admin.php');
}

function manzon_phone_number_callback() {
    $phoneNumber = esc_attr(get_option('phone_number'));
    echo '<input type="text" name="phone_number" value="'.$phoneNumber.'" />';
}

function manzon_email_address_callback() {
    $emailAddress = esc_attr(get_option('email_address'));
    echo '<input type="text" name="email_address" value="'.$emailAddress.'" />';
}

function manzon_facebook_link_callback() {
    $facebookLink = esc_attr(get_option('facebook_link'));
    echo '<input type="text" name="facebook_link" value="'.$facebookLink.'" />';
}

function manzon_instagram_link_callback() {
    $instagramLink = esc_attr(get_option('instagram_link'));
    echo '<input type="text" name="instagram_link" value="'.$instagramLink.'" />';
}

function manzon_google_link_callback() {
    $googleLink = esc_attr(get_option('google_link'));
    echo '<input type="text" name="google_link" value="'.$googleLink.'" />';
}

add_theme_support( 'post-thumbnails' );

add_action('admin_menu', 'manzon_add_admin_page');


add_action( 'admin_menu', 'linked_url' );

add_action( 'admin_menu' , 'linkedurl_function' );

function linked_url() {
    add_menu_page( 'linked_url', 'External link', 'read', 'my_slug', '', 'dashicons-text', 1 );
}
function linkedurl_function() {
    global $menu;
    $menu[1][2] = "http://www.example.com";
}
