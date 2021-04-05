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
define('DB_NAME', 'ouspen_mg');

/** MySQL database username */
define('DB_USER', 'ouspen_mg');

/** MySQL database password */
define('DB_PASSWORD', 'GzkN@I*w');

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
define('AUTH_KEY',         'a[@L/g~e&,T}E1sGxkb6$R/D?Y z]6=MX2-NFdq?06m4*|Cu,_ HYz^j.N2,|_`C');
define('SECURE_AUTH_KEY',  'Rf{rSZ{_x`2:^#[E5()yxSNHAptHBa?3zR3IK!wn5%Z&C$x?yd!waJ/r&e{LAtGy');
define('LOGGED_IN_KEY',    'H6])|3sgoG9Dr)*[-V+>)C!5?Y^8gMi_e_Ieec?C+~O}I4t>c@]%JF/e$!=dPM]G');
define('NONCE_KEY',        '5xezRhKfOf*d:>({iO!>.Fvhlf-@$!pWd3^ TM4lci!@yLru^ZE[K=ofZ$;~yla4');
define('AUTH_SALT',        'YZV#(v9syhwqNAy|DW#7.#fX0^U*Sf5/%H.n8U41E^:Nve4i_?*<c:18ZQg7&11^');
define('SECURE_AUTH_SALT', '%44`}WO!6r76(n|<q%s+Y:qJu3@^w6,QnEzqVnJ[HINi>bjH+s ?RF!dmy.fW%xh');
define('LOGGED_IN_SALT',   'OO*)~>PHp.RyG#575Cq42V9&_Qb8}m6Vu,^I}vy%m/98oE$q 0BVZ+gXMez.?lON');
define('NONCE_SALT',       '?I$A iUe1j?%U-]5#r|B1b~FRCkz<AWX|~L|Lv|@td{sDg-BDmhvf4!YRMV/pw1&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ddrv_';

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


 //Изменяем путь к теме
define( 'WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/source' );
define( 'WP_CONTENT_URL', 'http://mygranat.ru/source');

//Выключаем ревизии
define( 'WP_POST_REVISIONS', false );


/** Contact Form 7 Removing BR tags */
define("WPCF7_AUTOP",false);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
