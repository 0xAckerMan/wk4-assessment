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
define( 'DB_NAME', 'wkfour' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'sb+5rja?7B$;v)MnBLVMNLh6FlI~C<_E[(5;~Q|Gx;>@0Td[,)@Seu~z3Hr#Xm:,' );
define( 'SECURE_AUTH_KEY',  '=zbs 0#7heZ(p.%d+*#3t|F52`  I?mRg,e1%K9OqM{Adu&RWSQG!Y6KIw_);`2i' );
define( 'LOGGED_IN_KEY',    'Cm9}LkB#$wP(T=Z*F%/^}N(X89lo{+H]gt~EQtk:ChM<B@mmJLu~5L@itd&gfB|8' );
define( 'NONCE_KEY',        '*w/%^%#5l}5L/d/Ei_t9p=cy#=//tA.v[Q-4OS8k(A_/G|pa6]1fV6M%/dWt^~e(' );
define( 'AUTH_SALT',        '-0%nMB:1FK(j/[1zo&t1NNCej@jvjJS63VN2~7|xoQ=DVr|.{kLQK!my#iYDS5dO' );
define( 'SECURE_AUTH_SALT', 'gdV19@,ix(]rChD>aP%lwt?OEjC8kYa#:?5M2XvA?Dp@|G/>N[moneB}cnjlggoL' );
define( 'LOGGED_IN_SALT',   '8>loGn.t{hE_#sp8@BHlaIZe&][$Wpd8mw|za2nQ|=3b_[P{eiZ?=AF_%gkx&.>U' );
define( 'NONCE_SALT',       'x3<+r;:sVI-LS>y;~z=I<MN%65)rI}w,bsIWL6O+8$e:3^&`z1f}wYx[NkVW?M9G' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wk_';

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
