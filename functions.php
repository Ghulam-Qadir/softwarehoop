<?php
/**
 * softwarehoop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package softwarehoop
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
function softwarehoop_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on softwarehoop, use a find and replace
		* to change 'softwarehoop' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'softwarehoop', get_template_directory() . '/languages' );

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
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'main-menu' => esc_html__( 'Primary', 'softwarehoop' ),
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
add_action( 'after_setup_theme', 'softwarehoop_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function softwarehoop_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'softwarehoop_content_width', 640 );
}
add_action( 'after_setup_theme', 'softwarehoop_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function softwarehoop_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'softwarehoop' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'softwarehoop' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'softwarehoop_widgets_init' );

/*ACF Pro Include in Theme*/
define('SOFTWAREHOOP_ACF_PATH',get_stylesheet_directory().'/inc/acf-pro/');
define('SOFTWAREHOOP_ACF_URL', get_stylesheet_directory_uri().'/inc/acf-pro/');
require_once SOFTWAREHOOP_ACF_PATH . 'acf.php';

add_filter('acf/settings/url','csm_settings_url');
function csm_settings_url($url){
	return SOFTWAREHOOP_ACF_URL;
}

/**
 * acf include.
 */
require get_template_directory(). '/inc/acf.php';
/**
 * Enqueue scripts and styles.
 */
require get_template_directory(). '/inc/enqueue.php';

/*** Menu Walker***/
require get_template_directory() . '/inc/desktop-menu-walker.php';

/*** Mobile Menu Walker***/
require get_template_directory() . '/inc/mobile-menu-walker.php';
/**
 * cpt include.
 */
require get_template_directory(). '/inc/cpt.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

