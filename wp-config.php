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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'xp7koEwv~{N&Sm?w<qC{?Q:<,!Vyr%|IHeE)W8.qACyfX3]7 sN%i}C,w)1/SMr!' );
define( 'SECURE_AUTH_KEY',  'c&O n;-)+*/aNzoZJ1DP!b2rSdOoq?ro7:gpciv%(@&jp6oypJdMxOC91P`713m9' );
define( 'LOGGED_IN_KEY',    'Z3WC`Q|1k,f+-=30B,{U,VjSKSN/laJV669& %3fByt40,x-t@NV|hiwo04GAE9N' );
define( 'NONCE_KEY',        'wwoU|WWtYDI4wKNd|_#/n()j65A=*`:nqXoxcS3{nm!u9sQrgt+V/f`Z@&R.11O1' );
define( 'AUTH_SALT',        'cK>kR#S!K$,tJEjE*6@Aljpq?$O=by[ID=1.EQtpIP8&BV^Vl^Ep#L[6Q/Yn=QzR' );
define( 'SECURE_AUTH_SALT', 'kWD{`aN,JIGC&!o,2K|EPm}z%o@I=7!sLF[3=E+]WxH:IlzOXYN-@X9DnOA(5zUK' );
define( 'LOGGED_IN_SALT',   '4C1|%v()iuVQBEm}_O>xct./#Xu@N]u/WAOg;UoNcw9oDOxS5pekB[>]XT7Ea$FY' );
define( 'NONCE_SALT',       'Q?NQ)0,P~?ojVJ@aExw^8U :Mfp,9hUgl_f=%Fj+b[lJI=v@9[)%Nc>#Y{[eI*;Z' );

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
