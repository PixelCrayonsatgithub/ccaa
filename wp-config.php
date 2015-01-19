<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ccaa');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'q5/;0{s*<r)_lt^xcL?S;+A92Iv}|LSKM}8rAc vL$$Ajpg6KU/^;|YrVSy`p|lp');
define('SECURE_AUTH_KEY',  'CZL$+r,y@+s E0T{X|5mTh=<X~fM;A:V&h)rDk7s`%0o{R+-zqY|s~b{dUz|k-w5');
define('LOGGED_IN_KEY',    ', 5t|3Pb_|H~uf&B Z5Opc][*+x4Gc&BGJSGyDj-9FL<<X6a8;?Y7Jonl>1>S2]u');
define('NONCE_KEY',        '3-XFGfsK[eF]hXCJ:ib~P$-#U=wWE*xVM|w=QB<_?{Y-`@(7>;edo8l/]%5>Vp8B');
define('AUTH_SALT',        '*s%]wmL}jk=7faL-aAlJr1^d77>.WY__BJ2^ ;=XY=@c6-WoS7=G5/Ok|!w3ZdQh');
define('SECURE_AUTH_SALT', '@;fQlmG)oDQ9$*K~e7BLY|c;LNUoJyn(nLSa^6[O6NXg>dicLi2v19ru K`e)z:2');
define('LOGGED_IN_SALT',   'aKrL$|a/*,^ePK1P?r~ZU6Md<~8<wDYJU.*+>SDe,G>Y1,+V,n7D:]EG%MT_hkrd');
define('NONCE_SALT',       'X4I~WVf7Vfb|f(Xc?mc#pS|aXWI-{G?gH6|@VJ:{~h!|5M[$_:@:23RND.:.>H!|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
