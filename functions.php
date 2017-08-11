<?php

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

?>