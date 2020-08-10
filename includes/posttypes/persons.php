<?php


function ab_employees() {


// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => 'medarbejder',
        'singular_name'       =>  'medarbejder',
        'menu_name'           => 'medarbejder',
        'parent_item_colon'   => 'Forældremedarbejder',
        'all_items'           => 'Alle medarbejder',
        'view_item'           => 'Se medarbejder',
        'add_new_item'        => 'Tilføj ny medarbejder',
        'add_new'             => 'Tilføj ny medarbejder',
        'edit_item'           => 'Edit Product',
        'update_item'         => 'Update Product',
        'search_items'        => 'Search Product',
        'not_found'           => 'Not Found',
        'not_found_in_trash'  => 'Not found in Trash',
    );

    $args = array(
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array(),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 4,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'menu_icon'  =>  'dashicons-buddicons-buddypress-logo',
    );

    register_post_type( 'employees', $args );

}

add_action( 'init', 'ab_employees', 0 );