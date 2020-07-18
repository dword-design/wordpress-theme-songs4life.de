<?php

function register_connection_types() {
    p2p_register_connection_type(array(
        'name' => 'veranstaltung_to_kuenstler',
        'from' => 'veranstaltung',
        'to' => 'kuenstler'
    ));
}
add_action('p2p_init', 'register_connection_types');

function display_posts_unlink_title( $output, $original_atts, $image, $title, $date, $excerpt, $inner_wrapper, $content, $class ) {

    // Create a new title
    $title = '<h2>' . get_the_title() . '</h2>';

    // Now let's rebuild the output
    $output = '<' . $inner_wrapper . ' class="' . implode( ' ', $class ) . '">' . $image . $title . $date . $author . $excerpt . $content . '</' . $inner_wrapper . '>';

    // Finally we'll return the modified output
    return $output;
}
add_filter('display_posts_shortcode_output', 'display_posts_unlink_title', 10, 9);

function enqueue_scripts() {
    wp_enqueue_script('index.js', get_stylesheet_directory_uri() . '/dist/index.js', true);
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');
