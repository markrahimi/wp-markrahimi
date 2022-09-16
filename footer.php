<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package markrahimi
 */
?>



 <!-- Footer Section Begin -->
 <footer class="footer">
        <div class="container">
            <div class="footer__top">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top__logo">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php the_custom_logo(); ?></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top__social">
								<a href="https://twitter.com/<?php echo get_theme_mod( 'twitter', 'markrahimi98' ); ?>/"><i class="fa fa-twitter"></i></a>
								<a href="https://t.me.com/<?php echo get_theme_mod( 'telegram', 'markrahimi' ); ?>/"><i class="fa fa-telegram"></i></a>
								<a href="https://github.com/<?php echo get_theme_mod( 'github', 'markrahimi' ); ?>/"><i class="fa fa-github"></i></a>
								<a href="https://instagram.com/<?php echo get_theme_mod( 'instagram', 'markrahimi' ); ?>/"><i class="fa fa-instagram"></i></a>
								<a href="tel:<?php echo get_theme_mod( 'phone', '+989120603568' ); ?>"><i class="fa fa-phone"></i></a>
								<a href="mailto:<?php echo get_theme_mod( 'mal', 'markrahimi98ir@gmail.com' ); ?>"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__option">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <?php dynamic_sidebar( 'footer-widget-1' ); ?>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3">
                         <?php dynamic_sidebar( 'footer-widget-2' ); ?>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3">
                        <?php dynamic_sidebar( 'footer-widget-3' ); ?>
                    </div>
                    <div class="col-lg-4 col-md-12">
						<?php dynamic_sidebar( 'footer-widget-4' ); ?>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p class="footer__copyright__text">حق کپی رایت &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            <?php echo get_theme_mod( 'text_copyright', 'تمامی حقوق محفوظ است' ); ?> |  <i class="fa fa-link" aria-hidden="true"></i> by <a href="https://markrahimi.com" target="_blank">markrahimi</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

<?php wp_footer(); ?>

<?php echo get_theme_mod( 'scripts_txt', ' ' ); ?>
</body>
</html>
