<?php
function cem_display_events() {
    $args = array(
        'post_type' => 'event',
        'posts_per_page' => 5,
        'order' => 'ASC',
        'orderby' => 'date'
    );
    $events = new WP_Query($args);
    $output = '<div class="cem-events">';
    if ($events->have_posts()) {
        while ($events->have_posts()) {
            $events->the_post();
            $output .= '<div class="cem-event">';
            $output .= '<h3>' . get_the_title() . '</h3>';
            $output .= '<div>' . get_the_content() . '</div>';
            $output .= '</div>';
        }
        wp_reset_postdata();
    } else {
        $output .= '<p>No upcoming events found.</p>';
    }
    $output .= '</div>';
    return $output;
}
add_shortcode('event_manager', 'cem_display_events');
?>
