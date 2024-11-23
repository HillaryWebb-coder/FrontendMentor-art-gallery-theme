<?php 

add_action('wp_enqueue_scripts', 'fmag_enqueue_styles');

function fmag_enqueue_styles() {
    wp_enqueue_style('fmag_style_css', get_stylesheet_uri());
    wp_enqueue_style('fmag_main_css', get_parent_theme_file_uri() . '/assets/css/main.css');
}


add_action( 'widgets_init', 'fmag_widgets_init' );
function fmag_widgets_init() {
    register_sidebar(array(
        'name' => __('Footer Sidebar', 'frontendmentor-art-gallery'),
        'id'  => 'sidebar-footer'
    ));
}