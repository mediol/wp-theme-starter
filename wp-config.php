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
define( 'DB_NAME', 'weWpStarter' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         '2cmxcE5mtiIJAhIKLQk3Hr(`&KKX/6&2[Y~J`.F iSrjK)S[9AJ7XR$b*}`B`LDm' );
define( 'SECURE_AUTH_KEY',  'JNU@vC,m~C-Rge+(,1=bnn qE{{i;2x[-<gfD2[md>,)Xe%bTI9Dnab}<SAKIjdR' );
define( 'LOGGED_IN_KEY',    'YZyl^QgB2Cr*|uZ(FFV=gwmdyQA90`F(>e`1I}~%-YVnN2xpvW2l`dm|ZG{#Rhzb' );
define( 'NONCE_KEY',        '#d&G,`n,$G04&.ddAt>6C[]F^RQ&k)MQKRcYWQk%K8kb.R460dy!0sV{n?enIx(9' );
define( 'AUTH_SALT',        'zPy:ms=}$D|hFBjtr_FqIKFd$x|w9q%7, aWl[i7gdVIF1dHG`(O:~W5VU16G*Ac' );
define( 'SECURE_AUTH_SALT', 'C@Yw<,4&~LLdKHvF6H 9J4ZXq/KZ<c W%*Oa_oY]+7kExQ1/nx~c]&onWxz=.D~D' );
define( 'LOGGED_IN_SALT',   'e` p.#^1+Mzml.UQ<7:7wCsEB[5~j`XdVDR-byD7pT7%(pdq`4?G<#X9O^<1~UMA' );
define( 'NONCE_SALT',       '@D8^~QSQ4KAc|wv!`{-n%1-m}e=6Q/&Mdi4%musSxBh+ol9jGFG=|Y.i0y;r@p@p' );

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
