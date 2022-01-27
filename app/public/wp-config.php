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
define('AUTH_KEY',         'eCJQ76pCI+a93l5pN/hXtBKmcchaK1zAgJaWwnUV43eINp10ujDlMdOOfBvoLnfKd5j0DMA6BrVT2GO0RKRtSw==');
define('SECURE_AUTH_KEY',  'nfURnBliLNfWBdut+ec4q66puRdRz0nhAnz4xLanWyFjtmGaDvqkThum3F9FQpTYOuGsJKQG/iZAoxjyRTv2Dg==');
define('LOGGED_IN_KEY',    'NLeIbXXVumg4xrYhOeFF0qWnXstbTWFATTKawpQWipUeFdLubQ/6ibdLoKhtz5BFVkoKmTrGepMKf4Y2r8O6xw==');
define('NONCE_KEY',        'b1VqqrjKQm8neH2VokI75Ebz17q3ZdxJUvcHWhyN+6rh/DFRrzGHz987PUGKk1N7eNmLIMOBLVTRU5upeQZJig==');
define('AUTH_SALT',        'x1A5C80yXbSihCkhlAba6m6EtfwVz3NECLc5CXSFAe+SFuN7UYQzwTYczZ7dxETocr1jw8J/uze06gHuslRotw==');
define('SECURE_AUTH_SALT', 'LBGAHG6SC9OfL5kVHkAn3QOJdFMIYX44VK38/D3xOKIADir22msdnLrNRAI1OACF+2KcLXmpJB0Wg1rqGf3p5g==');
define('LOGGED_IN_SALT',   'vdlq/tV5aWK+/4uIlIHgql5JKCOwOxh1KBZT4J+h2w16kO0jaAYgzG3QucqN3RJ0C+4RWcC+WMyAYmVnlhuxbg==');
define('NONCE_SALT',       'nc6XC/DcSMY8q03R7uZmGS4RqpkaCFzOHOV2cDzU6XpRI+VvzIRZZdthDAeIHWBwJd66tqw+Ok7GJo/yoZLRAg==');

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
