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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pn_test_1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '$@>ud:AeRg$t 8;fvK^2lcxd<jH!#Qmj`7Kw>5iZ*[FR:yU?Tx #i%{R_:LF,pcd' );
define( 'SECURE_AUTH_KEY',  'T|GAu*>&?IUPG1BKnumIgy6o_z !](Rnd,cDaqb:ikl[~.hGJ>/77K!txcV%;>Y@' );
define( 'LOGGED_IN_KEY',    'WGVpbf^|niCx`:nk|yLq04:O6dqrv/fF&I7tPq_t-CyF[,j+)Ser A`C|q{MbWcm' );
define( 'NONCE_KEY',        'tjbGYrU/w{eiYq8Y`@dMHe3(3S>{ 9%/3xz5n2@/RXJPebXIQYi&%$7!Me TLWD*' );
define( 'AUTH_SALT',        'u&cI8H&jxW)vGq5hW%4RI<U_<bM :^ZM^/v(fE2M7klgEh0#7xL(O|}:Jy]u~miq' );
define( 'SECURE_AUTH_SALT', 'A 15XvkhDsd#EK;[$P_5n<L#v;9;%!z*!Mrx!!V#8/mp$rd;z!S3rXa3+(h,Ag[S' );
define( 'LOGGED_IN_SALT',   '_%rV%s/y6l#J!;L2:],_VQyJD-1RSm=Do`D(HE<;*?JI1NvF2)J;Z6X1e(`=4sFn' );
define( 'NONCE_SALT',       '_UzjTL_ww2?-(P5C>dyCXS*@/6rM=E;*xR|quT@PF}d`owQ0 |7+O>Sfv7b |(.w' );

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
