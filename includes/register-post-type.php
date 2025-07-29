<?php
function cem_register_event_post_type() {
    register_post_type('event', array(
        'labels' => array(
            'name' => __('Events'),
            'singular_name' => __('Event')
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'custom-fields'),
        'menu_icon' => 'dashicons-calendar',
    ));
}
add_action('init', 'cem_register_event_post_type');
?>
