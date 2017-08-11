<?php

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

function spb_theme_styles() {
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'googlefont_css', 'http://fonts.googleapis.com/css?family=Lobster|Cormorant+Garamond|Oswald|Raleway|Lato' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'spb_theme_styles' );

function spb_theme_js() {
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'bootstrap_js'), '', true );
    wp_enqueue_script( 'font_awesome', 'https://use.fontawesome.com/9a38b0e6b3.js', true ); 
}
add_action( 'wp_enqueue_scripts', 'spb_theme_js' );

function register_theme_menus() {
    register_nav_menus( 
        array(
            'header-menu' => __( 'Header Menu' )
        )
    );
}
add_action( 'init', 'register_theme_menus');

// function add_part_to_non_top_level_menu_anchors( $atts, $item, $args ) {
//     $atts['data-part'] = 'pageThree';
//     return $atts;
// }
// add_filter( 'nav_menu_link_attributes', 'add_part_to_non_top_level_menu_anchors', 10, 4 );

// THIS WILL REQUIRE THE FEATURED IMAGE FOR 'SPB PORTFOLIO POST TYPES'
add_action('save_post', 'wpds_check_thumbnail');
add_action('admin_notices', 'wpds_thumbnail_error');
function wpds_check_thumbnail($post_id) {
    // change to any custom post type
    if(get_post_type($post_id) != 'spb_portfolio')
        return;
    if ( !has_post_thumbnail( $post_id ) ) {
        // set a transient to show the users an admin message
        set_transient( "has_post_thumbnail", "no" );
        // unhook this function so it doesn't loop infinitely
        remove_action('save_post', 'wpds_check_thumbnail');
        // update the post set it to draft
        wp_update_post(array('ID' => $post_id, 'post_status' => 'draft'));
        add_action('save_post', 'wpds_check_thumbnail');
    } else {
        delete_transient( "has_post_thumbnail" );
    }
}
function wpds_thumbnail_error()
{
    // check if the transient is set, and display the error message
    if ( get_transient( "has_post_thumbnail" ) == "no" ) {
        echo "<div id='message' class='error'><p><strong>You must select Featured Image. Your Post is saved but it can not be published.</strong></p></div>";
        delete_transient( "has_post_thumbnail" );
    }
}
//


?>