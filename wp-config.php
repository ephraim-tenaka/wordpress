<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Msf20Wby,_H;sqo-Yv.jOR[W~I&wrl66+^3 }XxIQ/F{*l/Q VGOOaIvVr+`$<SE');
define('SECURE_AUTH_KEY',  '*sRkF6P=noC~n4O9LR+gI2b1/(Ts^53V.PcB_&S93xm|`UuCNAqX)8IKqWj<DEz?');
define('LOGGED_IN_KEY',    '<0|0@c/}mk!lQ+wnClHRsBJ6(p1KSd:8aSMn|U8Dle8CQMMcfZ/p4oOS*T([kn>v');
define('NONCE_KEY',        'c1s$%L{!3O+7#tP*xi(UJ#A=4eOm13COTKT@QAV6N{+?%lF$[G{)NBCKuZo 3w[J');
define('AUTH_SALT',        '64<sSFb{s;B^Hw#4YdY&*_(8`B=xn=>XDHBVD.iF,##?o?^f v_.0X@p%^$[3,)r');
define('SECURE_AUTH_SALT', 'n~ZKnyeKj9i!+RpFbjf+fMc3H*L3/{6hfmP07P#qwIzuoUMo8! 1P!s1it60yLx=');
define('LOGGED_IN_SALT',   '-&~Ff(>F2]$s}QjOL=Z9vjsJTbCDX!nuy/E~/j3t(]0(?5->VzXQf#yf7-tFO_5^');
define('NONCE_SALT',       'NxXtx21DtI04?,5W_uQwGaflLqI+Ti}{QHv)ik<AD.joD9|nRl-aAQ/zg9_%X`;J');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
