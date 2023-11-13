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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         'SENf`fCP,M31U`K@hd0dZa@;veLb+{TP,oKiBD(7.TFnjj4g*MN=kjM;XZnv//Lt' );
define( 'SECURE_AUTH_KEY',  'WFm)/<77&hbyC!X.Yg|0xSgTMZB$$%UF7}h@v#8eG{F(~_^1[iFd=&JQMIvD8mKJ' );
define( 'LOGGED_IN_KEY',    'neh;O>J,rnEw1w>/n%JT:JGr%{!q^!K5*5-Uq^.@<i:(g4-r)jK(U|k5l1k]DNH)' );
define( 'NONCE_KEY',        'Nk$7{sQ~?y|pq9*SjKZ[:#b(#1RI{Wb)WuH&Jb9(0Up/`GR,v`#5CM z()!))CLv' );
define( 'AUTH_SALT',        'oS%*4UipUNP]]$0ODnnVauK0.]HCJmV{(1CO2PAMtSb)_mb$;>]1}AVE1GwmUkp=' );
define( 'SECURE_AUTH_SALT', 's4D#Bjl$vJJqoF$1QJ4<Hr}@i6y*|q2YxjFdIYc6F(|e1iAA>O:>x@4stV58MbkP' );
define( 'LOGGED_IN_SALT',   'T^FTx$SZ#+kKPmkK#f;CI8DDIyi6d5tSM&Y+AN/_u,HBp9}[NB?=$Ydh0]bGg9%M' );
define( 'NONCE_SALT',       'wDCWJSNda$lTce5O&9d=if7/mP7~!ZqST0uqY3TTJkh`dGb#}s&^6_dhlSj5~a5B' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp1_';

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
define( 'Wp_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
