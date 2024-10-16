<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rivia-hotel' );

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
define( 'AUTH_KEY',         'XpsX&=W0:wzToVsq#EgdB&PD}}zwXo9!oAaq@i[oWA{GofVa;/Gqc<pnTIp!I&tR' );
define( 'SECURE_AUTH_KEY',  '-$6YKLIIVcld%8?K,72b+g&C@x_Lq lNu_TX8#tr m,KOPsZ,qO@,%],eeXW^-j6' );
define( 'LOGGED_IN_KEY',    '4i^v6E_?b>x[QL].m#mgbq_Z{M{=]=<`f#YF+G*QENj_L~Vq{.UvGar_yx>iah3k' );
define( 'NONCE_KEY',        '#s/@Z<;w!^~-113x@}_93O07?t:2T)x^_$4S^F0h5Ihv|S(d2`>wjJKR_p/h>7:9' );
define( 'AUTH_SALT',        'm)ODu`umKv-QRF9K+^#GRUUmkDi8q=iS@{$x3iG+/5JDu>Y$Wa*V^I%~o/fVaxKA' );
define( 'SECURE_AUTH_SALT', 'm6)|>FeVgB14o_Dp;:#xvjlj#0~Dv?ax?GjGZK|gY$a^~=1[-7{7U^_Z-5PJ}46=' );
define( 'LOGGED_IN_SALT',   'YPn2%)$jn|=4!QP}U]c~FUhp0bxakg$TC8gyOC6WfGH-5:fHb2k$zkb2ppxUz4Y*' );
define( 'NONCE_SALT',       'sF|U/gyY:4LbbFvIDzGa)Z([^F9 <}Z<B6VRM0v<1VD3[{Dl#ZX!|s cYs$4 -*-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rhh_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
