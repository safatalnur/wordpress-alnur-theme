<?php

/*
        =================================
        Include scripts
        =================================

*/

// Add script and stylesheets
function alnur_scripts() {
    //css
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '5.3.0', 'all');
    wp_enqueue_style('alnur_style', get_template_directory_uri().'/assets/css/custom_style.css', array(), '1.0.0', 'all');

    //js
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapjs', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '5.3.0', true);    
    wp_enqueue_script('alnur_js', get_template_directory_uri().'/assets/js/alnur.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'alnur_scripts');

/*
        =================================
        Activate menus
        =================================

*/

//Add menu function
function alnur_theme_setup() {
    add_theme_support('menus');
    register_nav_menus ( array (
        'primary' => 'Primary Header navigation',
        'secondary' => 'Footer Navigation'
    ));
}

add_action('init', 'alnur_theme_setup');

/*
        =================================
        Theme Support Functions
        =================================

*/

// Add background color, image option to Theme > Appearance
add_theme_support('custom-background');
// Add Header option to Theme > Appearance
add_theme_support('custom-header');
// Add Post Thumbnais option to Theme > Appearance
add_theme_support('post-thumbnails');
// Add Post Format theme support for formating post page
add_theme_support('post-formats', array('aside', 'image', 'video'));