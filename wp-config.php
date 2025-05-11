<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'Abdulaziz' );

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
define( 'AUTH_KEY',         ':#UWZSnpo(.5|Ae/hGXA+Wwfg?*xI!bAq$y@tKSdj*8,OurF>zp,9Ts?F1gLe UN' );
define( 'SECURE_AUTH_KEY',  '!V7ef2Lh^}RinONFp(f,S057TbfF6cJhPu/$!xEUFJfNB}_{V{G~Ib%&EbT@Dk1[' );
define( 'LOGGED_IN_KEY',    'a=rMqzykR;/NHG D%R;}0w*!4)2kh7oc 9HSG[bb4mp!.Wg). yD/g~[C ~VTD|N' );
define( 'NONCE_KEY',        '6/bO WGdj?l{R8]5D(DcbuLCv%X!Ic+GeyNU;wS.7 CGZ.5[+vU[%M{O0vz2:)km' );
define( 'AUTH_SALT',        '9%dM&-fB%(fao`Tb~ovAYw >xsciPH AU@J2(k<F2j8se[8qA]DtTZ2+}&tjA-4Y' );
define( 'SECURE_AUTH_SALT', 'L2R#,e@M^DF4zr o4A(%N_1t:3&Q@?Ls$f(bt>DKfOuG29z8;,u?tx%<8k0*m[Ob' );
define( 'LOGGED_IN_SALT',   '`3(d9Q69(Y|j<vOf&w9[Lhm3nwcnS>gT_K%xzZ)hRRjgGzFhANwq/}fP5Ze9%)p^' );
define( 'NONCE_SALT',       '~%V!{-;&UoZO6yg8<Cgi+^1(u)Pdy[j.*0]P.AvPPW^l`/{q{[h>P7D]?>u[;RRr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
