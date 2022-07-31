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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'akshit' );

/** Database password */
define( 'DB_PASSWORD', 'akshit' );

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
define( 'AUTH_KEY',         'Toi6P>2`|-h_P=1Kp`+i7<C%{.Xw2_u%o[qC^ X8$[?Ns)LZ4KE$:NZWytD(scKh' );
define( 'SECURE_AUTH_KEY',  '*^;2%%,,(mI]$zD :FHAAZs4Rg$f,F3u)(%7 268M@+_/L`Gl50,&Q2]z+H:YtN@' );
define( 'LOGGED_IN_KEY',    'bO.ZRu9Z:9^w @x|9V7W>t<VY9#h&`;`=6)Oa=}<Cx|Yu;mJ~d/93PHsVP^[G+vU' );
define( 'NONCE_KEY',        '^9w9pEcgy-6dFHEl<vt3Y13m`2_fSGp7GGDh(}ep:Ty>T5.e?(0BUA84@L7sx=[E' );
define( 'AUTH_SALT',        'y%Ka|U/WN+POF$2ox1+>Rr)6`81zdW3r|US0bE%9&*]?&td_i3U1Ui<D;rf^|#R;' );
define( 'SECURE_AUTH_SALT', 'eFzOhoO-MlsQy$H%:;t~MX]A)ElJHBF<en1VR-_S)!sZLs<:;ZF28+<F%J,|ZmA:' );
define( 'LOGGED_IN_SALT',   'IcjM!d->ULp+PGQ{TH&|k~ieCkab 6EF yC-c)H;H%Z-LAA{ZH__b$RcW{yjm_R*' );
define( 'NONCE_SALT',       '+E[<MH|&yPv+CD.:j7s@%!;MEO{~:v3K:2YvWD=:1v$~1}17Muzb4M%su$sT0K^j' );

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

define( 'FS_METHOD', 'direct' );

