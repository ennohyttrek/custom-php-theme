<?php

function custom_stylesheets() {
    wp_enqueue_style( 'style', get_stylesheet_uri()); 
}
add_action( 'wp_enqueue_scripts', 'custom_stylesheets' );




function register_my_menus() {
  register_nav_menus(
    array(
        'main-menu' => __( 'Hauptmenü' ),
        'mobile-menu' => __( 'Mobilmenü' ),
        'secondary-menu' => __( 'Nebenmenü' )
        )
   );
 }
 add_action( 'init', 'register_my_menus' );