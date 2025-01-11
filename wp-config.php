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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         'Y#t>;j/Df$ZFXAqL)NM8p}<`f4Q^Y3HIu`Jw6B%@3N} Kx74T7q0G!x[LK64/dsD' );
define( 'SECURE_AUTH_KEY',  'r2f.cG<tc%mfS#|vXsPa0<?Nvys0.[#B(`z} 8-r2;e7#P]5xVm:U00-^Y+5~pj@' );
define( 'LOGGED_IN_KEY',    'Pwu`Xa}ACJ@ =Zh$^ _EOU`m?U,|izQ|=5LeVrdH(WAz2Q1.rB*ZuXA*Ep7y;uS2' );
define( 'NONCE_KEY',        'Y]m4LqU.R~]b-ffqm(gg,y%7L0[MiCws~5o%9q~mjfbB/rT~IT2oxK|#96.Ug>3V' );
define( 'AUTH_SALT',        'iwijg_s81!ndraZmKeeh.=q-w_R{|$Uydd#T6fA9*;@a)mzD5:BxkqN5B{Q4(IKK' );
define( 'SECURE_AUTH_SALT', ')|HJG,O@wukZ+<<+nzh`Lw,X%0k QM4Hj?lf?ek2}>n,FZ1~eo78zcLHBXstOz&>' );
define( 'LOGGED_IN_SALT',   'y5JU[Joeu}mTN%P$2j}1V[^D.lx9zysDZcT*!?tC^,,EGPyv$F0x[PjK}~c! Z2o' );
define( 'NONCE_SALT',       '73&ktHU/eZT@4kIC}Q:MbO%iB[Pd7c6ySYTOeC|**,</H{7?w/Zg+C@+&Bw8w(~:' );

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
