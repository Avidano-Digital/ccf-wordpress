<?php

    add_filter( 'acf/fields/wysiwyg/toolbars' , 'my_toolbars'  );

    function my_toolbars( $toolbars ){

        // Add a new toolbar called "Very Simple"
        $toolbars['Very Simple' ] = array();
        $toolbars['Very Simple' ][1] = array( 'bold' , 'italic' , 'underline', 'link' );

        // Edit the "Full" toolbar and remove 'code'
        // - delet from array code from http://stackoverflow.com/questions/7225070/php-array-delete-by-value-not-key
        if( ($key = array_search('code' , $toolbars['Full' ][2])) !== false ){
            unset( $toolbars['Full' ][2][$key] );
        }

        // remove the 'Basic' toolbar completely
        unset( $toolbars['Basic' ] );

        // return $toolbars - IMPORTANT!
        return $toolbars;
    }

    
    ////////////////////////////////////////
    // Remove default format select
    ////////////////////////////////////////

    add_filter( 'mce_buttons', 'remove_default_format_select' );

    function remove_default_format_select( $buttons ) {
        $remove = array( 'formatselect' );
        return array_diff( $buttons, $remove );
    }

    ////////////////////////////////////////
    // Add 'styleselect' to buttons array
    ////////////////////////////////////////

    add_filter( 'mce_buttons', 'my_new_mce_buttons' );

    function my_new_mce_buttons( $buttons ) {
        array_unshift( $buttons, 'styleselect' );
        return $buttons;
    }

    ////////////////////////////////////////
    // Add Formats to 'styleselect'
    ////////////////////////////////////////

    add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

    function my_mce_before_init_insert_formats( $init_array ) {
        
        // Define the style_formats array and insert into 'style_formats'
        $style_formats = array(

            array(
                'title' => 'Headline (h2)',
                'block' => 'h2',
                'classes' => 'h1',
                'exact' => false,
            ),
            array(
                'title' => 'Headline (h3)',
                'block' => 'h3',
            ),
            array(
                'title' => 'Headline (h4)',
                'block' => 'h4',
            ),
            array(
                'title' => 'Headline (h5)',
                'block' => 'h5',
            ),
            array(
                'title' => 'Paragraph',
                'block' => 'p',
            )
        );

        $init_array['style_formats'] = json_encode( $style_formats );  
        return $init_array;  
    }