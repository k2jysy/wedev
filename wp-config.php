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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wedev');

/** MySQL database username */
define('DB_USER', 'wedev');

/** MySQL database password */
define('DB_PASSWORD', 'qqq');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{gxo60<n02c[}?_z$I/?|9-7iTzTv|0`~I@V3d4Q7FkYfH#}!yvd.kOm% q+,X%$');
define('SECURE_AUTH_KEY',  '-)`%k<rYMxB(|f;O bEGx!NxUX{F|wBc~qwYRFF.|oOgT*Ow8]Xj-VHPT60&->=-');
define('LOGGED_IN_KEY',    'm0#vS*,P|nP7SWt>#]6]Pwz$1ujq.*~A$qPL70U{^5wlgWDzW {F)rlD@fS-Fbi&');
define('NONCE_KEY',        '1n%&%nth|_o*`DiD&fG$&`Y+e_uz3PG6R#NI!)xC}^rCP3-L?aPhE*XnYp6]F Y*');
define('AUTH_SALT',        '/T(DdKt,uo}mkNYO54@#emV9)XMbkbNFE|i>lF:lPVy2>/sq5K29W}3-8|5(*ezo');
define('SECURE_AUTH_SALT', 'xdUY9_3xe=xT5OVP?I2#jdu>&Y+PqzRs|^#=^1T8P4~/eeC!T=qEer%uH|;[L%Zx');
define('LOGGED_IN_SALT',   '<+S3qjJ|/QkM82EB&duB_GEb+qgTiy$Bfqeou+E}Y5UTs^,$92Ebc9}It{N*b}kZ');
define('NONCE_SALT',       'b^u11vy}Bj&y^XAP2}Ao`ysZ0W4x~f#Mk%(@rC^VX8]Y#<%O,HiRncss_s^Vj)u|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
