<?php

////////////////////////////////////////
// Inherit Parent Style
////////////////////////////////////////

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

////////////////////////////////////////
// Remove Custom Post Type from Parent
////////////////////////////////////////

add_action( 'after_setup_theme','remove_parent_about', 100 );

function remove_parent_about() {
    remove_action( 'init', 'register_custom_posts_init');
}

?>