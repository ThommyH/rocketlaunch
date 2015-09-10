<?php

// enqueue the child theme stylesheet

Function wp_schools_enqueue_scripts() {
wp_register_style( 'childstyle', get_stylesheet_directory_uri() . '/style.css'  );
    wp_register_style( 'childstyledynamic', get_stylesheet_directory_uri() . '/css/style_dynamic.css'  );
    wp_register_style( 'childstylesheetmin', get_stylesheet_directory_uri() . '/css/stylesheet.min.css'  );
wp_enqueue_style( 'childstyle' );
    wp_enqueue_style( 'childstyledynamic' );
    wp_enqueue_style( 'childstylesheetmin' );
}
add_action( 'wp_enqueue_scripts', 'wp_schools_enqueue_scripts', 11);

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
