<?php
/*
Plugin Name: Custom Event Manager
Description: A simple plugin to manage and display events using a custom post type and shortcode.
Version: 1.0
Author: Prithi Babu
*/

// Register Custom Post Type
include_once plugin_dir_path(__FILE__) . 'includes/register-post-type.php';

// Shortcode to display events
include_once plugin_dir_path(__FILE__) . 'includes/shortcode-display.php';

// Enqueue Styles
function cem_enqueue_styles() {
    wp_enqueue_style('cem-style', plugin_dir_url(__FILE__) . 'assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'cem_enqueue_styles');
?>
