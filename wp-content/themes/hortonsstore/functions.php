<?php
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

    function hortons_add_stylesheet() {
        wp_enqueue_style( 'newstyle', get_stylesheet_uri() );
    }
    add_action( 'wp_enqueue_scripts', 'hortons_add_stylesheet' );


    function hortons_add_woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }
    add_action( 'after_setup_theme', 'hortons_add_woocommerce_support' );

    function hortons_add_menus() {
        register_nav_menus( array(
            'primary' => __( 'Primary' ),
            'secondary' => __( 'Navigation' ),
            'footer' => __( 'Footer Menu' )
        ) );
    }
    add_action( 'after_setup_theme',
                'hortons_add_menus' );