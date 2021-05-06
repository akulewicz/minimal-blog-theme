<?php

function minimal_files() {
    
    wp_enqueue_style('normalize-css', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;500&family=Lato:wght@300;400;700&family=Roboto+Slab:wght@300;400;500;700&display=swap');
    wp_enqueue_style('font-awsome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
    wp_enqueue_style('minimal_main_styles', get_stylesheet_uri());
    wp_enqueue_script('main-js', get_theme_file_uri('/js/script.js'), NULL, '1.0', true);
}

add_action('wp_enqueue_scripts', 'minimal_files');

function minimal_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'minimal_features');