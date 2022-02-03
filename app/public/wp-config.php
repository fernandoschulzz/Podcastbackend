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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Rpn/0bURBGuP9aOf7FZrgGiaGvMxiQSviosgI+SP1/vkP4M6pYVoXHkG0qQZicYLdnEVGMSt4JkFJ5+LcyOVfw==');
define('SECURE_AUTH_KEY',  'WknfQ/694M4HsnCxOc7ZlMz7y9jg4kTRQRE1P4wQ3i+upoIMnlxH9VkmOaF0w3oRXpCKaSWDEQodz3iS6f+Vvg==');
define('LOGGED_IN_KEY',    '09NDnwYD2wH5TZfbNIDopJvcqt1ts8dg0xSXqpBNqY0DE/jZdeDonPdRfQyhk6muKPKHsrOWoG9+XrN/4HzyJw==');
define('NONCE_KEY',        'BuTp2cKLL2UcSZFmxuM0jPWmIBRVuYe11KUhf9xGcrp2yoaOIohidFSqxAhi4bqDvyTfgezpViycZ8RZ3oV+ag==');
define('AUTH_SALT',        'nSH2O1/rpQHYpaMAqzpgGPvARQE9J+3RdeswWcurCDIBhG7gq+MaQRPoXpnB8HjsFxKJMRXajDMuwNUEQOtAgA==');
define('SECURE_AUTH_SALT', 'EsL2QSeuKCS2Yp6GZblrGIlB43QgDRnndNUaXNd+Wc1P9xLdWFJQi2EJJvLxQbzSr63F8XmIWTDYLkSHKbUbIA==');
define('LOGGED_IN_SALT',   'nkdcM0LKIkENZ48ppXClAC++2PUf8Tc8sp5Q9r5IDKPsICpCQ2MrgzKb0LLvi9V4Uj1IBEgwol8WGg+HAG+XQg==');
define('NONCE_SALT',       'OFNg0Fgc8b96TyiQVm8UZ0WEcr5v9FsGuyCKJePyX/GbVoKsH3PmjJ0Cl7pwEfkXelRSAjND7qmGkuXV5xFbbA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
