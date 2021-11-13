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
define('AUTH_KEY',         '952HKkv4q9Gx8eM7mQnjOc6KiTDgJOoOi2MQdF2Rtpy7uj1+nT0yiqotXyU1qw4/2Sti5fg7/Wfk7fC+H+ZqQw==');
define('SECURE_AUTH_KEY',  'FHJVCy96a3V0hwNk0Ziq/3GLp00Kl7DN7IohaW2+N15b8lhE4shyIBc6crTbUduIc+ZO44W2PMCrvtUmu5Cf9A==');
define('LOGGED_IN_KEY',    'VDAh7RErU4I1DQtjzpHrNRAuLrwNfOfia+1fqMO9d2n8yfOlb37vbzD7UKnZvOXNKEsGr7hYfNbf3HlLUlseGg==');
define('NONCE_KEY',        '1q2tnNuNOCvFbn1mkXiI63Q+SV31+oupoiRBrGFd9P78dUx4XNNNHpVrV/DX/dtiDMugeI9T/jyYdgQ6Bg3ZWg==');
define('AUTH_SALT',        'Kknau9ZBJb7nhnO1nJacu3kO6vYouiLhALIuLS2rorZmOWOtDzG8uwH95yFiVTlvlC3UtTVkwK98xgfFkWIwhw==');
define('SECURE_AUTH_SALT', '2E3gEiEM4E8nja9BtJqGp+cMJIGAG27/PClC+WF0yVQhNVDqn4jRGAa+zSMhZRmgLMTlMAU5mdsBcfLACU8A5A==');
define('LOGGED_IN_SALT',   'AUGomc4ANbEOHsRK8v1ZwjHMt+3Z1KztXSKMvavX28xzrbo6BUBMjTquIFblafSoPQVGdH6xjaustUblSGfsvw==');
define('NONCE_SALT',       'EfWSyncLLFHBRlZ3bYPQG3uZJMiZEs8Y+Jb6OzsDS2sgub9Nbotjj7l5qz4CjHmDEKHOMA9yoRkSf7bp1XD+jA==');

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
