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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '^*@Dq`4J<|-=tyz:+lX|P$j:APD}1GgIQ$pQ)9m3+(5ob_1XxO~@FP8vHxZ8!T)x' );
define( 'SECURE_AUTH_KEY',   '!z+pnD9vX2eAjIdBaa+Oy53Y98u}]obLtzT5ai3~I]$fbvw#P_.h`d/9OfqYLsOY' );
define( 'LOGGED_IN_KEY',     '7_f49[bYxaw.:<^WvVzwB.LRdk3`m~rI{cL#9tJFQ<ZgWw=tUXXx*p-afU4?}qr0' );
define( 'NONCE_KEY',         'ijD&<(kY6ccZIti+Fh#6.GEW=XcgqNaF@Jk: ]C~X/D~#z=]/}2W&TF=o jwiRs%' );
define( 'AUTH_SALT',         '3dQHzpxKu.1I6u>9Q(K/lH=zk>1sE,i^tHTv`h$[RAV-:9^{H[}G5$Xm<(RTH:)@' );
define( 'SECURE_AUTH_SALT',  '{;j0cjbxH+Ir!6f!SLGW5xBYA5:]q)!6Hk&rp}6y@6_[~BA1tJkDg5<6Q*Q,,Qi3' );
define( 'LOGGED_IN_SALT',    'bjQ4cRUg.D0%/+Oz;gOL{u$Eh~vWV_lyG^^<^>mM<8%`?JO)bJ[R-?I:QS}+5@]+' );
define( 'NONCE_SALT',        'Vfe<}:qUJK_Q$:!dN& X}(d4HIu[bn1>m-9BbzZS41$y1ht|Boc5{VqJd<&ow[kT' );
define( 'WP_CACHE_KEY_SALT', '&p~w[EhBHrp-JK`@z!R)SS0=_16dq%crr7T5 1! 0r1i<,g|lZ=CIA,wDGigYFTP' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
