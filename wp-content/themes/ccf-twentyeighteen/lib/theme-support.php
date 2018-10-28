<?php

    add_action( 'after_setup_theme', __NAMESPACE__ . '\theme_support' );
    
    function theme_support(){

        global $color_palette;

        ////////////////////////////////////////
        // Image Preferences
        ////////////////////////////////////////

        add_theme_support( 'post-thumbnails' );

        update_option( 'thumbnail_size_w', 300 );
        update_option( 'thumbnail_size_h', 200 );
        update_option( 'thumbnail_crop', 1 );

        update_option( 'medium_size_w', 600 );
        update_option( 'medium_size_h', 350 );
        update_option( 'medium_crop', 1 );

        update_option( 'large_size_w', 900 );
        update_option( 'large_size_h', 525 );
        update_option( 'large_crop', 1 );
        
        // Custom Sizes

        add_image_size( 'Feature Primary', 1500, 750, true );
        add_image_size( 'Feature Secondary', 1000, 500, true );
        add_image_size( 'Feature Tertiary', 500, 250, true );

        add_image_size( 'Hero', 1500, 500, true );
        add_image_size( 'Article Feature', 1500, 1000, true );

        // Custom JPG Compression

        function my_prefix_regenerate_thumbnail_quality() {
            return 85;
        }
         
        add_filter( 'jpeg_quality', 'my_prefix_regenerate_thumbnail_quality');

        ////////////////////////////////////////
        // Gutenberg support
        ////////////////////////////////////////

        add_theme_support( 'align-wide' );
        add_theme_support( 'align-full' );

        add_theme_support( 'wp-block-styles' );
        add_theme_support( 'editor-color-palette', $color_palette );

    } // theme_support

    ////////////////////////////////////////
    // Custom Post Types
    ////////////////////////////////////////

    add_action('init', __NAMESPACE__ . '\custom_post_types');

    function custom_post_types() {

        // Register About

        $about_labels = array(
            'name'               => 'About Us',
            'singular_name'      => 'About Us',
            'menu_name'          => 'About Us'
        );

        $about_args = array(
            'labels'             => $about_labels,
            'public'             => true,
            'capability_type'    => 'page',
            'has_archive'        => true,
            'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'page-attributes' ),
            'show_in_rest'       => true,
            'menu_position'      => 20,
            'hierarchical'       => true,
            'menu_icon'          => get_template_directory_uri() . '/images/wp-icon-about.png',
            'rewrite'            => array( 'slug' => 'about-us', 'with_front' => false ),
        );
        
        register_post_type('about', $about_args);
    }

    ////////////////////////////////////////
    // Custom Post Types
    ////////////////////////////////////////

    add_action( 'init', __NAMESPACE__ . '\customize_post_object' );

    function customize_post_object() {

        $get_post_type = get_post_type_object('post');
        
        $labels = $get_post_type->labels;
            $labels->name = 'News';
            $labels->singular_name = 'News';
            $labels->add_new = 'Add News';
            $labels->add_new_item = 'Add News';
            $labels->edit_item = 'Edit Post';
            $labels->new_item = 'News';
            $labels->view_item = 'View Post';
            $labels->search_items = 'Search News';
            $labels->not_found = 'No News found';
            $labels->not_found_in_trash = 'No News found in Trash';
            $labels->all_items = 'All News';
            $labels->menu_name = 'News';
            $labels->name_admin_bar = 'News';
            $labels->menu_position = '10';
    }

    ////////////////////////////////////////
    // Remove Menu Items
    ////////////////////////////////////////
    
    add_action( 'admin_menu', __NAMESPACE__ . '\remove_menus' );

    function remove_menus(){
        remove_menu_page( 'edit-comments.php' );
    }

    ////////////////////////////////////////
    // Custom Logo
    ////////////////////////////////////////

    add_action( 'after_setup_theme', __NAMESPACE__ . '\theme_prefix_setup' );

    function theme_prefix_setup() {
        add_theme_support( 'custom-logo' );
    }

    add_action( 'login_head', __NAMESPACE__ . '\wpdev_filter_login_head', 100 );
    
    function wpdev_filter_login_head() {
 
        if ( has_custom_logo() ) :
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            $height = '100px';
            $width = '185px';
        ?>

        <style type="text/css">
            .login h1 a {
                background-image: url( <?php echo esc_url( $image[0] ); ?> );
                -webkit-background-size: <?php echo $image[0] ?>px;
                background-size: contain;
                height: <?php echo $height ?>;
                width: <?php echo $width ?>;
            }
        </style>
        
        <?php endif;
    }