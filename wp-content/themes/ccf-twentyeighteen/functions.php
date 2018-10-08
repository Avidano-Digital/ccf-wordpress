<?php 

    namespace Cheetah\Twentyeighteen;
    
    ////////////////////////////////////////
    // Enqueue CSS and JS
    ////////////////////////////////////////

    require_once( __DIR__ . '/lib/enqueue-assets.php' );

    ////////////////////////////////////////
    // Custom Color Palette
    ////////////////////////////////////////

    require_once( __DIR__ . '/lib/color-palette.php' );

    ////////////////////////////////////////
    // Theme Support
    ////////////////////////////////////////

    require_once( __DIR__ . '/lib/theme-support.php' );

    ////////////////////////////////////////
    // ACF Theme Options
    ////////////////////////////////////////

    require_once( __DIR__ . '/lib/acf-theme-options.php' );

    ////////////////////////////////////////
    // ACF Custom WYSIWYG
    ////////////////////////////////////////

    require_once( __DIR__ . '/lib/acf-custom-wysiwyg.php' );

    ////////////////////////////////////////
    // ACF 5 Early Access
    ////////////////////////////////////////

    define('ACF_EARLY_ACCESS', '5');

    ////////////////////////////////////////
    // Gutenberg Body Class
    ////////////////////////////////////////

    // add_filter( 'body_class', __NAMESPACE__ . '\add_gutenberg_compatible_body_class' );
    
    function add_gutenberg_compatible_body_class( $classes ) {
        if( is_singular() )
            $classes[] = 'gutenberg-compatible-template';
        return $classes;
    }
?>