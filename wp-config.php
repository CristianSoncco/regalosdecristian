<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'regaloscristian' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
 /*metodo de seguridad de wp.
 en:
 http://api.wordpress.org/secret-key/1.1/salt
 */
	define('AUTH_KEY',         '}-:F(G;o9n LsNT):7i1W4Zx  %-P$,)t.5W`iQ8V3s=b7K>LP{-p]/,5M=K|rg&');
	define('SECURE_AUTH_KEY',  'kV%9-a8|Ty]ac`!Gzp}87>hA10M `1ZLKyTxso.(6|f|%$HB}Gw/3|moOeiYwpAU');
	define('LOGGED_IN_KEY',    'pG#Zt~m-U=&l(5,:,rU[#wP|TzWdYi:0$Zeo:KM/eTH0J2hOrhkb`L) 8pZLLBJ9');
	define('NONCE_KEY',        ']XW145&+V>ckPW? Y:@IyYloKfd6HY6A@X0CLP;A,m[va-95zV/^0.a?Se`,D-=.');
	define('AUTH_SALT',        '/L-X!P+}3;&pm+VoSBAvoP;`P~_- ^SmP2/n,#7Z]{2_o*Q/g!)*9Cu1+4KUfs)z');
	define('SECURE_AUTH_SALT', 'obm7:a ;,iz0=,%gAA*TN7fS,yArShi7w`#n[OYLY6],IWwxlNxjTyCA?<<GRjk<');
	define('LOGGED_IN_SALT',   'yod6I SH;:`BSq_<bcBHv3DS9>*YOKiybF-[_<ei@nJn)C .Q}sm:OgMRGm$fuLH');
	define('NONCE_SALT',       'hNe>~-JtA0!|JV}ih!m*dSrR-WE)3Xx$vv,80MpaMAXpHcgWeNda}]1Z>F&YgJpK');
/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
