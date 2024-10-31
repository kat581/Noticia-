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
define( 'DB_NAME', 'noticia' );

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
define( 'AUTH_KEY',         'R:|Zn&>~Epp1}4+MoBeVg&y)YpR65eIN@|6pEgg({5@=zlB_1*|Ig_?_^5Z(dv?y' );
define( 'SECURE_AUTH_KEY',  'BqBO4`|YT{TT**4i&^87[xy=S Ey%3[Y^NWP?ZwyAk.vbrXwx64<ke?Y-@e66I%!' );
define( 'LOGGED_IN_KEY',    'hZ;j&BeDoI4_W2P*?|02hX9l9plJGeh~:?yJS!+me>@|Rum8,5}wZBDqmiC@u_*{' );
define( 'NONCE_KEY',        'R.f[vb;,LI#|CpS3bsA0^$llFPUw`.)Z1[Hroya|l[.al(vZG8o~vd*/i.]C2Ybc' );
define( 'AUTH_SALT',        'w;NWeDoP9y?MQA9,/RuF()^84ZI=3cn93iM.O)^ffk!{Q~E;y|M)FooafaJ[sGR$' );
define( 'SECURE_AUTH_SALT', 'uoc#ZBk}WDs0VA4Al7p97!>i~D4#:+(?_p:b/RncJ%n]03>aX#=U;g9PFQpkaCE>' );
define( 'LOGGED_IN_SALT',   '*^iQUgUP:2ytL^CN:23MQ*TrU4z)YQo&|)bPa5>E[t#[ zYU%LyhVQ_32S|.u[5f' );
define( 'NONCE_SALT',       'XHm^4) Y-Iac}5^qPb BQSpinw?)^U?x2=Whz^jV-|?_y{u*;R>W`K+th}c##A;$' );

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
