<?php
/**
 * Pure Aesthetics functions and definitions
 *
 * @package Pure Aesthetics
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'pureaesthetics_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function pureaesthetics_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Pure Aesthetics, use a find and replace
	 * to change 'pureaesthetics' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'pureaesthetics', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'pureaesthetics' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'pureaesthetics_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // pureaesthetics_setup
add_action( 'after_setup_theme', 'pureaesthetics_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function pureaesthetics_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'pureaesthetics' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'pureaesthetics_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function pureaesthetics_scripts() {
	wp_enqueue_style( 'pureaesthetics-style', get_stylesheet_uri() );

	wp_enqueue_script( 'pureaesthetics-navigation', get_template_directory_uri() . '/js/main.min.js', array(), true, true );


	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'pureaesthetics_scripts' );
// add_theme_support('post-thumbnails');
// add_action( 'init', 'register_coupon' );

// function register_coupon() {

//     $labels = array( 
//         'name' => 'Coupons',
//         'singular_name' => 'Coupon',
//         'add_new' => 'Add New',
//         'add_new_item' => 'Add New Coupon',
//         'edit_item' => 'Edit Coupon',
//         'new_item' => 'New Coupon',
//         'view_item' => 'View Coupon',
//         'search_items' => 'Search Coupons',
//         'not_found' => 'No coupons found',
//         'not_found_in_trash' => 'No coupons found in Trash',
//         'menu_name' => 'Coupons',
//     );

//     $args = array( 
//         'labels' => $labels,
//         'hierarchical' => false,
//         'description' => 'Here you will add all the coupons for PureAesthetics',
//         'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
//         // 'taxonomies' => array( 'discounts' ),
//         'public' => true,
//         'show_ui' => true,
//         'show_in_menu' => true,
//         'menu_position' => 5,
//         //'menu_icon' => the image link here,
//         'show_in_nav_menus' => true,
//         'publicly_queryable' => true,
//         'exclude_from_search' => true,
//         'has_archive' => true,
//         'query_var' => true,
//         'can_export' => true,
//         'rewrite' => true,
//         'capability_type' => 'post'
//     );

//     register_post_type( 'coupon', $args );
// }

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

add_theme_support( 'post-thumbnails' );

add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}


