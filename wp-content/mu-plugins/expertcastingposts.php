<?php 

function init_new_post_types() {
 
    register_post_type('service', array(
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'hierarchical' => true,
        'capability_type' => 'page',
        'labels' => array(
            'name' => 'Services',
            'add_new_item' => 'Add New Service',
            'edit_item' => 'Edit Service',
            'all_items' => 'All Services',
            'singular_name' => 'Service'
            
        ),
        'menu_icon' => 'dashicons-hammer',
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt')
    ));

    register_post_type('operation', array(
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'hierarchical' => true,
        'capability_type' => 'page',
        'labels' => array(
            'name' => 'Operation',
            'add_new_item' => 'Add New Operation',
            'edit_item' => 'Edit Operation',
            'all_items' => 'All Operations',
            'singular_name' => 'Operation'
            
        ),
        'menu_icon' => 'dashicons-clock',
        'supports' => array('title', 'editor', 'excerpt')
    ));

    register_post_type('price', array(
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Price',
            'add_new_item' => 'Add New Price',
            'edit_item' => 'Edit Price',
            'all_items' => 'All Prices',
            'singular_name' => 'Price'
        ),
        'menu_icon' => 'dashicons-tag',
        'supports' => array('title', 'editor', 'excerpt')
    ));


    register_post_type('feature', array(
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Feature',
            'add_new_item' => 'Add New Feature',
            'edit_item' => 'Edit Feature',
            'all_items' => 'All Features',
            'singular_name' => 'Feature'
        ),
        'menu_icon' => 'dashicons-vault',
        'supports' => array('title', 'editor', 'excerpt')
    ));


    register_post_type('promotion', array(
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Promotion',
            'add_new_item' => 'Add New Promotion',
            'edit_item' => 'Edit Promotion',
            'all_items' => 'All Promotions',
            'singular_name' => 'Promotion'
        ),
        'menu_icon' => 'dashicons-flag',
        'supports' => array('title', 'editor', 'excerpt')
    ));





}

add_action('init', 'init_new_post_types');

?>



