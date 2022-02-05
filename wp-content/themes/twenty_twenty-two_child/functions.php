<?php

add_filter('show_admin_bar', '__return_false');

add_filter('acf/settings/save_json', 'my_acf_json_save_point');

add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function task_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('task-custom', get_stylesheet_directory_uri() . "/style.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'task_register_styles');

function task_register_scripts(){
    wp_enqueue_script('task-loader', get_stylesheet_directory_uri() . "/js/loader.js", array(), "1.0", true);
}

add_action('wp_enqueue_scripts', 'task_register_scripts');

function my_acf_json_save_point( $path ) {
    $path = get_stylesheet_directory() . '/acf-json';
    return $path;
}

function my_acf_json_load_point( $paths ) {
    unset($paths[0]);
    $paths[] = get_stylesheet_directory() . '/acf-json';
    return $paths;    
}