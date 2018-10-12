<?php
/**
 * studentlifeUOL functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package studentlifeUOL
 */

if ( ! function_exists( 'studentlifeUOL_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function studentlifeUOL_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on studentlifeUOL, use a find and replace
		 * to change 'studentlifeUOL' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'studentlifeUOL', get_template_directory() . '/languages' );

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

		/* image resizing */
		add_image_size( 'post-intro-image', 722, 408, array( 'left', 'top' )  ); // Hard Crop Mode
		add_image_size( 'post-intro-image-video', 640, 430, array( 'left', 'top' )  ); // Hard Crop Mode

		add_image_size( 'hero-header', 1915, 630, array( 'center', 'center' )  ); // Hard Crop Mode
		add_image_size( 'post-sidebar', 347, 195, array( 'center', 'center' )  );
		add_theme_support( 'post-formats', array( 'video','image' ) );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary-menu' => esc_html__( 'Primary', 'studentlifeUOL' ),
			'bm-first-menu' => esc_html__( 'Burger Menu First Menu', 'studentlifeUOl'),
			'bm-second-menu' => esc_html__( 'Burger Menu Second Menu', 'studentlifeUOl'),
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
		add_theme_support( 'custom-background', apply_filters( 'studentlifeUOL_custom_background_args', array(
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
add_action( 'after_setup_theme', 'studentlifeUOL_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function studentlifeUOL_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'studentlifeUOL_content_width', 640 );
}
add_action( 'after_setup_theme', 'studentlifeUOL_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function studentlifeUOL_widgets_init() {
	register_sidebar( array(
				'name' 			=> __( 'Footer Left', 'learning_lincoln' ),
				'id' 			=> 'footer-left',
				'description' 	=> __( 'Widgets in this area will be shown in the left column in the footer.', 'learning_lincoln' ),
				'before_title' 	=> '<h3 class="widget-title">',
				'after_title' 	=> '</h3>',
				'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
				'after_widget' 	=> '</div></div>'
			) );

			register_sidebar( array(
				'name' 			=> __( 'Footer Middle', 'learning_lincoln' ),
				'id' 			=> 'footer-middle',
				'description' 	=> __( 'Widgets in this area will be shown in the middle column in the footer.', 'learning_lincoln' ),
				'before_title' 	=> '<h3 class="widget-title">',
				'after_title' 	=> '</h3>',
				'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
				'after_widget' 	=> '</div></div>'
			) );




}
add_action( 'widgets_init', 'studentlifeUOL_widgets_init' );

/*
 * Custom excerpt length test
 */

 function custom_excerpt($limit) {
   $excerpt = explode(' ', get_the_excerpt(), $limit);
   if (count($excerpt)>=$limit) {
     array_pop($excerpt);
     $excerpt = implode(" ",$excerpt).'...';
   } else {
     $excerpt = implode(" ",$excerpt);
   }
   $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
   echo $excerpt;
 }

 function custom_biography($biography, $limit) {
   $b_bio = explode(' ', $biography, $limit);
   if (count($b_bio)>=$limit) {
     array_pop($b_bio);
     $b_bio = implode(" ",$b_bio).'...';
   } else {
     $b_bio = implode(" ",$b_bio);
   }
   $b_bio = preg_replace('`[[^]]*]`','',$b_bio);
   echo $b_bio;
 }

 function prefix_category_title( $title ) {
     if ( is_category() ) {
         $title = single_cat_title( '', false );
     }
     return $title;
 }
 add_filter( 'get_the_archive_title', 'prefix_category_title' );

 // Remove P Tags Around Images
 function filter_ptags_on_images($content){
     return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
 }
 add_filter('the_content', 'filter_ptags_on_images');

/**
 * Developer hooks.
 */
require get_template_directory() . '/inc/hooks.php';



/**
 * Load site scripts/styles
 */
require get_template_directory() . '/inc/template-scripts.php';


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';


/**
 * Implement ACF.
 */
require get_template_directory() . '/inc/functions-acf.php';
