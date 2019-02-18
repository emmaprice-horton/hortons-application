<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php single_post_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body>
<div id="container">
    <header id="main-header">
        <?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?>
        
        <h1 id="site-title"><a href="<?php echo esc_url( bloginfo( 'url' ) ); ?>"> 
            <?php bloginfo( 'name' ); ?></a></h1>
        <h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>

        <nav id="site-navigation">
            <?php wp_nav_menu( array(
                'theme_location' => 'primary',
                'depth' => 0) ); ?>
        </nav><!--site-navigation -->

        <?php if ( get_header_image() ) : ?>
            <img id="site-custom-header" src="<?php header_image(); ?>" 
                width="<?php echo get_custom_header()->width ; ?>" 
                height="<?php echo get_custom_header()->height ; ?>" 
                alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        <?php endif; ?>
    </header>
    
    <div class="content">