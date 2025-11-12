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
define( 'DB_NAME', 'strona' );

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
define( 'AUTH_KEY',         '+9csv0f:pMh;eX 1FC I0fx#|rUu#X;uSb7zcu{_[TkwSw[~,r`JExh0#g))N5<Y' );
define( 'SECURE_AUTH_KEY',  'iExr*C>;=u#`BpG{Kz[#Fwi@MUiF#tK.Ao*zwo@@*~b%=exeD8;<&-~OSdy.&<hc' );
define( 'LOGGED_IN_KEY',    'X=gJIlFf1[?4f6,Ioum25MD>z>itS|?lHX>a5fs*D3ZED,DVw)q][HB?+-=WGUYH' );
define( 'NONCE_KEY',        'HOS }Ra:oR]Ba,A<[9a]V^&u:#WN$&Nwm/o825Sx9h2Y`e^eKZJ#J5|6#KJ+xtup' );
define( 'AUTH_SALT',        'QX{wdxFFDT2&ZNTTH+ 7e][zoq64F3vq%ChN}efP@5e`%Gx6bUcINS0(3Nl:m b6' );
define( 'SECURE_AUTH_SALT', '`-hl3xV)y:q4bP}#X2!4{?E{3p0GJpll/l5~}QPj{pz[kd]mXk286HSln6j@A.}$' );
define( 'LOGGED_IN_SALT',   '5z^:zrW#Zi9hYtW$5xE`H:[SQ;s%CH|u#X%1C!05vVcMQbqdQbrp9dci3#>u@o1q' );
define( 'NONCE_SALT',       '0iKJUocH-I1:>BycI Da]SK<)vn*#ocQ!]{U}8XUbJ<=.:;s<[3KSi,fUMJ{&d.G' );

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
