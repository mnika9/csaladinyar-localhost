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
define( 'DB_NAME', 'csaladinyar-localhost' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '2irK-YI6;czVe-*Z[_#+k|mBIY:lEt=vt[Z}aUF!:Q<T}u.8ALo>-X,Kvci5(rv_' );
define( 'SECURE_AUTH_KEY',  '>_j2.22>G;&psDw}uQ%usvCG#FgVY]]>5!lMJ-tJIXQjaA1A>F`bzRhV30*sakRo' );
define( 'LOGGED_IN_KEY',    '>&i~Rr6fB$A@3KC7uc<;|)P!HRT>fkwaQv2#Glbx`835erZs5Pi=0!>R|Jkoyn,j' );
define( 'NONCE_KEY',        '5q=Z~F&QnT*Q4[T*?e5!U5(|^..%Oa`-g)xEt, .buVm1Pulg%&,eO! {4{Y^Ou]' );
define( 'AUTH_SALT',        'buS1$nG+)E</0G]L?IM*b.=ApE8H>H|F<)6j5jPJ?#C)pwDOzbCGiyL;3iv00f0:' );
define( 'SECURE_AUTH_SALT', '<hPS*O(V(I5sSJy`nCK0%#Seb =cF2Gk=U!.Tq?q yU>Px1&pS,Sv20X]h gq,M ' );
define( 'LOGGED_IN_SALT',   'ND6i|(6%{sDo!&N.GaN_)QDeP;[]qOZu,h@RC4A?B;`cJaZMH~:>-1dn|$uini.z' );
define( 'NONCE_SALT',       '.P_])BSY.k=i^rT9!eYZ27`:u1Q3)N)is|BH@2G:YV/hk-DK8amIf*pAwM3S;]%i' );

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
