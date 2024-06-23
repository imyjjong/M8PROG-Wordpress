<?php 
    $labels = [
        'name'               => __( 'Yuhs', 'Text_Domain' ),
        'singular_name'      => __( 'Yuh', 'Text_Domain' ),
        'add_new'            => __( 'New Yuh', 'Text_Domain' ),
        'add_new_item'       => __( 'Add New Yuh', 'Text_Domain' ),
        'edit_item'          => __( 'Edit Yuh', 'Text_Domain' ),
        'new_item'           => __( 'New Yuh', 'Text_Domain' ),
        'view_item'          => __( 'View Yuh', 'Text_Domain' ),
        'search_items'       => __( 'Search Yuh', 'Text_Domain' ),
        'not_found'          => __( 'No Yuh Found', 'Text_Domain' ),
        'not_found_in_trash' => __( 'No Yuh found in Trash', 'Text_Domain' ),
    ];

    $args = [
        'labels'       => $labels,
        'has_archive'  => true,
        'public'       => true,
        'hierarchical' => false,
        'supports'     => [
            'title',
            'editor',
            'excerpt',
            'custom-fields',
            'thumbnail',
            'page-attributes',
        ],
        'rewrite'      => [ 'slug' => 'yuh' ],
        'show_in_rest' => true,
    ];

    register_post_type( 'yuh', $args );

    $labels = [
        'name'              => _x( 'Origins', 'taxonomy general name', 'Text_Domain' ),
        'singular_name'     => _x( 'Origin', 'taxonomy singular name', 'Text_Domain' ),
        'search_items'      => __( 'Search Origins', 'Text_Domain' ),
        'popular_items'     => __( 'Popular Origins', 'Text_Domain' ),
        'all_items'         => __( 'All Origins', 'Text_Domain' ),
        'parent_item'       => __( 'Parent Origin', 'Text_Domain' ),
        'parent_item_colon' => __( 'Parent Origin:', 'Text_Domain' ),
        'edit_item'         => __( 'Edit Origin', 'Text_Domain' ),
        'update_item'       => __( 'Update Origin', 'Text_Domain' ),
        'add_new_item'      => __( 'Add New Origin', 'Text_Domain' ),
        'new_item_name'     => __( 'New Origin Name', 'Text_Domain' ),
        'menu_name'         => __( 'Origins', 'Text_Domain' ),
    ];

    $args = [
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true,
        'rewrite'           => [ 'slug' => 'origin' ],
    ];

    register_taxonomy( 'origin', 'yuh', $args );