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
define('DB_NAME', 'bookactiDBamuo');

/** MySQL database username */
define('DB_USER', 'bookactiDBamuo');

/** MySQL database password */
define('DB_PASSWORD', 'l17uzRXIlr');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'Gk]amPamiu.;tDP9KWlp-#et9~]9ju*{EP{7IXbnyiuE.;DPLXiLXmUgn@^}7v,V');
define('SECURE_AUTH_KEY',  'Fz}J8VB0NFYvkcvj$3>y{,7QI>^3QFcJBUMg$rCZoh-sZwk~5:sl~1[D[C5OGZRGc');
define('LOGGED_IN_KEY',    'Am*xlex]_5#~1KDWO;L9WpiOhatl~TIbyn,$j$u<A3$>B3M3{EbQnfTmey{.q<+2');
define('NONCE_KEY',        'ffyrg@v}|8>!8}JBYR0NFcVogRJczs[!vn,70MF>B3QJfYBUY0>ZSph-1[wo|~1O');
define('AUTH_SALT',        '7nTMfXun,jbyr>$3}y>F7UIC4Rld-sdRoh~1[sl~w:|9[!8:KCZNFcVs!zkcvo|@');
define('SECURE_AUTH_SALT', 'r4NkdwoZRog-0[sh~w:G8[!4:KCZRFcVsg@vgzr>!4}wo!80NG}|C4Rkc1]D5Siph');
define('LOGGED_IN_SALT',   'ny{IA{.6MEbB3QIfUrjUMj$u{^yq<*2PE;<E6PmeI6TMjbyfXum.ykz0>v},BC4R');
define('NONCE_SALT',       '~[ph~x;_91_5:KDWOG8Voh~sdVo|@4:sl_-:KC:!81OGZTLiXum.+m*x{.A2$<E6');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
