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
    
    function register_my_menus() {
        register_nav_menus(
            [
                'header' => __( 'Header Menu', 'Text_Domain' ),
                'other'  => __( 'Other Menu', 'Text_Domain' ),
            ]
        );
    }
    
    add_action( 'init', 'register_my_menus' );

    function add_theme_widgets() {
        register_sidebar( 
            [
                'name'          => __( 'Footer Widget Area', 'Text_Domain' ),
                'id'            => 'ref-id',
                'description'   => __( 'A widget area located in the footer.', 'Text_Domain' ),
                'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            ] 
        );
    }
    
    add_action( 'widgets_init', 'add_theme_widgets' );
