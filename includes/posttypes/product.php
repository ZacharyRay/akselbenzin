<?php


function ab_products() {


// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => 'Product',
        'singular_name'       => 'Product' ,
        'menu_name'           => 'Products',
        'parent_item_colon'   => 'Parent Product',
        'all_items'           => 'All Products',
        'view_item'           => 'View Product',
        'add_new_item'        => 'Add New Product',
        'add_new'             => 'Add New',
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
        'menu_position'       => 3,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'menu_icon'   => 'dashicons-cart',
    );

    register_post_type( 'products', $args );

}

add_action( 'init', 'ab_products', 0 );