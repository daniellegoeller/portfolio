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


define( 'FS_METHOD', 'direct' );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'S<=r0ox]NR@/i#R?y%x+D1M}Vd-Z09qX_89q>60Q RY&*Cd52Jja/V)~;BUkHks_');
define('SECURE_AUTH_KEY',  'uE>2n;3uttk(l&Va}d26YM+;--0e5Ms<{[W Dl1&bp`x9Zs_?aOe}t*``+44:aa,');
define('LOGGED_IN_KEY',    'I>MfHDIm@B>:V&V>jfz{bt+(/P7wH$j7wv=|!SwB|qe+xNBG-{+OGZS{MY2mRp!u');
define('NONCE_KEY',        '@O1u f(AuQewPt=4>=-HbcTqlM%z+:-sU}(v<~O%t~*`%r|WzZd9(Cq_ICO[N%/%');
define('AUTH_SALT',        'l0t|-7qEW<dZ1_wu0Whp7gbCwqhGrbOx6f}2m ;2F,Yh|!#+?DzMa!?MUEI}N`?E');
define('SECURE_AUTH_SALT', 'J18W2I#EgknsI]X9+we=+a4M(B34pBMY^sJgvD6H^w=+;B+@_0td#-r[h+p>{m|?');
define('LOGGED_IN_SALT',   'M-H,XT[h%`E%/-R-|3A!e!$.V}q~o3!h3es#Hn8eycr*$E5~/kFrOkfFk$A/d+%=');
define('NONCE_SALT',       '^%GpOx %_Yy+IbFdltdE8 vcN?v(?wZgm!k2kVdJU~I11@F*yOnY;|&z~ <R-|$x');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'portfoliowp_';

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
