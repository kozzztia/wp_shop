<?php
add_theme_support('title-tag',);
add_theme_support('post-thumbnails', ['post', 'page']);

//слбытие начала 1 подключения скриптов 2 какую функцию запустить
add_action('wp_enqueue_scripts', 'include_shop_scripts');

function include_shop_scripts(): void
{
    // main style file for wp
    wp_enqueue_style('style', get_stylesheet_uri(), [], get_version());

    // my styles for projects
    wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/style.css', [], get_version());

    // Bootstrap
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css',
        [],
        '5.3.2'
    );

    // disable jQuery
    wp_deregister_script('jquery');

    // enable jQuery
    wp_register_script(
        'jquery',
        'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js',
        [],
        '3.7.1',
        true
    );
    wp_enqueue_script('jquery');

    // Bootstrap JS bundle Popper
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js',
        ['jquery'],
        '5.3.2',
        true
    );

    // my js
    wp_enqueue_script(
        'index-js',
        get_template_directory_uri() . '/assets/js/index.js',
        ['jquery', 'bootstrap-js'],
        get_version(),
        true
    );
//    question - how can i import this file
    wp_enqueue_script(
        'custom-js',
        get_template_directory_uri() . '/assets/js/custom.js',
        ['jquery', 'bootstrap-js'],
        get_version(),
        true
    );
}
function get_version(): string{
    return time() . 'shop';
}

if(!function_exists("shop_setup")){
    function shop_setup(){
        add_theme_support('custom-logo',[
                'height'      => 50,
                'width'       => 150,
                'flex-height' => false,
                'flex-width'  => false,
                'header-text' => 'logo',
//               change as false to be a link to home
                'unlink-homepage-logo' => false,
            ]
        );
    }
//    событие вордпреса превый аршумент
    add_action('after_setup_theme', 'shop_setup');
}
