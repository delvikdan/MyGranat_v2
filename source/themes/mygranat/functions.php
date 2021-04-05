<?php
/**
 * mygranat functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mygranat
 */

if ( ! function_exists( 'mygranat_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mygranat_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on mygranat, use a find and replace
	 * to change 'mygranat' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'mygranat', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'mygranat' ),
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
	add_theme_support( 'custom-background', apply_filters( 'mygranat_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'mygranat_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mygranat_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mygranat_content_width', 640 );
}
add_action( 'after_setup_theme', 'mygranat_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mygranat_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mygranat' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mygranat' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mygranat_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mygranat_scripts() {
	wp_enqueue_style( 'mygranat-style', get_template_directory_uri() . '/style.css' );
  
  wp_enqueue_script('custom-jquery','/wp-includes/js/jquery/jquery.js','','',true);
  
  wp_enqueue_script( 'mygranat-general-js', get_template_directory_uri() . '/assets/js/general.js', '','',true);
  
	//wp_enqueue_script( 'mygranat-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	//wp_enqueue_script( 'mygranat-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
  
  if ( is_page_template( 't-portfolio.php' ) ) {
    wp_enqueue_script( 'mouse-scroll', get_template_directory_uri() . '/assets/js/jquery.mousewheel.min.js', '','',true);
  }
  
  wp_enqueue_style( 'mygranat-fonts', '//fonts.googleapis.com/css?family=Fira+Sans:300,400,500,700' );
}
add_action( 'wp_enqueue_scripts', 'mygranat_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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




//Убирает форматирование в редакторе
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );


// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7); 
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

add_filter( 'emoji_svg_url', '__return_false' );

/* удаление левых ссылок из шапки */
add_filter('xmlrpc_enabled', '__return_false');
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );
remove_action( 'wp_head', 'wp_shortlink_wp_head');
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head');

remove_action('wp_head', 'rel_canonical');
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


// Отключаем сам REST API
add_filter('rest_enabled', '__return_false');

// Отключаем фильтры REST API
remove_action( 'xmlrpc_rsd_apis', 'rest_output_rsd' );
remove_action( 'wp_head', 'rest_output_link_wp_head', 10, 0 );
remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );
remove_action( 'auth_cookie_malformed', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_expired', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_username', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_hash', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_valid', 'rest_cookie_collect_status' );
remove_filter( 'rest_authentication_errors', 'rest_cookie_check_errors', 100 );

// Отключаем события REST API
remove_action( 'init', 'rest_api_init' );
remove_action( 'rest_api_init', 'rest_api_default_filters', 10, 1 );
remove_action( 'parse_request', 'rest_api_loaded' );

// Отключаем Embeds связанные с REST API
remove_action( 'rest_api_init', 'wp_oembed_register_route' );
remove_filter( 'rest_pre_serve_request', '_oembed_rest_pre_serve_request', 10, 4 );

//Отключаем wp-embed.js
function my_deregister_scripts(){
 wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );


//Длинна exce
function new_excerpt_length($length) {
	return 33;
}
add_filter('excerpt_length', 'new_excerpt_length');

add_filter('excerpt_more', function($more) {
	return '...';
});




add_filter('wp_list_categories','style_current_cat_single_post');
// filter to add the .current-cat class to categories list in single post
function style_current_cat_single_post($output) {
    if( is_single() or is_archive() ) :
        global $post;
        foreach ( get_the_category($post->ID) as $cat ) {
            $cats[] = $cat->term_id;
        }
        foreach($cats as $value) {
            if(preg_match('#item-' . $value . '">#', $output)) {
            $output = str_replace('item-' . $value . '">', 'item-' . $value . ' current-cat">', $output);
            }
        }
    endif;
return $output;
}



add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );
