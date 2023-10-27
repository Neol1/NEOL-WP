<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'NEOL-WP' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'o0,9+jg6Jl_2<~$B|D;HY}.=.~BgLb$:?&9KC >ZaaQD.QeY:!:j|(-96=tmfSuM' );
define( 'SECURE_AUTH_KEY',  'Q9d^6lCP%YZ~m8e.~aP@~4Qu~E7?vC4@f%yb)U~aUHOoT^p)DMxQK>)^;n{]st;#' );
define( 'LOGGED_IN_KEY',    'e?mPG<UpK{E:3G?b:xL@8+&M--~e=<ee=m%msZ2O|J0Q )4w|CTC1?*<(83+Y(yn' );
define( 'NONCE_KEY',        'tv?t7DB9{yJE,TR8:D[6Y*;NAmBx1eWDvy2hu`^5fmEC2MM$A7E8l%aN@+)_9N0Z' );
define( 'AUTH_SALT',        '|U^a{tYqO IxFp1;*{_&Nj?DgW-3V=8n(*zE@V?.kZ[+!MhGmNOT0-sv70QDAvQ$' );
define( 'SECURE_AUTH_SALT', 'IekLQz_CO>&?[<w**@9CuQ,[gfJ#S:|B)=-|)x=8 u|}<#:!Z `l#3]V>o`j;_C.' );
define( 'LOGGED_IN_SALT',   '~E3WS8td08pu4OCtKo&p-HgFA(l^cmXaTKcrh0j/vTyYs!z]8vr$ND+G:mA&/g4X' );
define( 'NONCE_SALT',       'f{S)<7?f4l[ZNJ!IFO.Q/4!/3dH>c@8dA 0fptfeSu_6~..=CKLx[T=)m#.>htxz' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
