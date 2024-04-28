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
define( 'AUTH_KEY',          '(9M3/2XIZyF*FW+bgyOKZsW=fX6FNIzS{gleiPj=Ta([7>FtmGzN{ByW9JT1aBSu' );
define( 'SECURE_AUTH_KEY',   '6wvXj$gtj]z;#xFlzV:Ch2|5oyUMu+hPNsVwX:BztBq%V#fCx Y|[TBR@)8gLiV4' );
define( 'LOGGED_IN_KEY',     'lJ0o4}IS;D$gBF^7O;G?qETcy|6UL`%b fb`u5NHqU/e,KI(co3@X,0,iX:TK|S]' );
define( 'NONCE_KEY',         'k0oBS-${L@,Q8_f#}h[+}ca5sOxEr&JfjqXZ@e7)#,j2Vo}L!Hnto^8k|]^(e/ID' );
define( 'AUTH_SALT',         '4>+72$)brA!^[LB5:xDI^7N257`aFu<-iKePLC>tX~T])455XW#V47TZHs8*x|:1' );
define( 'SECURE_AUTH_SALT',  '4yJ+sq)jm|RTBH,.M<X&n~{t~##(ObJ1D<l7`&@5Cf9`v1ilEU`]z. K:JzJ%c;(' );
define( 'LOGGED_IN_SALT',    '>Vk^.s*[YG*$Gu6PrEyd*YOl6tGa|t)&R6{9=.d1eA7Vn@4Y_CQn:sx(Pn`mx2JW' );
define( 'NONCE_SALT',        'i$[f6KB8XzPDq$}3>E/}tz~8iaq;!=y8PSSEh?%HM7v**=)&?23qN ?L$T[()y7g' );
define( 'WP_CACHE_KEY_SALT', 'C.9`=pS8#N+gAf>sJZw1?<%F;hM&=[>8a5U)N,xqlsenp7nj<sU1v<M;=0u>krJJ' );


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
