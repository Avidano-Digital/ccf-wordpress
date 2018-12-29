<?php

    add_action( 'after_setup_theme', __NAMESPACE__ . '\theme_support' );
    
    function theme_support(){

        global $color_palette;

        ////////////////////////////////////////
        // Image Preferences
        ////////////////////////////////////////

        add_theme_support( 'post-thumbnails' );

        update_option( 'thumbnail_size_w', 320 );
        update_option( 'thumbnail_size_h', 320 );
        update_option( 'thumbnail_crop', false );

        update_option( 'medium_size_w', 0 );
        update_option( 'medium_size_h', 0 );

        update_option( 'medium_large_size_w', 0 );
        update_option( 'medium_large_size_h', 0 );

        update_option( 'large_size_w', 0 );
        update_option( 'large_size_h', 0 );
        
        // Custom Image Sizes

        // add_image_size( 'Feature Primary', 1500, 750, true );
        // add_image_size( 'Feature Secondary', 1000, 500, true );
        // add_image_size( 'Feature Tertiary', 500, 250, true );

        // add_image_size( 'Hero', 1500, 500, true );
        // add_image_size( 'Article Feature', 1500, 1000, true );

        // Custom JPG Compression

        function my_prefix_regenerate_thumbnail_quality() {
            return 85;
        }
         
        add_filter( 'jpeg_quality', 'my_prefix_regenerate_thumbnail_quality');

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
    // Remove Dashboard Menu Items
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



      




/*
 * Always return an image with a <figure> tag, regardless of link or caption
*/



function html5_insert_image($html, $id, $caption, $title, $align, $url, $size, $alt ) {

    //Grab the image tag
    // $image_tag = get_image_tag($id, '', $title, $size, false); NOTE: Old code since we don't want image sizes
    // $image_url = wp_get_attachment_image_src( $id, false );
    // $image_meta = wp_get_attachment_metadata($id);
    $image = wp_get_attachment($id);
  
  
    //Let's see if this contains a link
    $linkptrn = "/<a[^>]*>/";
    $found = preg_match($linkptrn, $html, $a_elem);
  
     // If no link, do nothing
    if($found > 0) {
      $a_elem = $a_elem[0];
  
      if(strstr($a_elem, "class=\"") !== false){ // If link already has class defined inject it to attribute
          $a_elem = str_replace("class=\"", "class=\"fancybox ", $a_elem);
  
      }
    } else {
      $a_elem = "";
    }
    // Set up the attributes for the caption <figure>
    // NOTE: Commented out since we don't want the attachement id because of old code styling confilicts
    // $attributes  = (!empty($id) ? ' id="attachment_' . esc_attr($id) . '"' : '' );
  
    $output  = '<figure>';
  
    //add the image back in
    $output .= $a_elem;
  
    if($a_elem != "") {
      $output .= '<span class="fa fa-search-plus"></span>';
    }
  
    $output .= '<img src="' . $image['src'] . '" alt="' . $image['alt'] . '">';
  
    if($a_elem != "") {
      $output .= '</a>';
    }
    
    if ($caption) {
      $output .= '<figcaption>'.$caption.'</figcaption>';
    }
    $output .= '</figure>';
  
    return $output;
  
    // $src  = wp_get_attachment_image_src( $id, $size, false );
    // $html5 = "<figure class='fig-$align'><div class='fig-inner'>";
    // $html5 .= "<img src='$src[0]' alt='$title' />&nbsp;";
    // if ($caption) {
    //   $html5 .= "<p class='fig-caption'>$caption</p>";
    // }
    // $html5 .= "</div></figure>";
    // return $html5;
  }
  
//   add_filter('image_send_to_editor', 'html5_insert_image', 10, 9);