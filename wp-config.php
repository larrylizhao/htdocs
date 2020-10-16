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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'larryli' );

/** MySQL database password */
define( 'DB_PASSWORD', '3920061' );

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
define( 'AUTH_KEY',         'uL|9$)w&F+R/2W<[.^7@4M>h_UDw#-Cq]{|YJ`)4QNro!:Ds)38xmX&sQyMe,[ZB' );
define( 'SECURE_AUTH_KEY',  '.W`~zx^5%-aI5OPMP}MeNiazP_#$0y,|S51@Y!m<i+rnhZPKCd#PjLk dj.CGvWH' );
define( 'LOGGED_IN_KEY',    'oKHhg&NA+.RyKq<hi9VUN_1tLy.KU[!}u0[PI@NX)-~G`Sf~^Q[;;+[x6g0j)|rx' );
define( 'NONCE_KEY',        'hAM!{=|XZG_QbRp|Ii6#@b,V6$I{B;_,i2 ?t7P+K;Qs_S}Kg5KY7a{W Ktx@7u@' );
define( 'AUTH_SALT',        ',ik%?>7r;E,hxpJ(L:)C|/5Y#|L8iG0PWhh}m8/dDjN!Qk$19C4IVOlI{]`y|r+(' );
define( 'SECURE_AUTH_SALT', 'ZjUbyhUEi1AO v2X;w`6 VAhgp xsA(2sYB<x_?)8BM.2c5)^sj=&Hg0pYfkS}i#' );
define( 'LOGGED_IN_SALT',   'J}yuNp@{u9Dv8.TX~#Xl02kPTdt+@u%`j3MsxEl7mB7T@|NX<VjUjTOOP]|n;+I2' );
define( 'NONCE_SALT',       ' {]+v4oyC@]AG]mOQgyzJ!*speUOgiJ[@Lz/P4*=&L*1MJwlsR-f4)H;b._~3%lo' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
