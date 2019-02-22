</div><!--content -->
    <footer id="site-footer" class="footer">
        <div class="footer-newsletter">
            <div class="socialmedia">
                <ul>
                    <li class="twitter"><span>Twitter</span></li>
                    <li class="instagram"><span>Instagram</span></li>
                    <li class="facebook"><span>Facebook</span></li>
                </ul>
            </div>

            <div class="newsletter">
                <p>Intrested in us and our produce?</p>
                <button>Sign Up</button>
            </div>
        </div>

        <div class="footer-main">
            <div class="footer-content">
                <?php if ( has_nav_menu( 'footer' ) ) : ?>
                    <nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'twentynineteen' ); ?>">
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'footer',
                                    'menu_class'     => 'footer-menu',
                                    'depth'          => 1,
                                )
                            );
                        ?>
                    </nav><!-- .footer-navigation -->
                <?php endif; ?>

                <p id="copyright"><?php bloginfo( 'name' ); ?>&copy; <?php the_date("Y"); ?></p>
            </div>
        </div>
    </footer><!--site-footer -->
</div><!--container -->
<?php wp_footer(); ?>
</body>
</html>