<?php
/**
 * Tedx functions and definitions
 *
 * @package Tedx
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'tedx_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function tedx_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on Tedx, use a find and replace
	 * to change 'tedx' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'tedx', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'tedx' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( 'tedx_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	
	add_image_size( 'speaker_thumb', 300, 183, true );
	add_image_size( 'post-img', 620, 420 );
	
}
endif; // tedx_setup
add_action( 'after_setup_theme', 'tedx_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function tedx_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar Twitter & Flicker', 'tedx' ),
		'id'            => 'sidebar-1',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Sidebar Facebook', 'tedx' ),
		'id'            => 'sidebar-2',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	
	register_sidebar( array(
		'name'          => __( 'Header | SocialIcons', 'tedx' ),
		'id'            => 'header_socialicons',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => __( 'Banner | Caption', 'tedx' ),
		'id'            => 'banner_caption',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => __( 'Banner | Slider', 'tedx' ),
		'id'            => 'banner_slider',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer | Copyright', 'tedx' ),
		'id'            => 'footer_copyright',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer | SocialIcons', 'tedx' ),
		'id'            => 'footer_socialicons',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	
		
}
add_action( 'widgets_init', 'tedx_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function tedx_scripts() {
	wp_enqueue_style( 'tedx-style', get_stylesheet_uri() );

	wp_enqueue_script( 'tedx-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'tedx-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'tedx-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'tedx_scripts' );

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
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';




add_filter('widget_text', 'do_shortcode');

add_shortcode('template-url', 'template_url');

add_shortcode('template_url', 'template_url');

function template_url()
{
	return get_bloginfo('template_url');
}


add_shortcode('blog-url', 'blog_url');

function blog_url()
{
	return get_bloginfo('url');
}




