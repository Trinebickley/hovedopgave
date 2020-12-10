<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style'; // This is 'neve-style' for the neve theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' ); // Henviser til mappen med modertemaet
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css', // Henviser her til child-theme'ets style css
        array( $parent_style ), // gør at modertemaet loader først, og herefter child-theme
        wp_get_theme()->get('Version')
    );
    
    
    
}
