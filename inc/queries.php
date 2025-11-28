<?php

function get_posts_query($args = []): WP_Query
{
    $defaults = [
        'post_type' => 'post',
//        'category_name' => 'imgs', // ← фильтр по категории (slug)
        'posts_per_page' => -1,
    ];
    $query_args = wp_parse_args($args, $defaults);
    return new WP_Query($query_args);
}