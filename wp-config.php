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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpDB' );

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
define( 'AUTH_KEY',         '`d5L%05jAr*%3Tiiv!#)`S)hu_l8Dda@3#,(,qv7_B.,0wxz52(9d*@{?;u3T?3;' );
define( 'SECURE_AUTH_KEY',  '@UA!N4e:X;2L!Tb_st.0&`5!2kH7fil#qN!a&_`yC $EFmLgA!(?L)07yu}<ch~p' );
define( 'LOGGED_IN_KEY',    ';S3-PH6Wsjt;2M>xV_$br1U[ADWCu=.g@B^q~L#?hgJ ^/@H|lxHbz_5$iyh(AHQ' );
define( 'NONCE_KEY',        '_-+[6(!r|8y5&V6hxG:jR:<dR`m.bhp-bROpQCqIIsssQ@.$Ndzjg-=}c;(/2[oR' );
define( 'AUTH_SALT',        ';Xe$u(^sp@pB84=(s4ai~KI_4YV#a$.@{o!#$8Bl@i9q/kd)|DlBxeu054V+151`' );
define( 'SECURE_AUTH_SALT', 'ex-2i4`^m_ejhOym#Fx)f}Sw>f@TT<$etoSxd[tGo9EMhx0$]Qv2(B`td[DYD+ZF' );
define( 'LOGGED_IN_SALT',   'bP99#`Il+n&%>-J/GFj+.lb7lDDH$kDx7k^/Tj*-)06]c#+s)c+c_OL2WFB{=eB+' );
define( 'NONCE_SALT',       'mygWxqGRA[+FdMP6MNWkIJt=(QF&@s(%QN$T7?j& 9Fg0=Hs{ymfQ},yN0r+b%+}' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
