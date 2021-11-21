<?php
/* typerocket initialization */
require('typerocket/init.php');
require('inc/cpt.php');
// we enqueue scripts and css for bootstrap and force the use of jquery
function fittywebdev_enqueue()
{
    wp_enqueue_style('minicss', get_template_directory_uri() . '/css/mini.min.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('minijs', get_template_directory_uri() . '/js/mini.min.js', array('jquery'), true);
}

add_action('wp_enqueue_scripts', 'fittywebdev_enqueue');

// Demande a wp d'afficher le title du site et autorise l'utilisation d'images pour les posts.
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

function register_navwalker()
{
    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

//Enregistre les menus dans l'admin de wp
register_nav_menus(array(
    'header' => 'Header',
    'footer' => 'Footer'
));

//Possibilité de créer des widgets
function fittywebdev_widgets_init()
{
    register_sidebar(array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ));

    register_sidebar(array(
        'name'          => 'Footer (Left)',
        'id'            => 'footer_left',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ));

    register_sidebar(array(
        'name'          => 'Footer (Center)',
        'id'            => 'footer_center',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ));

    register_sidebar(array(
        'name'          => 'Footer (Right)',
        'id'            => 'footer_right',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ));
}

add_action('widgets_init', 'fittywebdev_widgets_init');
