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
define('DB_NAME', 'ehaalo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '/[%h{c8H:T:2G533Qg:Mr!(<F|t^Vu(N[WA-74.YW7c;o}Y!so-(Z|Vxj$>Uo-F=');
define('SECURE_AUTH_KEY',  '9A+cWzeG.-`ytW2uQoGig=}%h50-4DS*WnneW-miA?dL:aG8GR57t`wlQ}XW}2`Y');
define('LOGGED_IN_KEY',    't-hzZ2r3>6Fr zd[-A55?.)%v SA(#UL//f@j`N]oE6pihnd_K(@;C`I }TdRk^b');
define('NONCE_KEY',        'yqB8YLqA$E}?5}6+HsJ[1]{k=C/{weuo:U:3RRg:NIGl&nx5% Xi0LLD )-(}UAh');
define('AUTH_SALT',        '0{R#M3Z&mfrx%*&+>#>>l@n>&X+^:~kY/#fe0VA:`84(,-Gz={  4Z87&*^QdhP~');
define('SECURE_AUTH_SALT', 's,,`Y>[A?@:@v(EKxI%r-KEfT^UYt47.@d~|H?Xz?}<:|<i7wo`2wf9PQsR8]nNY');
define('LOGGED_IN_SALT',   '8jvr`>#9U8J>$[hqkMYA1<Vy-K:D4i1+h~]^0@CFho~@hm+2fq:qvKzFz-GxnZ?^');
define('NONCE_SALT',       'PGKWDLjAR&@Ubdrr/9H#)4*/^,6`p;ws`d}n-H=$rSPLvWXSv-PklJatb>nL=!a;');

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
