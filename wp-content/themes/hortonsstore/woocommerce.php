<?php get_header(); ?>

    <?php woocommerce_content(); ?>

<?php
do_action( 'storefront_sidebar' );
get_footer();
?>