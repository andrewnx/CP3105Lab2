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
define( 'DB_NAME', 'CP3105Lab2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'gZqHa9lON85cFW5u3lLeTovv57GI7Rze9jONdZu5QU7JhUXOojWmLtrArXY4zDVu' );
define( 'SECURE_AUTH_KEY',  '9Hd7uPYTuQ6FmSd0JqVcYLqXCZDwngJ3zCqOOILwnaaQypQ4JkXorSebbEE8TXx6' );
define( 'LOGGED_IN_KEY',    'IVWSeI36IGAM8QgbmQ7RJg3IFFz8APTkhzcbQYiSTcyO42QdDI00V2QAIrK44MG2' );
define( 'NONCE_KEY',        'bPimm1IrITuwNVoJbD62Ugi43MnoYBnHmzavit4LoNQuTzkUMGK2KJHAhwnPsIhs' );
define( 'AUTH_SALT',        'dMFCclw37UC7DXErXMqv7VPz77c0xZAxioP9a1Ex7HR1UQFpPjwPk01CX3Np0Vzo' );
define( 'SECURE_AUTH_SALT', 'UvpB9a7SuIh1HAplWqggj3dTEbtu7aK1fNd4o6LgCOOGFLiWxeE2xoG6e9KImUSd' );
define( 'LOGGED_IN_SALT',   'Z1BvfoEqz33EN4cmMliPqwglm3TlzZATzvgGLnoyazwNQBj2rcenBljaGRLjuicd' );
define( 'NONCE_SALT',       'pOc7l7C6bWKfzHjD9lS6ZKbmJg9ZyP7235kt54W4KTrBc76iIEhuMUONBUYNuVou' );

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
