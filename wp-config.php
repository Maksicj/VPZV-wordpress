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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'yT`X_RKi)uCZukrbMrF0SZak4^xtBC%*A~4N0a~ITW,OAm&w?JY.t|(5l%6c]l=~' );
define( 'SECURE_AUTH_KEY',  'TUR)7yDQaCp/h ~Lv=m:G3:Ud[w?5t^</&~GYwl-{@a:{rgC~Vc#]F$Xd^y1B?1u' );
define( 'LOGGED_IN_KEY',    ']MaI@}8Jo{e~&Sby^Ubm$0_r<|J)A]jM63A&zhQ.[_7:(1:)i00o]_FMbVOJ]OWu' );
define( 'NONCE_KEY',        'M$qEYdKF8rl#v~p~T*]Lrj?qIk7@+KaTo|tZ=`[*uq.6y+fr+XTrA3E~:-IeoBI#' );
define( 'AUTH_SALT',        '?^7`7g6F)iq(<nHBF+YypHUA$W|p>B]KG1r^lv2b!)2h-%eTj3Gq!2(+tA37(4Pz' );
define( 'SECURE_AUTH_SALT', 'h8CFqxS6(#_3de@zC!V#b::0xDuFjTHJTAdwc@2NZsr7,!:WJ%dxT+!1oO<{S&6L' );
define( 'LOGGED_IN_SALT',   'Q$A]}F9S6*n6{GXs.EEz5xhTqt[vEHNMj|Nrbj<SW2Bcx~pV%XTTl4*m>+r[17,+' );
define( 'NONCE_SALT',       'R+[*ji<myj^Xz&obI0^4I:WmFx?#8I1Qhd*&|`$fq){KM[>43WQ<+&tTV65uW)cA' );

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
