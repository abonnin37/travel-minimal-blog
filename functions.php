<?php

require_once ("rest-api/get-taxonomies-by-name.php");

function travel_minimal_blog_init () {
}

function travel_minimal_blog_supports () {
    add_theme_support('title-tag');
    add_theme_support('html5');
    add_theme_support('post-thumbnails');
}

function travel_minimal_blog_register_assets()
{
    wp_register_style('travel_minimal_blog_style', get_template_directory_uri() . "/assets/style.css");
    wp_register_style('fontawesome', "https://use.fontawesome.com/releases/v6.1.1/css/all.css");
    wp_register_style('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css");
    wp_register_script('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js", [], false, true);

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('fontawesome');
    wp_enqueue_style('travel_minimal_blog_style');
    wp_enqueue_script('bootstrap');
}

add_action('init', 'travel_minimal_blog_init');
add_action('after_setup_theme', 'travel_minimal_blog_supports');
add_action('wp_enqueue_scripts', 'travel_minimal_blog_register_assets');