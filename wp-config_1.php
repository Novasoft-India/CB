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
define('DB_NAME', 'coirboard1');

/** MySQL database username */
define('DB_USER', 'coirboard1');

/** MySQL database password */
define('DB_PASSWORD', 'CoirBoard@123');

/** MySQL hostname */
define('DB_HOST', 'coirboard1.db.10440787.hostedresource.com');

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
define('AUTH_KEY',         '4ovr@:[%^HY+tTxu9kBFTjb#2&-PFwZdR&CfYnq)g{^rs!ZD35&ew]3]o.0xwUzY');
define('SECURE_AUTH_KEY',  '4#9+@y6SZT$ &$T|iGG.8Yd-~iBftFM6D3}B|n98Yz13QYtFY6zvMUmrAP_I7__l');
define('LOGGED_IN_KEY',    'F5s4(.TMsmbus[ziiKLHlPp1c2c7KSXi,i!A5d%JYeHg7`x|-TE<}| oTe^`YYz8');
define('NONCE_KEY',        '/#m),AEr%fR{D-r3CtoKy!),:$da@].r$`UAiQd:u?GFa6)u?1-Dzzq1t^UukfC$');
define('AUTH_SALT',        'UKGG:B&C0::>feDJ*9)7X&^BeVg rD&A7K;r%d8pcP>UVEvN$W7;S,=,mNzhRAnm');
define('SECURE_AUTH_SALT', ';KqTI`+9$|2&sah9:wNC{R{]VC1ReLh{*;4_7Q*s(5| >$5IC8n-m^KX6J.UA9(`');
define('LOGGED_IN_SALT',   'v+|2x.a9/ DQMn8hUjKdQ(EGY$ivdN{a}uGIjMPSA0$2A;eM9|@9Y9+:9o,{5Lt ');
define('NONCE_SALT',       'ixGZ5`,o3*:OxdBq!_#/Y!PohV@cxB,wjG!VMJ*q*:SygCIwTPssfyJ9J2nNE?Zd');

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
