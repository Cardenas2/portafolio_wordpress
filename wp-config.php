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
define('DB_NAME', 'portafolio_trabajosvc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ';|xENN9c-z0;y3z]Vd^ hJsB45E].kHmW.04Ko@ JqkB+N[QnaYc/K]FN#t0PnC4');
define('SECURE_AUTH_KEY',  '[?bBkh|t<.sp %=7~w7]!.La}Om[RScoqk{F_$>#D05NRaqF5e7`^{Y)!PNV3Cp`');
define('LOGGED_IN_KEY',    '_g~:R4&|dsZ6wW>qaGl}!#q#Gr*=85kScnpJ<#eK%`6<IY^T*d<;3m56n(q7P9Ha');
define('NONCE_KEY',        'yRfAGRW4o%8Hv)VJVZRx?CEf-cMTw&@*Z)UPG)y)]q}vM8VhR(;-;skQ! kLA =4');
define('AUTH_SALT',        'H~r?0;smr<l+D>|A?%MPZ75FULkL%C]`vsm11{pF30f4}Q^{/^=~jLnPM}4xbN53');
define('SECURE_AUTH_SALT', '}c^I_Vv#Q8wMDpy;#O=J@<t6F!iXBw78BCW[{-XKf!nM^^_K]yL<%f*gmPQc)=51');
define('LOGGED_IN_SALT',   ')]+l=vmeAvQ;C$web)G!x$cAlf-6m@FPbxGJRJ.sA{H>4M7dX,bk0<|u~CzsfVB*');
define('NONCE_SALT',       'g&69I/8]0KZEErc3h1K{p=Gx@L/:-XS+^R5|% P1GiO4m<tm9PW>L6?T(H*(8aA3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'va_';

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
define('WP_DEBUG', true);
define( 'WP_DEBUG_DISPLAY', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
