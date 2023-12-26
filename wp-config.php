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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'dcpgyP*MakWv;L x(Q4|_]T^R0apgFJyR#v^P)n^;GUB=C1qWms?i{IosE,&Lxz/' );
define( 'SECURE_AUTH_KEY',   'nNk*W`1=7t:DI+iYXY8*m,&<NYz_V:E^e]!i(}a][TZfGJHFz^)Inh!;~Ei[j}l@' );
define( 'LOGGED_IN_KEY',     '|1 :u8%m.I{;rm?st6%~pY:[J;5rtSp6(XI-c5}Q`za8+D.MNFy6>_XQMVZ!3Y#O' );
define( 'NONCE_KEY',         '$cvX%EfPuhN220d%HDxlCoT|:&(PN<+u :$R|yoWCb>cIf}o;%:s7R[f~ tYBs2<' );
define( 'AUTH_SALT',         '3=369P*AN.=CiCmn4NdEkZ,#L4;}d@r)p`<SRTvKz:xP,yO+}[n..QKoWjzU{<9i' );
define( 'SECURE_AUTH_SALT',  ';hDCBu{ugxLhrj(w2r(D9L5lmY~ WcAK&7z7}}HL3CAQ0urq<.:XG3-EQ}C&GoC*' );
define( 'LOGGED_IN_SALT',    'R#&oF7Wr#<vEycfA`EKUXiA#8nzJ-C5MsnrDR`U>.S3naY.$$oCos+j`eNm*tU;/' );
define( 'NONCE_SALT',        '4}Sba0`/Q){4Z2e>u#[Z!I^%Kuwr<<^Z9HekKc9]5#AU@0|0e,yv<kiN`W_#&2)4' );
define( 'WP_CACHE_KEY_SALT', 'wxVg05_62 _K~r+/,%fBQQ/8jVc.-xMVq^@iA&h%Mhdi*ZX-xlX3Qf=ILgZvv`(M' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
