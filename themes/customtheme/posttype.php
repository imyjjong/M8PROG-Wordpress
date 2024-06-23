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