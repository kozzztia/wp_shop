<?php
//add_theme_support('title-tag',);


//if(!function_exists("shop_setup")){
function shop_setup(): void
{
    add_theme_support('custom-logo', [
            'height' => 50,
            'width' => 150,
            'flex-height' => false,
            'flex-width' => false,
            'header-text' => 'logo',
//               change as false to be a link to home
            'unlink-homepage-logo' => false,
        ]
    );
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', ['post', 'page']);
}

//    событие вордпреса превый аршумент
add_action('after_setup_theme', 'shop_setup');
//}

//including scripts
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

add_action('wp_enqueue_scripts', 'include_shop_scripts');

//register of location for menus
function register_shop_menus(): void
{
    $locations = array(
        'header' => __('Header Navigation', 'shop'),
        'social' => __('Social Navigation', 'shop'),
        'footer' => __('Footer Navigation', 'shop'),
    );
    register_nav_menus($locations);
}

add_action('init', 'register_shop_menus');

add_filter('nav_menu_css_class', 'shop_menu_css_class', 10, 4);

function shop_menu_css_class($classes, $item, $args, $depth)
{
    switch ($args->theme_location) {
        case 'header':
            $classes[] = 'headerItem';
            break;
        case 'social':
            $classes[] = 'socialItem';
            break;
        case 'footer':
            $classes[] = 'footerItem';
            break;
        default:
            $classes[] = 'item';
            break;
    }

    if (in_array('current_page_item', $classes)) {
        $classes[] = 'active';
    }
    return $classes;
}

class Shop_Social_Icons_Only extends Walker_Nav_Menu {
    public function start_el(&$output, $item, $depth = 0, $args = [], $id = 0): void {
        if ($args->theme_location !== 'social') return;

        $title = strtolower(trim($item->title));
        $iconId = 'icon-' . $title;
        $sprite = get_template_directory_uri() . '/assets/svg/sprite.svg';

        $output .= '<li><a href="' . esc_url($item->url) . '" title="' . esc_attr($item->title) . '">';
        $output .= '<svg class="icon"><use href="' . $sprite . '#' . $iconId . '"></use></svg>';
        $output .= '</a></li>';
    }
}


// version generator
function get_version(): string
{
    return time() . 'shop';
}

