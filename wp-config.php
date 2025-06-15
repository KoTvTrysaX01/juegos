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
define( 'DB_NAME', 'juegos_new' );

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
define( 'AUTH_KEY',         'Ut!*@}{{GlfjfIHtCbhRAjms5OP7.Hc8lPEIJl:|l4a*c97(,E~C<%J2N~x$I5~z' );
define( 'SECURE_AUTH_KEY',  'AJ4w[9MGSzQ8%N=y^ah)]z_RPUE<w{rWH+IT#C2p&>TLNf8 98C,5hX[|PG+&RsI' );
define( 'LOGGED_IN_KEY',    '!M8<WX=z4wr$Z`DAEr1B![.ZZOF`lOP;</k}Sna*]k._?I&Dj7jX4Ww12_(4K^x@' );
define( 'NONCE_KEY',        '`CB10(#hx%9I7 fL<?Dm@2ZK{Iy68n=jQi&]j+TU}H.oGgQu:z,=37nf6 46(nNu' );
define( 'AUTH_SALT',        ' !18nK^ZV lv}SN:@7eKJPZvLCE;jIr}<D}V&It]PXPz..>?_@Wyeafs.JkThjk%' );
define( 'SECURE_AUTH_SALT', '9Xmnx5+W!Sa@A2F+C]8kQ$f&JPno2gmKs^<=2N-FA~LNWBD5]tMk?:kO7?gyXNkQ' );
define( 'LOGGED_IN_SALT',   'L^w;g7bH(]kL;B??I$ 8-KiyC&lX8/p0UyX1k_nJL3GLw[Z/6vg%b@)r_-^cy:OL' );
define( 'NONCE_SALT',       '3B?G)*0Tr<;,FFgR*?rT%Grbk Ry&)~Ot>BL72O@G,;*,|Oad9GTsdwH(?x<X[#A' );

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
