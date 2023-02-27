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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'PMS' );

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
define( 'AUTH_KEY',         'u#0{YNw%Yx6R$8Yf+>SV:s|*,dBh1y!<@=.u;q]04r-W2w<bO6d}&79pC:s01R]#' );
define( 'SECURE_AUTH_KEY',  '|m/?kzB8H_u==$~o^hwTiz;c$%S[xBNS$TORk@l@(Ff_t)8!0ERVIpF9g1oE`SZN' );
define( 'LOGGED_IN_KEY',    'FLqJ1,#IYcQ?|O+i&,Dnv-t4}PjnhgYUZP!sPbv)6)Zvm<~]0wlWacrAI (M&cE7' );
define( 'NONCE_KEY',        'L%e~H:.U|WC>k;_UrN5azZ%6YktIZ!wOOq?;qM20c1QGi4BFB]G`CEM:Cw#[T/bM' );
define( 'AUTH_SALT',        '}Q8qM:eHPy)HxMnj8&Xn#wXv]:VZrt&9;:8poWqDc<IPfSEKH&FHRCsKb:u>V[uw' );
define( 'SECURE_AUTH_SALT', 'O{~ap3CAs2)+E&W*@>qf&DBZ@WSxgx_34eP3j^.5elk{B&.;T2_[;]=fUpmrfP_)' );
define( 'LOGGED_IN_SALT',   '0EP]Fe8`4^DviQ&@^h51a! z 5A`;tK/*]q/ VkeKZe|n9cra&Ta K/Od $)]OE&' );
define( 'NONCE_SALT',       'R1# [nwopk0?0}M,>h-uv5*1#iHoPA&,/V.l5E/ZW3|~g1mO7or.YVVEe!2*65(N' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
