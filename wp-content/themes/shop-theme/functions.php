<?php

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );



add_action('wp_enqueue_scripts', 'enqueue_scripts');


function enqueue_scripts(): void
{
    wp_enqueue_style( 'style', get_stylesheet_uri(), null, array(), get_version() );
//    main styles
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/assets/css/style.css', array(), get_version() );
//main js
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/index.js', array(), get_version() );
}

function get_version(): string {
    return 'ver=' . time();
}


