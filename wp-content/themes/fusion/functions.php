<?php

// Disable Gutenberg
add_filter('use_block_editor_for_post', '__return_false', 10);

// Theme support for title, thumbnail
function fusion_theme_setup() {

    // Adds <title> tag support
    add_theme_support( 'title-tag' );  

}
add_action( 'after_setup_theme', 'fusion_theme_setup');
