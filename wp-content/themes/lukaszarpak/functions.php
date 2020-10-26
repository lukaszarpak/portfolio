<?php
/**
 * Theme functions and definitions
 *
 * @package lukaszarpak
 * @since 1.0.0
 * @since 1.0.0
 */

/**
 * Require the main autoloader
 */
require_once 'autoload.php';

define( 'LUKASZARPAK_VERSION', '1.0.13' );
define( 'LUKASZARPAK_URL', get_stylesheet_directory_uri() );
define( 'LUKASZARPAK_PATH', get_stylesheet_directory() );

$jak = new Lukaszarpak\Init();

