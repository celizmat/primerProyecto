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
define( 'DB_NAME', 'primerproyecto' );

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
define( 'AUTH_KEY',         't:B+<(PNt`IYx^9y{.V~s21zbRB.Y+ ;w7R[Lau(@&*0|mLI=7_*+n)=#e9X}jmh' );
define( 'SECURE_AUTH_KEY',  'k]v+:(%N8+~eun:vn(Bg/R;+pL :Y`(m`VmV,%RHD)Ai&9q0{D$kM6c6{H!?.L&|' );
define( 'LOGGED_IN_KEY',    'Ff[TN5jRP5[wq{^@x^uz(_y_KTS1Wuc1xFBM~2WZ_9F7chGeq%du_7v3U&`foGl$' );
define( 'NONCE_KEY',        'XlFi^1|f%nkC:@>,mJBC1]h9yN5(3%hui9&iBN}b,Qv9}O[{I{<|FOkH_*nnvf;}' );
define( 'AUTH_SALT',        '..{V/es&T^z!{FIqWipY`.7c*},*(E9Qk3p;D=qpc@q~L6M=OfL#hT:J/bl71((4' );
define( 'SECURE_AUTH_SALT', '0$RI~CPMmb,cp7Q2$J*+N@D7+(S(WYM(skz~k1CVCSD}D2!7M+a5Jo)icZ&# ]X1' );
define( 'LOGGED_IN_SALT',   '5M)]|X#+^sDc2t[5?fJ^a3y)-:+v]bM-.|hpmdn+X^&n6@Mic/~plR4*r*Wxa4)P' );
define( 'NONCE_SALT',       '^q9i}LosF_jgw4F6QbF<y*SR2(w^#9FW^Bhd|[76Rix*NoF)In1?x{.?Eb|X]*pA' );

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
