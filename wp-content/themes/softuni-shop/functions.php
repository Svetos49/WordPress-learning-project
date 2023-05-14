<?php

/**
 * This function takes care of handling the assets whith enqueue
 */
function softuni_assets() {
    wp_enqueue_style( 'softuni-shop', get_stylesheet_directory_uri(). '/assets/css/master.css', array(), filemtime(get_template_directory() . '/assets/css/master.css') );
}

add_action( 'wp_enqueue_scripts', 'softuni_assets' );