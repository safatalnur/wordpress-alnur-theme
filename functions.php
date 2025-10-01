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

/*
        ====================================================
        Add Post Format column on the All posts admin panel
        ====================================================
*/
// Add column
function add_post_format_column($columns) {
    $columns['post_format'] = __('Post Format', 'text_domain');
    return $columns;
}
add_filter('manage_posts_columns', 'add_post_format_column');

//Populate Post Format column
function populate_post_format_column($column, $post_id) {
    if ($column === 'post_format') {
        $format = get_post_format($post_id);
        echo $format ? ucfirst($format) : __('Standard', 'text_domain');
    }
}
add_action('manage_posts_custom_column', 'populate_post_format_column', 10, 2);

add_filter('nav_menu_css_class', function($classes, $item) {
    // Uncomment below to debug
    // error_log(print_r($classes, true));
    return $classes;
}, 10, 2);

/*
        ====================================================
        Sidebar function
        ====================================================
*/
function alnur_theme_widget_setup() {
    register_sidebar(
        array(
            'name'  => 'Sidebar',
            'id'    => 'sidebar-1',
            'class' => 'custom',
            'description'   => 'Standard sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h2 class="widget-title custom-title">',
            'after_title'   => '</h2>',
        )
    );
}

add_action('widgets_init', 'alnur_theme_widget_setup');
// To show the classic widgets screen with available widget options, use block editor
add_filter( 'use_widgets_block_editor', '__return_false' );
