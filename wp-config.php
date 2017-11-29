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
define('DB_NAME', 'cpstarter');

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
define('AUTH_KEY',         'Hwl5J0U@6hDyk:Qgh>7d|5Il;Xa.ltZ[DR6A`Sy[/r3UlH0f&z/Tpcd/P.>Gcq.J');
define('SECURE_AUTH_KEY',  'IiW[K|C+[N(.T]*{)OOZEvG<@R@Ov;*&TfICltu[Ht]xZS^#=5%#_ThbzS.wMcer');
define('LOGGED_IN_KEY',    'UQ+dh-< ;Ehe6rrLbk`z 0mwKs|<!U}*(xgfHd!@p.NR43ja%7hH8g~Sjqg+Hd^{');
define('NONCE_KEY',        'gtWC]?j}S8q,<xxHJ}qUzH|>r2m2L<8`T?Pq>x&bVUs$|VPAE4d=?DC#GJF%aHwa');
define('AUTH_SALT',        'Uy>+xD?~0XvlJja3Kxj@9iHQf_FKN7I2YT>{q2aYdLlv] wG,-zgYy-SOg6X-4k&');
define('SECURE_AUTH_SALT', 'VzLohL~A_Wom4 U7++NjVGfqs.17azJl?xS(b}>=h93M07<EdPb}7Hn&w=}1pt%>');
define('LOGGED_IN_SALT',   'v#y&j~3ad#}PEUr??{d}auH4{vaooG>U/q~GTX,h0CQ<yF`?TH1n>c!i8pPQO`#a');
define('NONCE_SALT',       '|J?ch7H]*BE%|vq`%k7kgLxErQ0i~/Z5cT,tXbg$nGxpl{./>YW(|x%:Z.Dl`nbF');

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
