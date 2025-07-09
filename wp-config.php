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
define( 'DB_NAME', 'childhood' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         '-M&(kC@<xYO|-3hRPa.Qy$yc#SP])u-Xl%~V^Unqc?&pjofS)_qNq,pM|j*6=~rl' );
define( 'SECURE_AUTH_KEY',  'ZET+/[xIrVMz77bT{SbB93(ld?(Z;7!:K7oE16 dd$V*wHydj}*1UpNDMO2.{v~ ' );
define( 'LOGGED_IN_KEY',    'L<(]{S^`hGpS=&Cmq&8pN:ltAaMtRjkPkJc#|DV^oxOO!Z/Sq64Qh!Q(v:sHm!D=' );
define( 'NONCE_KEY',        'P8C<D{(U!5(Fi4.!0s}j{f<oozjM2!imh$|7BBzDb2(:?V+[{riG>4W#%tS<6S9K' );
define( 'AUTH_SALT',        ']KZ_IZo?]~BB-mUJ.x;8#[b2wJQtz=!O$:(g?=F&CK6;(2[,N=VzJ,,PH+hBM}=k' );
define( 'SECURE_AUTH_SALT', 'Up 9}w9Z[f35gb,8x;$qg#:boljz>< Nut1a3veS1wE#6UhtmK~*9+d=Pq(aM5Af' );
define( 'LOGGED_IN_SALT',   'w|G.O7AB:4L|FY3QfqU>S]]*/Ed%[t^7J]ojiM`g]eC8=6B|:6{d7Bl7-6:Zs:Ds' );
define( 'NONCE_SALT',       '#7}!AErGQ?[[^pp&=2:K&BUH.3]J]J,Ku~s$tTiZjPM[%O_G-Ilx%~;u)kvX8ZO}' );

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
