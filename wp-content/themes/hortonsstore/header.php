<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
    <title><?php single_post_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body>
<div id="container">
    <header id="main-header" class="header">
        <div class="trustbuilder">
            <p id="site-description"><?php bloginfo( 'description' ); ?></p>
        </div>

        <div class="main-header">
            <div class="search">
                <a class="open-search" href="/"><span>Search</span></a>
                <?php get_search_form(); ?>
            </div>

            <div class="logo">
                <?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?>
            </div>

            <a class="minibasket" href="wordpress/cart"></a>
        </div>

        <div class="navigation">
            <nav id="site-navigation">
                <?php wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'depth' => 0) ); ?>
            </nav><!--site-navigation -->
        </div>
    </header>

    <?php if ( get_header_image() ) : ?>
        <img class="site-logo" id="site-custom-header" src="<?php header_image(); ?>" 
            width="<?php echo get_custom_header()->width ; ?>" 
            height="<?php echo get_custom_header()->height ; ?>" 
            alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
    <?php endif; ?>
    
    <div class="content">