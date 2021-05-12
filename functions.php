<?php

function minimal_files() {
    
    wp_enqueue_style('normalize-css', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;500&family=Lato:wght@300;400;700&family=Roboto+Slab:wght@300;400;500;700&display=swap');
    wp_enqueue_style('font-awsome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
    wp_enqueue_style('minimal_main_styles', get_stylesheet_uri());
    wp_enqueue_script('hamburger-menu', get_theme_file_uri('/js/mobile.js'), NULL, '1.0', true);
    wp_enqueue_script('search-box', get_theme_file_uri('/js/search.js'), NULL, '1.0', true);
}

add_action('wp_enqueue_scripts', 'minimal_files');

function minimal_features() {
    register_nav_menu('header-menu', 'Header Menu');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'minimal_features');

function minimal_header_menu_li_class( $classes, $item, $args ) {
    if( $args->theme_location == 'header-menu') {
        $classes[] = 'top-navigation__item';
    }
    return $classes;

}

add_filter('nav_menu_css_class', 'minimal_header_menu_li_class', 1, 3);

function minimal_header_menu_a_class( $atts, $item, $args ) {
    if( $args->theme_location == 'header-menu' ) {
      $atts['class'] = 'top-navigation__link';
    }
    return $atts;
}

add_filter( 'nav_menu_link_attributes', 'minimal_header_menu_a_class', 1, 3 );

