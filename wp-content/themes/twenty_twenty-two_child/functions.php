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
    wp_enqueue_script('task-jquery', "https://code.jquery.com/jquery-3.6.0.min.js", array(), "3.6.0", true);
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

/*function loader(){
    $post_id = $_POST['post_id'];
    $custom = get_post_custom($post_id);
    foreach($custom as $key => $value) {
        if($key[0] != "_")
        echo $key.': '.$value[0].'<br />';
    }
    die();
}
*/

function loader(){
    $post_id = $_POST['post_id'];
    while ( have_rows('employeelist', $post_id) ) : the_row();
        $name = get_sub_field('firstname');
        $image = get_sub_field('photo') ?: get_bloginfo('stylesheet_directory') . "/img/avatar-alt.png";
        echo '<div class="employee">';
            echo "<img src='" . $image . "' alt='photo'";
            echo "<p>" . $name . "</p>";
        echo "</div>";
    endwhile;
    die();
}

add_action("wp_ajax_loader", "loader");
add_action("wp_ajax_nopriv_loader", "loader");