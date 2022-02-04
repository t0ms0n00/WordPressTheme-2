<?php

function task_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('task-custom', get_stylesheet_directory_uri() . "/style.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'task_register_styles');

function task_register_scripts(){
    //wp_enqueue_script('cardiomed-jquery', "https://code.jquery.com/jquery-3.6.0.min.js", array(), "3.6.0", true);
}

add_action('wp_enqueue_scripts', 'task_register_scripts');

add_filter('show_admin_bar', '__return_false');