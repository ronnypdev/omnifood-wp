<?php
/**
 * omnifood functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package omnifood
 */

if ( ! function_exists( 'omnifood_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function omnifood_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on omnifood, use a find and replace
		 * to change 'omnifood' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'omnifood', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'omnifood' ),
            'footer-1' => esc_html__( 'Footer', 'omnifood' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'omnifood_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'omnifood_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function omnifood_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'omnifood_content_width', 640 );
}
add_action( 'after_setup_theme', 'omnifood_content_width', 0 );
add_filter('show_admin_bar', '__return_false');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function omnifood_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'omnifood' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'omnifood' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'omnifood_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function omnifood_scripts() {
	wp_enqueue_style( 'omnifood-style', get_stylesheet_uri() );

	wp_enqueue_script( 'omnifood-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'omnifood-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), '1.12.4', true);
    wp_enqueue_script('respond', 'https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js', array('jquery'), '1.4.2', true);
    wp_enqueue_script('waypoint', get_template_directory_uri() . '/vendors/js/jquery.waypoints.min.js', array('jquery'), '1.5.2', true);
    wp_enqueue_script('main_js', get_template_directory_uri() . '/resources/js/index.js', array('jquery'), '1.0.0', true);

}
add_action( 'wp_enqueue_scripts', 'omnifood_scripts' );

/**
 * Enqueue styles.
 */

function omnifood_styles() {
    
    wp_enqueue_style('Lato', 'https://fonts.googleapis.com/css?family=Lato:400,300,100,300italic');
    wp_enqueue_style('normalize_css', get_template_directory_uri() . '/vendors/css/normalize.css');
    wp_enqueue_style('grid_css', get_template_directory_uri() . '/vendors/css/grid.css');
    wp_enqueue_style('ionicons_min_css', get_template_directory_uri() . '/vendors/css/ionicons.min.css');
    wp_enqueue_style('animate_css', get_template_directory_uri() . '/vendors/css/animate.css');
    wp_enqueue_style('main_css', get_template_directory_uri() . '/resources/css/style.css');
    wp_enqueue_style('queries_css', get_template_directory_uri() . '/resources/css/queries.css');

}

add_action('wp_enqueue_scripts', 'omnifood_styles');

add_image_size('small_icon', 172, 60, true);

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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

