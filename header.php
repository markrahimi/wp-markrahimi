<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package markrahimi
 */
?>


<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
    <meta charset="UTF-8">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    
	<?php
	$markrahimi_description = get_bloginfo( 'description', 'display' );
	if ( $markrahimi_description || is_customize_preview() ) :?>
	<meta name="description" content="><?php echo $markrahimi_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>">
	<?php endif; ?>
    <!-- <meta name="keywords" content="mark"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo( 'name' ); ?> |  <?php echo bloginfo( 'description'); ?> </title>
	


	<?php wp_head(); ?>

</head>
	<title>
	
	</title>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php the_custom_logo(); ?></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav__option">
                        <nav class="header__nav__menu mobile-menu">
                            <ul>
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									)
								);
								?>
                            </ul>
                        </nav>
                        <div class="header__nav__social">
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
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->