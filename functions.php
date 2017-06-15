<?php
echo 'Hello World - functions.php';
echo get_template_directory() . '/includes/front/enqueue.php';
// Setup


// Includes
include( get_template_directory() . '/includes/front/enqueue.php');

// Hooks
add_action( 'wp_enqueue_scripts', 'ju_enqueue' );

// Shortcodes

?>