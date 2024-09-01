<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'educationwebsite' );

/** Database username */
define( '/** Database username */
define( 'if0_37215549_educationwebsite', 'root' );

/** Database password */
define( 'DB_PASSWORD','WJnKvr79yz ' );

/** Database hostname */
define( 'DB_HOST', 'sql208.infinityfree.com' );
', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'WJnKvr79yz' );

/** Database hostname */
define( 'DB_HOST', 'sql208.infinityfree.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4Mk4 u67v|FSp!x1|&$5[0r,3?i$X ]3@^?>qqzBUMl5?9wUiD$>wBUAA7p6ULia' );
define( 'SECURE_AUTH_KEY',  '!Vl)q+<BDt-AzsZCgE.icIxrMHGp.<N12QoPSYH2sxB*&5s7|(k?6lEtg-q$g%5K' );
define( 'LOGGED_IN_KEY',    'cR7,x#0S>4$N,JRXV^.gG7lr{3tXPoGyFnhIUI s9/aEb`t>?N&N^[ntc91>ir+U' );
define( 'NONCE_KEY',        'WccI))tSg$&[K^Hv_V+`aUtM8bi>tj(uoX0VL+^TM,v)rTZ5rQ}YnQ#,lT!Sryy@' );
define( 'AUTH_SALT',        ' t|]i$WzJz=tkg5z!7p_Pv:1NuEw]P]@[>dpJbe2:<x#nFgt.HSMi)d&5F?.`;ip' );
define( 'SECURE_AUTH_SALT', 'Pr<e<al~2n^U]WG%3I*<=1;/&#h ];C5|W#7{&FVGd}y$%yT+Gca:9G@~6@G{JK:' );
define( 'LOGGED_IN_SALT',   '-pxpNJTs{sqzEy[U{FBFW08I-ymo[F)B/l/?NHz)`WaOX1tH;jzCH3pxKWi1U>pI' );
define( 'NONCE_SALT',       '[rsFGSaO9-|JSpa^Q]{Zgvv>b89Hk ZI)y(MAV>,aF[;^WzKm<2Q*lu|V/cHVSOx' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'edu';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
