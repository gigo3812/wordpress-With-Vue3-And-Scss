<?php
// hide admin bar
add_filter('show_admin_bar', '__return_false');

add_theme_support(
    'html5',
    array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
        'navigation-widgets',
    )
);

function addStyleAndScript()
{
    // load style
    wp_enqueue_style('main-styles', get_theme_file_uri('/assets/css/public.css'));
    wp_enqueue_style('news-styles', get_theme_file_uri('/assets/css/news.css'));
    wp_enqueue_style('slider-styles', get_theme_file_uri('/assets/css/slider.css'));
    wp_enqueue_style('post-styles', get_theme_file_uri('/assets/css/post.css'));

    // load script in footer (if true change to false to load in header)
    wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js', array(), '1.0.0', true);
}
add_action('init', 'addStyleAndScript');
