<?php

/*

    ========================================================================================

    Include Scripts
    // hooks that go inside a function
    // enqueue the style
    // 5 params, first is required, the four are optional
    // enqueue style, source, dependencies/empty array, version,
    // get_tem_dir_url is premade WP function - prints full URI where template is, all
    // adding jQuery

    ========================================================================================

*/

function awesome_script_enqueue() {
    // css
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/awesome.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all');
    // js
    wp_enqueue_script('jquery');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/awesome.js', array(), '1.0.0', true);
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.7', true);
}

/*

    ========================================================================================

    // add hook, params, the moment enqueue scripts is generated, callback function
    // choose scripts, not script, because adding ALL

    ========================================================================================

*/
add_action('wp_enqueue_scripts', 'awesome_script_enqueue');

/*

    ========================================================================================

    Activate Menus
    // when need to activate specific theme support, it's better to add inside a function

    ========================================================================================

*/

function awesome_theme_setup() {

    add_theme_support('menus');

    // values: menu name, description
    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');

}

/*

    ========================================================================================

    // activate function after theme is setup or during initialization of theme
    //  The ‘init’ hook may be too late for some features

    ========================================================================================

*/


add_action('init', 'awesome_theme_setup');
// add_action('after_setup_theme', 'awesome_theme_setup');

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

add_theme_support('post-formats', array('aside', 'image', 'video'));

?>

