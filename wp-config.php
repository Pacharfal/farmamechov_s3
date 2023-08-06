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
define( 'DB_NAME', 'farmamechov_s3' );

/** Database username */
define( 'DB_USER', 'Honza' );

/** Database password */
define( 'DB_PASSWORD', 'Fffire666' );

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
define( 'AUTH_KEY',         'avH$zT=e(%2Rt9B+6O@JdQ&33S0{zHT,_ru$yw0^EUQY _J;+lHJ6)xJr)aIl]<s' );
define( 'SECURE_AUTH_KEY',  'E191z9Q9`M:H~,h=p41>Dk+O*|TP&ssCglf}Or$rDrR/Cqw(w4D8v JGaSs2KK1/' );
define( 'LOGGED_IN_KEY',    '&nsDrNtT2|gl~yC[@>Wo,S_*sol^u[vs0I/KEyP]KqY)I[j3E. H`-LLuzSF1qgV' );
define( 'NONCE_KEY',        'qiVTaw?YqB*Hb=BZw{kD4#/m*{Un?]>SfTKD6Ux:EuFaLR3z>D&>*bmGI@ZGdYBz' );
define( 'AUTH_SALT',        '3WU=G[P([g2flDhj7>]bUjCp>Xw|l>~N%_#)/]S&0`q`P;GR_Ae*/)pB%+@_*n]A' );
define( 'SECURE_AUTH_SALT', '.I}`<.hH8S}n#16Bzv8*a>Wp{`@;Tfe ]!) rCD4b*`~0M%|%%I=A2oY1@W#zMjo' );
define( 'LOGGED_IN_SALT',   '-lvpbog2eXwh}1*}P7&h*hUTmt:;DCbN6i NNyElw|gQa):z+-7Bb=&@nag*]o[F' );
define( 'NONCE_SALT',       ']HB$#)=9Fh0CO}eE:-Bh73-B/^) 49pI0 Tj^AOm25{*ald7^Q$Sfq~bgfGU:LUx' );

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
