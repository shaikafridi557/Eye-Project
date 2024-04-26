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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '$ftGDYd,2w&`1rx-qAD.F[?_q&K{HstAavDW1YjU:H:OOE}!!j`.,$nL&3JUp7*s' );
define( 'SECURE_AUTH_KEY',  '2(uq8F/_4zzz%Cl!@GOCzQR9Ztce[K7(V*qTfKxBQS7U/+y:u.)1I@0Y<?EB15D0' );
define( 'LOGGED_IN_KEY',    '(F~q6tVf{G/R6*NGBk^JJW4tTA154#D|:<].<,Q>r:l<FWko1CWQ4`:kVNX}W2}o' );
define( 'NONCE_KEY',        'q@#D,A$gs i|vfsg)=sMnTM8Ib)#8dXsDw4H4G[XF$l,=.5{dqv3&,b 4WX+|@KE' );
define( 'AUTH_SALT',        '38?birZ F#P0GFa0A#lN[;2L&.OefHzCF$nP`wR3=sAhKAE[p9JlOP3I=s9J[F=o' );
define( 'SECURE_AUTH_SALT', '`dL7dAw,Q2qN@-2Pa;QEE2V&5h_Af,?BNDS~bc]A$HZ2Osy[5OKRTr)4 z{r+U_o' );
define( 'LOGGED_IN_SALT',   'w2yY!]TO6)wNwRY5>B>yh[{(j>??Imyxv~7F<8HEwQdwwz7g.nV#CT#!=(qj}N*n' );
define( 'NONCE_SALT',       '@D[@IDB[x^s*{)EqK`$/o^lsLPM0<.4uxb58ShU;{!7tW]&Kzh-Oaeiua)=_C2HK' );

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
