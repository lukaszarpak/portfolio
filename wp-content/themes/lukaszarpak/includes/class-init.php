<?php
/**
 * Init class
 *
 * @package lukaszarpak
 * @since 1.0.0
 */

namespace Lukaszarpak;

use Lukaszarpak\Shortcodes\Featured_Projects_Crontoller;
/**
 * Init class
 */
class Init {
	/**
	 * The class contructor
	 */
	public function __construct() {
		add_theme_support( 'custom-logo' );

		add_action( 'after_setup_theme', array( $this, 'custom_logo_setup' ), 20 );

		add_action( 'wp_enqueue_scripts', array( $this, 'register_jquery' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'add_scripts' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'add_styles' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'register_fontawesome' ) );
		add_filter( 'body_class', array( $this, 'my_body_class' ) );

		$this->init_shortcode( new Featured_Projects_Crontoller() );

		add_theme_support( 'menus' );

		register_nav_menus(
			array(
				'top-menu'    => __( 'Top Menu', 'theme' ),
				'footer-menu' => __( 'Footer Menu', 'theme' ),
			)
		);

	}

	/**
	 * Enqueue scripts
	 */
	public function add_scripts() {
		if ( ! is_admin() ) {
			wp_enqueue_script( 'navigation', LUKASZARPAK_URL . '/resources/scripts/navigation.js', array( 'jquery' ), LUKASZARPAK_VERSION, true );
			wp_enqueue_script( 'items-position', LUKASZARPAK_URL . '/resources/scripts/items-position.js', array( 'jquery' ), LUKASZARPAK_VERSION, true );
			wp_enqueue_script( 'animate-scroll', LUKASZARPAK_URL . '/resources/scripts/animate-scroll.js', array( 'jquery' ), LUKASZARPAK_VERSION, true );
			wp_enqueue_script( 'projects-menu', LUKASZARPAK_URL . '/resources/scripts/projects-menu.js', array( 'jquery' ), LUKASZARPAK_VERSION, true );
		}
	}

	/**
	 * Enqueue styles
	 */
	public function add_styles() {
		if ( ! is_admin() ) {
			wp_enqueue_style( 'style', LUKASZARPAK_URL . '/assets/styles/style.css', array(), LUKASZARPAK_VERSION );
		}
	}

	/**
	 * Register fontawesome in the head
	 *
	 * @return void
	 */
	public function register_fontawesome() {

		wp_enqueue_script( 'script', 'https://kit.fontawesome.com/921fcf519c.js', array(), LUKASZARPAK_VERSION, false );
	}

	/**
	 * Adds custom logo
	 */
	public function custom_logo_setup() {
		$defaults = array(
			'height'      => 100,
			'width'       => 400,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
		);
		add_theme_support( 'custom-logo', $defaults );
	}

	/**
	 * Adds jquery
	 */
	public function register_jquery() {

		wp_deregister_script( 'jquery' );

		wp_enqueue_script( 'jquery', LUKASZARPAK_URL . '/assets/scripts/jquery3.5.1.js', array(), LUKASZARPAK_VERSION, true );
	}

	/**
	 * Initialize shortcodes
	 *
	 * @param $controller Display_Projects class
	 */
	public function init_shortcode( $controller ) {

		add_shortcode( 'projects', array( $controller, 'projects_shortcode' ) );
	}

	/**
	 * Initialize shortcodes
	 *
	 * @param $classes Display_Projects class
	 */
	public function my_body_class( $classes ) {

		if ( is_page() ) {
			global $page;
			$title     = 'page-' . strtolower( get_the_title( $page ) );
			$classes[] = $title;

		}
		return $classes;
	}


}
