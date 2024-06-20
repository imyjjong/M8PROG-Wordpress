<?php

    function m8prog_enqueue_styles() {
        wp_enqueue_style(
            'm8prog-style',
            get_stylesheet_uri()
        );
    }
    add_action( 'wp_enqueue_scripts', 'm8prog_enqueue_styles' );

    add_theme_support( 'post-thumbnails' );

    function customtheme_setup() {
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'customtheme'),
        ));
    }
    add_action('after_setup_theme', 'customtheme_setup');
    
