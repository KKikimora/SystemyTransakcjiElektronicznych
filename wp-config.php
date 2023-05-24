<?php

define('FS_METHOD', 'direct');
define('FORCE_SSL_ADMIN', true);

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
define( 'DB_NAME', 'dbs10956314' );

/** Database username */
define( 'DB_USER', 'dbu5489237' );

/** Database password */
define( 'DB_PASSWORD', 'qVOhzfvNhFdkcvQrlscU' );

/** Database hostname */
define( 'DB_HOST', 'db5013048463.hosting-data.io' );

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
define( 'AUTH_KEY',          '.bZ4*Y9}$f{UW,sDX>e7!.k-Q<:~+l`f]0[3Kp+Qtl2O`<l_mM>nS{TBv$cDbrRH' );
define( 'SECURE_AUTH_KEY',   '])^GRlIqE#i0O$,y8}n8lC::e(Q%?I^@=!;=Iyof;cwal9g~?MbNUt&.@z$`xv*}' );
define( 'LOGGED_IN_KEY',     '+Tbx5i_gAc#g+WIQ01&nI1HYMVDzvCX9HDoU20zavLS~uGLKT>@j=]NrX2SeK-<N' );
define( 'NONCE_KEY',         ';giuliFZaWjsW1.,;T]ZC3F.811dSi.v-@%yJMh0TXOf0T^F{Dg3Q}};_a(WS4AR' );
define( 'AUTH_SALT',         '5(wBBc[nDw=4:rE>4dFz5es)lqVlf_d+xW>JvnG5IC9R~0X%V_D2?X6$*fvB]8D5' );
define( 'SECURE_AUTH_SALT',  '-X{%SR!v;CWK*!!(f[BCaS,{TUTkUN4%?)5{E!z%U*_O5)WeK=%%s?#sl}>J`WY^' );
define( 'LOGGED_IN_SALT',    '0^Y{-,8Z<z3auegY>oND86JcR(-[WS{A+Qj}-z@0ZdLO0J~nRX4Ge$&m=$?@zA{w' );
define( 'NONCE_SALT',        ',Y 3pW$iA-7^dHXqA*5*3{:oE^#88X-5%X$,<b3L=4%@DrIewi&f)<8PvFZ2YX9n' );
define( 'WP_CACHE_KEY_SALT', '=bFQYl BC~9~[mUIK{W@%F`~m&n|~14S_YcVNw&693A}n*e`X0GJw6EBR.V/_m{:' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'omtcCDuy';


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
