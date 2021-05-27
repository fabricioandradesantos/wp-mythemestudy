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
 * @link https://codex.wordpress.org/Editing_wp-config.php
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
define('AUTH_KEY',         'WKhOF0oYeqAKIUsuv23F0DS3KMC/4LTCBZzmr5v0p+DRov25Yic4Zb3vYjt5D4KnoovHFGkTj8OdAOBn6eygPg==');
define('SECURE_AUTH_KEY',  '2xM9b60mxQoBoef7PIp5uQ35pr1TFHy1bJWt+rHY1Rzs3zDtWOxI2u2boqlwuwgqRqj2n1laB+28XzBn0g/H0Q==');
define('LOGGED_IN_KEY',    'jqvKV71CdfryQLj60BZAyBP6zcWGSzyNL2hf2nHqCSZBlFCFexhvF03EKCbs7mJh+9Jg9ovpI3i+9ZdsWkpQ6Q==');
define('NONCE_KEY',        'tHqpLT5rft/jIeqCOeBodFbS8SYtVUB2jihmpA9qnULO4lV5nZLP1j/LTsx7/RlB5K+7MsskIWzGHY6AyhsHRw==');
define('AUTH_SALT',        'U+6s7/fw5MUYfVkuBcifs7z9bhuI9XnNTW9mA4thlEf09bs+/OsaqtrLzHOCWB9P4LuglA1u64mddxj0EAaS4w==');
define('SECURE_AUTH_SALT', 'y8zBt9ctoJns1HHLxis2HCnqF+4OU/hIuCYedZEbtM6vbb3bh2Tc4itIOIboTU81xaK7HjX2a4Rz2NpqvpYm2A==');
define('LOGGED_IN_SALT',   'MoDOPate2eOgZdEYxhT5HhXJj4sakuALZAs0+2kyVYmt465bPNcRyES+DEATjOjOtR8NJVdbnsvp8QyiCdbxrQ==');
define('NONCE_SALT',       'StlviOVfrtGWUvMDvzODzyAvPNgYcqAhuT7SC25r/e3+zyc5xVfSfKMsu0f9p9W+lLF9GKRcmdBjwaAqq9RAVw==');

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
