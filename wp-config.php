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
define('DB_NAME', 'trep');

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
define('AUTH_KEY',         '2v9K!7^eJ=yQLf<<])p*_G;L(#d7.F%~ar|O%[<e{Os5zWFrlg#v(roxOw>CUTos');
define('SECURE_AUTH_KEY',  'mc`gPQ,9nSA?I~qjtkN4L0|wN@gy8%Ic>nfMJ4?pPK&G|=O9.k+B_&1osl$ef0xa');
define('LOGGED_IN_KEY',    '+k%q)=Y6I)t81Ig$=A}A1#}7~!16!p~+7loEi)MH0Jwd(tWPDOLT2*CxF! 1y*/r');
define('NONCE_KEY',        'p|M2-`3n-]vfRk.S0gY,u)nD!{ZLc.k;-ab}>A }1d-)[?`<|M]}.4Lb77;e)4`3');
define('AUTH_SALT',        'L@4A,/fnC2`Cw.KO{9$D<FgbEf13A{dU=K;t76zeU3Ky;#V``4*_1St,b`A_K3IE');
define('SECURE_AUTH_SALT', 'w?&]-Bl=wn=taiQPUSuE4g.TV7,b$!^P::c1za7K w0&ij+K_f]>Uea9gziZ|8>9');
define('LOGGED_IN_SALT',   '`d&&hs/hQS8~nk~wR=[:S5d!&ub-u/O.U2Rg{)wFt4s5#U%S,>{q/#fmLBp/?na>');
define('NONCE_SALT',       'W]ifh&dB$Z3VhKt>H#-&AHgQLB?{m352.C)ntF?<P3D-.G_wz?zs] ;2qkLn!Rk$');

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
