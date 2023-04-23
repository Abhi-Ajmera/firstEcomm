<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'firstecomm' );

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
define( 'AUTH_KEY',         'nqT8J)<ea>+0T&6|Y1.x_l4_zwvE+@N.Z(]-[9uqywX!A_rip{ro-:o`)?fa5>Wd' );
define( 'SECURE_AUTH_KEY',  '=G^@`@ka6]9ml?6umCmHv>o(qD</chZKMQMRY|[/_0=SEU#VX*LZI!7Yb24YM6B9' );
define( 'LOGGED_IN_KEY',    'XIm77<5bGiz0=UnS$*qY`hBmnTNRGgalNLBN@~#:*@qwR;T-~>Ks360zwuVnA[[,' );
define( 'NONCE_KEY',        '$hR>TzB?U9f<FxeNpEjQ 6*t/ghGbKUf90cY^DJ~TvX2!3.()&Kfu>MiY0dAdjkz' );
define( 'AUTH_SALT',        'Kc8tj85osPQB;}/6My{YRUwHV>hLvB6^Z.m.e<f8_XkX!zE+;bL/E8(|;gFmP*Lb' );
define( 'SECURE_AUTH_SALT', 'rt-OfoOW{!;dtto#D(:YM=M$B9_ S:z.$frLtAi-0]:*R|nYJai^*gZG3hEe@*]1' );
define( 'LOGGED_IN_SALT',   'oPeeZS;-RPPa2nIMDH !]byUCub<A:9j[7Fc.?+s8;u_}NE^WcuG2a.v3#$-Z{j@' );
define( 'NONCE_SALT',       'Xcr>)h@U$2CCym>o5zTBijA:-3<:;}?{foh6T9S=/N$_RWR MKMQrkr9g@vX=<}X' );

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
