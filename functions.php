<?php

function scribe_child_enqueue_parent_theme_style() {
    wp_enqueue_style( 'scribe-parent-foundation-style', get_template_directory_uri().'/vendor/foundation/foundation.css' );
    wp_enqueue_style( 'scribe-parent-style', get_template_directory_uri().'/style.css' );
    wp_dequeue_style( 'scribe-style' );
    wp_enqueue_style( 'scribe-child-style', get_stylesheet_directory_uri().'/style.css' );
}
add_action( 'wp_enqueue_scripts', 'scribe_child_enqueue_parent_theme_style', 99 );
