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
define( 'DB_NAME', 'singlevehiclegraphics' );

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
define( 'AUTH_KEY',         '`eZx0Yv_M~m<p6Wcdn3z8W 0asZ,mg<J7Zh[/c<o5ePk!}Cv68_|eFSAB[{K5;HZ' );
define( 'SECURE_AUTH_KEY',  'xX_oHZ)LAhPEO>f^#>y6vh,Wr%uE1[n9s$p@_m ^8*o5`(r_nhB3ENM+c6!nDsY`' );
define( 'LOGGED_IN_KEY',    'T-c,c}7~s[&#2A*7f&*/vl;@)P!r-esm6&`>?([]5MvY%~gXXX-UD2=/LwJM;Wj0' );
define( 'NONCE_KEY',        'pthT6:jfI|9AZNgv%o8(|fj#RgcDmpc+x@o?7tITl;6P`ph|]qi.VyqP*,,*5]cl' );
define( 'AUTH_SALT',        'xQKi7A_(kMEi=OzHjmgo[`gp}sErz`2(2HB[#=@{{+IIW$M}jO6d|WX^YLQ$7fQU' );
define( 'SECURE_AUTH_SALT', 'zqUwZvCk eqj51esk429w-sd[zk}=tYw/%hGiUZ URG5D}Y~z?CtnKRZ5|C4qlZS' );
define( 'LOGGED_IN_SALT',   'e72)YOM<Emuc#C?BY36QBp8-@)izq!JFlJd)jwO0dd`(n3+E(*s`HxY.C$X1t;&}' );
define( 'NONCE_SALT',       'm1HIo~0yRGo(2%Lv^^zpCXJ,B|y`&qTNryyNu4axaK=<S%fk!4-%QqTfk[}aga=t' );

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
