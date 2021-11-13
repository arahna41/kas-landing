<?php
/**
 * Keep_Austin_Sexy functions and definitions
 *
 * @package Keep_Austin_Sexy
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'keep_austin_sexy_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function keep_austin_sexy_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Keep_Austin_Sexy, use a find and replace
		 * to change 'keep_austin_sexy' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'keep_austin_sexy', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'keep_austin_sexy' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'keep_austin_sexy_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
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
endif;
add_action( 'after_setup_theme', 'keep_austin_sexy_setup' );


/**
 * Enqueue scripts and styles.
 */
function keep_austin_sexy_scripts() {
	wp_enqueue_style( 'owl_carousel_css_min', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
	wp_enqueue_style( 'reset-style', get_template_directory_uri() . '/assets/css/reset.css' );
	wp_enqueue_style('system-style', get_template_directory_uri() . '/assets/css/style_system.css' );
	wp_enqueue_style( 'keep_austin_sexy-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'keep_austin_sexy-style', 'rtl', 'replace' );

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), null, true);
	wp_enqueue_script( 'owl-carousel-scripts', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'keep_austin_sexy-scripts', get_template_directory_uri() . '/assets/js/script.js' , array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'keep_austin_sexy_scripts' );

/*
Custom logo 
*/

add_theme_support( 'custom-logo' );

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
};

add_action( 'wp_footer', 'mycustom_wp_footer' );

function mycustom_wp_footer() {
    ?>
    <script type="text/javascript">
		var content = document.querySelector(".fixed");
		var cross = document.querySelector(".close");

		document.addEventListener( 'wpcf7mailsent', function( event ) {
			if(event.detail.contactFormId=="8" || event.detail.contactFormId=="109" || event.detail.contactFormId=="115") {
				content.classList.toggle("fixed_none");
				cross.addEventListener("click", crossClick);
				function crossClick() {
					content.classList.add("fixed_none");
				};
				content.addEventListener("click", fieldClick);
				function fieldClick() {
					content.classList.add("fixed_none");
				};
			}
		}, false );
    </script>
    <?php
};