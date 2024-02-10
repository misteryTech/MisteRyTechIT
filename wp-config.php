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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'MRT' );

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
define( 'AUTH_KEY',         'cW<ut0w WBanWa]Tc~Aak#XiT]hnSC(Xnb0Fu{naRWZI9hS,t$bSl0E@I|uJZEGL' );
define( 'SECURE_AUTH_KEY',  '[#S[2J7c1sBF+YEoO!8.LPh!c973XZjrMU~!@FOR:[X}-FkQ.i^#,%LzRk&}|@o~' );
define( 'LOGGED_IN_KEY',    '>K-nYXhZe<:CeveWIG;Pq7?Q2rSLhJz8@/__]ouFSqL.-mt*=2>B5=C=e!$D.-{5' );
define( 'NONCE_KEY',        'Vg;5sg Q+bb7vfz!1wd8hoMp&N#-Z6%/+NZ&)Puy%%(,.)kAoO_gKnDw[cOIZb^]' );
define( 'AUTH_SALT',        '$E_7C-i5}q&s!6MRr.9<stJJ~b~RCaM;pq&*@<IPN_i9^W8_liW.l`8wUn?n{+S@' );
define( 'SECURE_AUTH_SALT', '^az9H5Ms&p[3GOYo-$t-q.831tX&S&f,:2K{F7xjpE}0@YS3kK5T&y]RqEh5WHN$' );
define( 'LOGGED_IN_SALT',   'LbpdtTh!Z0sLQ)A7Xx()=m{I,A~Hpe-z5Y0&(T>ZZmZ>hg.7p&MwIP%#C?Nat-$Q' );
define( 'NONCE_SALT',       'jN8fVZKB:X<h:UTMd1$&(#jCO0j+s+aJUF>x%^Zs,m>_c#BlnyOD[^#$}wm .](r' );

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
