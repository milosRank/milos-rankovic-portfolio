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
define( 'DB_NAME', 'milos_rankovic_portfolio' );

/** Database username */
define( 'DB_USER', 'milos' );

/** Database password */
define( 'DB_PASSWORD', 'milos' );

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
define( 'AUTH_KEY',         'zJR_`!^=ZiZQW$]His-;]_ZZ1^^R$_gRn(Twmq`<.vb^ojWEO.5noine%TP<~eIi' );
define( 'SECURE_AUTH_KEY',  ')3:!|Vi $aHr}~+TF/,8{i3~YEP^r4;Ny!PJs=*wn 8g><ufDd!VM7Ek`MxF!Y5u' );
define( 'LOGGED_IN_KEY',    '@`,pA;%ww&P/`&Fz3nkRH[?|b|;%TYY<BU$Yq92wxzy4i4$0UTeUX?&a6R.--}rH' );
define( 'NONCE_KEY',        'K_yKkqnx(N^m@2s|8wV/0{hu1@Wi)yfah``;Q7=k}71KPdC?)yi0l*zNT8*!:]IH' );
define( 'AUTH_SALT',        'MTsIRG]8s84LJ]6AI_[g1Py4@{TrX]W@.V,5J7P2uSK&rFY&V)GGh4QSf>PVA%*}' );
define( 'SECURE_AUTH_SALT', 'c$*SH<}K<{UlNTG*T9iVU]Um7znr FC{|X-!ydG7ZEoiZ}L6gpue05-*x}U!sH25' );
define( 'LOGGED_IN_SALT',   'O&NzvWG_q{Mq=AKO/_L?6#2s?B,SM.j$43-+m@{^,%R~}dS: z$LQAQ>HU|_9&h>' );
define( 'NONCE_SALT',       'h<?,qyDh33mAHkeY7.B7I0N_[j;i,VM!=>h|y<?{h/s8Z2vwfLa~eMzUDkn{AQC0' );

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
