<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'f%%dEV58e5uOhpfmv6Yl;);mW_%KJBD|g2v=^piUA6Xa(2^optmml@.b%BG21A>%' );
define( 'SECURE_AUTH_KEY',  '[#_W]gR++ltg30QD]?cnENG+g9uMcQ4^:z<02G,f1a)Heu(<FWN}{u>!`UbqgA2F' );
define( 'LOGGED_IN_KEY',    'F;Kn6}$([f7RiLYVK]o$Wn|#$)+xa#m#6O8rKN_*02T;L~p=(,AVZ=gz`}QJwP h' );
define( 'NONCE_KEY',        ':3&kSTzpp~k!U1S_N(BkD1}!WylUc`4dOM5o)wXH0JH%^^}u[+7$Qx<ty`f2)l!I' );
define( 'AUTH_SALT',        'Hs2]_~^RPuAp5HNiA9*}DzO_ a&{7RiTes)i!m]< sFNp[AX~n+ _nUJ_pl?>.7{' );
define( 'SECURE_AUTH_SALT', '!Ij/5_+3v%O=AgBXx7:Q3)Z5HP7So.0>rSJ<20`J}wEjP/yhLFM$gD$$.d(V{V|<' );
define( 'LOGGED_IN_SALT',   '`x/3?Cvm!*1Xx<j<B]V*h/WbBo_)*kyuONk<jPtEE<>]> 9rJ~VH>!ji)@+){*B?' );
define( 'NONCE_SALT',       'X{Y;WI82+l$^K%vJ7 efy&|]UFu.AtN+:%9@$>KH~K{(d+Q8wqG^ik#w2euzw^Y/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
