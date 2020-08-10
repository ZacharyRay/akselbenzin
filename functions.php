<?php

/**
 * Enqueue CSS and JS files
 */
function abtion_enqueueFiles() {
	// CSS
	wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/build/main.css');
	wp_enqueue_style('modal', get_template_directory_uri() . '/assets/css/build/jquery.modal.min.css');
    wp_enqueue_style('flickity', get_template_directory_uri() . '/assets/css/build/flickity.min.css');
	// JS
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
	wp_enqueue_script('flickity', get_template_directory_uri() . '/assets/js/flickity.js');
    wp_enqueue_script('modal', get_template_directory_uri() . '/assets/js/jquery.modal.min.js');
	wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/build/app.js');
}
add_action('wp_enqueue_scripts', 'abtion_enqueueFiles');

/**
 * Register nav-menus
 */
register_nav_menus(array(
    'main' => 'Desktop Main Menu',
    'main-top' => 'Desktop Top Bar',
    'main-mobile' => 'Mobile Main Menu',
    'footer-knuseanlaeg' => 'Knuseanlaeg',
    'footer-neddelingsanlaeg' => 'Neddelingsanlaeg',
    'footer-sorteringsanlaeg' => 'Sorteringsanlaeg',
    'footer-privacy' => 'Privatpolitik',
));

class subpage_Walker extends Walker_Page {

    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);

        if ($depth == 0) {
            $output .= "\n$indent<div class='pages'><ul>\n";
        } else {
            $output .= "\n$indent<ul class='sub-menu'>\n";
        }
    }

    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);

        if ($depth == 0) {
            $output .= "$indent</ul></div>\n";
        } else {
            $output .= "$indent</ul>\n";
        }
    }
}

// post types:

$post_types = glob(__DIR__ . '/includes/posttypes/*.php');
foreach ($post_types as $post_type) {
    if ($post_type != __FILE__) {
        require $post_type;
    }
}

/**
 * Allow thumbnails
 */
add_theme_support( 'post-thumbnails' );

// Adding excerpt for page
add_post_type_support( 'page', 'excerpt' );

// custom logo
add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
) );

//options page

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('SoMe Links'),
            'menu_title'    => __('SoMe Links'),
            'menu_slug'     => 'some-links',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}