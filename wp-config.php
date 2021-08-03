<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'sqfREUDxmk7bkly37k01BdW9Is0dlJbTCgyxmOjKxIUrDHeNh7vsbMhNp5pcNfaB' );
define( 'SECURE_AUTH_KEY',  'LDYK3f87ofuRwk3uf5EumTqNUw55XZYrpjYLbyW0W7VZ5Xi4KE7Kg4EFS97JNqtM' );
define( 'LOGGED_IN_KEY',    'SSDd3Iyp7evY517cHnPLfjnj8MjsQ3LEIrbSDFoQllP7ZD8Az7ObTaTqSC6xGhsb' );
define( 'NONCE_KEY',        '8qGYCMly3P7tIy7pXievIfGgZAG0yTeKGvc4FxD1K1OvAmrA0X8v0ISBRPyvj1Z7' );
define( 'AUTH_SALT',        'stJVpMGk8pSKELOtzrhmCNKMlNoADmG2T3PNTerxaKmCqnoXylmg0mWPAkRP1UGV' );
define( 'SECURE_AUTH_SALT', 'WFveb1d0thC1s5HGqD75fILAyG1UYQuV0Zt76BeFBhwAldIWDZRpIPsQxZh89qiR' );
define( 'LOGGED_IN_SALT',   'xliKabiCY7w4z2gKD3ATkfxWfZXYFVh1FpJXtOAa3SegwmGgxbiX1m2UdXyLk86H' );
define( 'NONCE_SALT',       'ouaUIaXYYPYtCXWqT733IEC2svVfrQ6BTbPtptGKuHD6snwFR2zNvaNa7OpxGjlb' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
