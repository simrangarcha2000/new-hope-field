<?php
/**
 * New Hope functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package New_Hope
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'new_hope_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function new_hope_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on New Hope, use a find and replace
		 * to change 'new-hope' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'new-hope', get_template_directory() . '/languages' );

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
				'menu-primary' => esc_html__( 'Primary', 'new-hope' ),
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

				/**
	 * Add support for color palette
	 */
	add_theme_support('editor-color-palette',array(
		array(
			'name' => esc_attr__('Black','glorify'),
			'slug' => 'black',
			'color' => '#000000',
		),
		array(
			'name' => esc_attr__('Seaweed Green','glorify'),
			'slug' => 'seaweed-green',
			'color' => '#396134',
		),
		array(
			'name' => esc_attr__('Sky Blue','glorify'),
			'slug' => 'sky-blue',
			'color' => '#2e89aa',
		),
		array(
			'name' => esc_attr__('Mustard','glorify'),
			'slug' => 'mustard',
			'color' => '#dfa13a',
		),
		));
	
	}
endif;
add_action( 'after_setup_theme', 'new_hope_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function new_hope_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'new_hope_content_width', 640 );
}
add_action( 'after_setup_theme', 'new_hope_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function new_hope_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'new-hope' ),
			'id'            => 'sidebar-one',
			'description'   => esc_html__( 'Add widgets here.', 'new-hope' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'new_hope_widgets_init' );




/**
 * Enqueue scripts and styles.
 */
function new_hope_scripts() {
	wp_enqueue_style( 'new-hope-style', get_stylesheet_uri(), array(), _S_VERSION );

		//Foundation (should always be below main style sheet and custom  style sheet after)
		wp_enqueue_style('foundation-style', get_template_directory_uri().'/assets/css/vendor/foundation.css');

		
	
		//To put the script to the footer following the syntax and putting footer as true
		wp_enqueue_script('foundation-script', get_template_directory_uri().'/assets/js/vendor/foundation.js', array(), false, true);
		wp_enqueue_style('custom-style', get_template_directory_uri().'/assets/css/custom.css');


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'new_hope_scripts' );


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

/**                           BLOCK ASSETS                   */

function new_hope_enqueue_block_editor_assets() {
    wp_enqueue_script(
        'editor-script',
        get_template_directory_uri() . '/assets/js/editor.js',
		array('wp-blocks','wp-dom-ready','wp-edit-post')
    );
}

//Action running then refering the func created above 
add_action( 'enqueue_block_editor_assets', 'new_hope_enqueue_block_editor_assets' );


/***
 * Enqueuing block assets
 * Loads on both admin and front end - utilize one css that works both sides
 */

function new_hope_enqueue_block_assets() {
    wp_enqueue_style( 
		'blocks-style',
		get_template_directory_uri() . '/assets/css/blocks.css'
	);
}
add_action( 'enqueue_block_assets', 'new_hope_enqueue_block_assets' );

