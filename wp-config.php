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
define( 'DB_NAME', 'wpdb' );

/** Database username */
define( 'DB_USER', 'wpdbuser' );

/** Database password */
define( 'DB_PASSWORD', 'wpdbuser_pass' );

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
define( 'AUTH_KEY',         'bbx5X|[CE>%{SR9QE.2SqR8&~)7N@Al1uwaXd=wL(I**18knR;c`S-/H^ HYSm6x' );
define( 'SECURE_AUTH_KEY',  ';O/Oa%HD|Bt;cmQW3Q|&+n|etCQeNsQjjq04Df#0}#X>TS8QrFP|4<+%?=63s5r1' );
define( 'LOGGED_IN_KEY',    '=bXNp|RL~WTEPL=Po`6b`] M3}!S+M,Dl2(+fD:+vb?%J9S!ZE6kO1pk+P>+A6?3' );
define( 'NONCE_KEY',        'R{mh 4zjtn:Bi%BHaa]j9fufPg_E5I?3y)c?N&Si?IBs&GUmfA6_/gxW%Ia*eycd' );
define( 'AUTH_SALT',        '!@_ Z/ `-NdB,[S2HNn?u~,3NY6l?)wUqGRm%}*oM+YlpK/z0flWAiw&sO6_o7=x' );
define( 'SECURE_AUTH_SALT', 'EmnVSk5@*uNAKzcz,x}(W{i{St*4oeQ/j{gPe[Wi`*EpEO)uzD^Q%^KnWLSH1>|<' );
define( 'LOGGED_IN_SALT',   'd`CyBH*yccV-6]v$x[>?z^%sy1[:._@#)CF/}9V.CXxn#1cc`3igiEXSix@u2Awp' );
define( 'NONCE_SALT',       '}L]t7_f2J$#,&KyK$BbH#mBoA{wE?q@aGiA)X/MEf@X?r?&LD}>IBu`u)9{Zde9}' );

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
