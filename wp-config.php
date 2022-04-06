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
define( 'DB_NAME', 'enthy' );

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
define( 'AUTH_KEY',         ']O}D/>5N9Vk84X6:aqN^pn1yrug~b RF~>h{}q.I#d.1j$oQ(p @j|4h[#$dP*cE' );
define( 'SECURE_AUTH_KEY',  ';A|aio6p./live4PU7}[C{GJ#X<T2%>p#>Pzn$p%Q*Fo%tJ{Ok#&zw#in^d8Brg[' );
define( 'LOGGED_IN_KEY',    'c!L=8^NC&~{NHsxVPA>Y /-ry_O@KiP f}C%?2+0:YRrFfNJTq#r4ew8e8kvJlMC' );
define( 'NONCE_KEY',        'R,|e@Y:w=koUJ1q/Rn{&Jps`Tip0n`=p8q8iY#yqLEOR`>XU;yq*EM8NIs7bmU1U' );
define( 'AUTH_SALT',        'b:^*x]]-gfpLS@sc:@j1]HzTzp04u}2^KKjM9J1RS `@kha5Oa{|]FPvwIVQwfnT' );
define( 'SECURE_AUTH_SALT', 'b`i#NtP;<@<! ACa6nuqkDSQ&6$D*Oq>p@B%$DOsu=3ux^<.>I=E3y9p-S`%(zH-' );
define( 'LOGGED_IN_SALT',   '>!$)|@0x$<b`tY@s:[98TaNZ78OH%*9AuJ7;/6_+S_aQ2/@yop,GcErL[?syA`xk' );
define( 'NONCE_SALT',       'xt+gU:W- h!~#So}/%`2[uD%BmP0-LNo=%1]pWX:^u`kx4z>Q4}ku^b9-|~Or$K!' );

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
