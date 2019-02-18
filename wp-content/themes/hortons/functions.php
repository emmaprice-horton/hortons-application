<?php
function hortons_add_menus() {
    register_nav_menus( array(
        'primary' => __( 'Primary' ),
        'secondary' => __( 'Navigation' ),
    ) );
}

add_action( 'after_setup_theme',
            'hortons_add_menus' );

function hortons_add_custom_header() {
    //support custom header
    add_theme_support( 'custom-header', array(
        'width'    => 1920,
        'height'   => 500, )
    );
}

add_action( 'after_setup_theme', 'hortons_add_custom_header' );

function hortons_add_custom_logo() {
    $defaults = array(
        'width'       => 180,
        'height'      => 180,
        'flex-width' => true,
        'flex-height'  => true
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'hortons_add_custom_logo' );

add_theme_support( 'post-thumbnails' );


function hortons_add_stylesheet() {
    wp_enqueue_style( 'newstyle', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'hortons_add_stylesheet' );