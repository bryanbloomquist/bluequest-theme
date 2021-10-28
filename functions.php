<?php

// SETUP
define( 'BQ_DEV_MODE', true );

// INCLUDES
include( get_theme_file_path( '/includes/front/enqueue.php' ) );

// HOOKS
add_action( 'wp_enqueue_scripts', 'bq_enqueue' );
add_action( 'customize_register', 'bq_customize_register' );

// SHORTCODES