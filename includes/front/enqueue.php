<?php

function bq_enqueue() {

    $uri = get_theme_file_uri();
    $version = BQ_DEV_MODE ? time() : '1.0.0';
    $bootstrap_css = BQ_DEV_MODE ? '/assets/css/bootstrap.css' : '/assets/css/bootstrap.min.css';
    $bootstrap_js = BQ_DEV_MODE ? '/assets/js/bootstrap.js' : '/assets/js/bootstrap.min.js';
    $fontawesome = BQ_DEV_MODE ? '/assets/css/all.css' : '/assets/css/all.min.css';

    wp_register_style( 'bq_bootstrap_css', $uri . $bootstrap_css, [], $version );
    wp_register_style( 'bq_custom', $uri . '/assets/css/custom.css', [], $version );

    wp_enqueue_style( 'bq_bootstrap_css' );
    wp_enqueue_style( 'bq_custom' );

    wp_register_script( 'bq_bootstrap_js', $uri . $bootstrap_js, [], false, true );
    wp_register_script( 'bq_custom', $uri . '/assets/js/custom.js', [], false, true );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bq_bootstrap_js' );
    wp_enqueue_script( 'bq_custom' );

};