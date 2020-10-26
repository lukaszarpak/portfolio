<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lukaszarpak' );

/** MySQL database username */
define( 'DB_USER', 'Lukasz' );

/** MySQL database password */
define( 'DB_PASSWORD', 'c11SniSO2VVeuHFT' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', '1RrKM<LvYjiU?/<Un9rix01.QT.s9IAsE#V-<qRG-nFD^Y<-4!:2v&;C;gNF@LhM' );
define( 'SECURE_AUTH_KEY', '<VnX=mjDtJw[i(5~~6_YKhK9W:k@:pA$I<vMK!@{6(alkZ[nQ^t&Ths]$Ovttaa3' );
define( 'LOGGED_IN_KEY', 'aL<($.7~]O|IGHgCd>J9b W(u6H_rBks7(Qu(cL|qcx_wTj(OC&T~O[Gl,tPl!mU' );
define( 'NONCE_KEY', '/AE^$ZpmogL/P,5D?ew6JBfYl_8U)9d{lOf`hkIerglH8?8?X%Ay~u+vclEymwh+' );
define( 'AUTH_SALT', 'II5D`,XdB#1l @XuH?1Z]1y/& G%qO:L#=^VYwaC8ZX*BTIm+>j7JeD0t;EqGj<v' );
define( 'SECURE_AUTH_SALT', '1Cv[qV>979JyzOP]~;:9#5J1<Bq=~dIW;OM[/Lzf/zJ Su`@,k%YI>NqU6>dPUf$' );
define( 'LOGGED_IN_SALT', '%<lCXB2nI{qEs-yrTK!/y} 30}9lHlM;K1H/`_RRq+SC<T*87d$U@Y0d}i:tm9%j' );
define( 'NONCE_SALT', 'n(&ek WY9wGvJ2QUg[M7:[e]u97Lt*nD8a)I6(#gaJpl(H:BmtczWOC(q8uR6A#3' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
