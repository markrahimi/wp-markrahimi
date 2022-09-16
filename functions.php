<?php
/**
 * markrahimi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package markrahimi
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function markrahimi_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on markrahimi, use a find and replace
		* to change 'markrahimi' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'markrahimi', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'markrahimi' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	
	add_image_size( 'slider', 1280, 595, true );
	add_theme_support( 'post-thumbnails' );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'markrahimi_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function markrahimi_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'markrahimi_content_width', 640 );
}
add_action( 'after_setup_theme', 'markrahimi_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function markrahimi_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'markrahimi' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'markrahimi' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'markrahimi_widgets_init' );


function kaladigital_widgets_footer1() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer1', 'markrahimi' ),
			'id'            => 'footer-widget-1',
			'description'   => esc_html__( 'از ابزارک ها این بخش را مدیریت کنید', 'markrahimi' ),
			'before_widget' => '<div class="footer__option__item">',
			'before_title'  => ' <h5>',
			'after_title'   => '</h5>',
			'after_widget'  => '</div>',
		)
	);
}
add_action( 'widgets_init', 'kaladigital_widgets_footer1' );



function kaladigital_widgets_footer2() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer2', 'markrahimi' ),
			'id'            => 'footer-widget-2',
			'description'   => esc_html__( 'از ابزارک ها این بخش را مدیریت کنید', 'markrahimi' ),
			'before_widget' => '<div class="footer__option__item">',
			'before_title'  => ' <h5>',
			'after_title'   => '</h5>',
			'after_widget'  => '</div>',
		)
	);
}
add_action( 'widgets_init', 'kaladigital_widgets_footer2' );



function kaladigital_widgets_footer3() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer3', 'markrahimi' ),
			'id'            => 'footer-widget-3',
			'description'   => esc_html__( 'از ابزارک ها این بخش را مدیریت کنید', 'markrahimi' ),
			'before_widget' => '<div class="footer__option__item">',
			'before_title'  => ' <h5>',
			'after_title'   => '</h5>',
			'after_widget'  => '</div>',
		)
	);
}
add_action( 'widgets_init', 'kaladigital_widgets_footer3' );


function kaladigital_widgets_footer4() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer4', 'markrahimi' ),
			'id'            => 'footer-widget-4',
			'description'   => esc_html__( 'از ابزارک ها این بخش را مدیریت کنید', 'markrahimi' ),
			'before_widget' => '<div class="footer__option__item">',
			'before_title'  => ' <h5>',
			'after_title'   => '</h5>',
			'after_widget'  => '</div>',
		)
	);
}
add_action( 'widgets_init', 'kaladigital_widgets_footer4' );

/**
 * Enqueue scripts and styles.
 */
function markrahimi_scripts() {

	
	wp_enqueue_style( 'bootstrap.min', get_template_directory_uri().'/css/bootstrap.min.css' );
	wp_enqueue_style( 'font-awesome.min', get_template_directory_uri().'/css/font-awesome.min.css' );
	wp_enqueue_style( 'elegant-icons', get_template_directory_uri().'/css/elegant-icons.css' );
	wp_enqueue_style( 'owl.carousel.min', get_template_directory_uri().'/css/owl.carousel.min.css' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri().'/css/magnific-popup.css' );
	wp_enqueue_style( 'slicknav.min', get_template_directory_uri().'/css/slicknav.min.css' );
	wp_enqueue_style( 'style', get_template_directory_uri().'/css/style.css', false );


	wp_enqueue_script( 'markrahimi-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );



    wp_enqueue_script( 'bootstrap.min', get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'), '3.3', 'false' );
    wp_enqueue_script( 'magnific-popup', get_template_directory_uri().'/js/jquery.magnific-popup.min.js',array('jquery'), '3.3', 'false' );
    wp_enqueue_script( 'mixitup.min.js', get_template_directory_uri().'/js/mixitup.min.js',array('jquery'), '3.3', 'false' );
    wp_enqueue_script( 'masonry.pkgd', get_template_directory_uri().'/js/masonry.pkgd.min.js',array('jquery'), '3.3', 'false' );
    wp_enqueue_script( 'slicknav', get_template_directory_uri().'/js/jquery.slicknav.js',array('jquery'), '3.3', 'false' );
    wp_enqueue_script( 'owl.min', get_template_directory_uri().'/js/owl.carousel.min.js',array('jquery'), '3.3', 'false' );
    wp_enqueue_script( 'main', get_template_directory_uri().'/js/main.js',array('jquery'), '3.3', 'false' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'markrahimi_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


// =========================================> required
/**
 * class-tgm-plugin-activation.php
 */
require get_template_directory() . '/inc/class-tgm-plugin-activation.php';
/**
 * required plugin
 */
require get_template_directory() . '/inc/required.php';


// =========================================> post type
/**
 * slider post type
 */
require get_template_directory() . '/inc/post-type/slider.php';
/**
 * team post type
 */
require get_template_directory() . '/inc/post-type/team.php';
/**
 * portfolio post type
 */
require get_template_directory() . '/inc/post-type/portfolio.php';
/**
 * service post type
 */
require get_template_directory() . '/inc/post-type/service.php';
/**
 * podcast post type
 */
require get_template_directory() . '/inc/post-type/podcast.php';

// =========================================> taxonomy
/**
* portfolio cat
*/
require get_template_directory() . '/inc/taxonomy/portfolio.php';
/**
* podcast cat
*/
require get_template_directory() . '/inc/taxonomy/podcast.php';

// =========================================> acf
/**
* acf
*/
require get_template_directory() . '/inc/acf/acf.php';

// =========================================> breadcrumb
/**
* breadcrumb
*/
require get_template_directory() . '/inc/breadcrumb.php';