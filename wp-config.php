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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'xXY3fx/e+rQN42Td6+yMHxa2V8DMgj/NaM+BFnHOti6TQDkxtL/2g7PoJhpYlFlekEntc0PyRf45Hk0Iw3KcwQ==');
define('SECURE_AUTH_KEY',  'dKVHfeFLXrPP7Ah9KLCDogjSI0+9GOdqWIVlXEOloP3oFZ5yGA74Gnjkg2FA0pMOzEZt4wd5XL/Y1kgY4CXfAQ==');
define('LOGGED_IN_KEY',    '0/fT3CYrgbyKEuwIMJlpwD4uKkhtm54380R++dUpnWu379/knCFiqq3aM9r8oqB0rKmxy74awlk1VDv2opsaOw==');
define('NONCE_KEY',        'IE020C/n36aaayuMMDzaqhDDWLmTAKurjjjJmvmZcbSYrVH3nikWvHnZBMO39IaTtpehbKxVtCiAspUdiFJZOg==');
define('AUTH_SALT',        'FCipGOs4LxB8vQT1aqa/YnYwnFQQrgr4wW8zHDBiWJUSrLd4p284s2HZ80V66Qyw4Ga5hkk3cKX+fznzVoHZNQ==');
define('SECURE_AUTH_SALT', 'W+JOzWnH9ImZHjSE+Y4fbfdURWgbPXF9iMBlESu2XFUZnmDXXRKjWaGs4mxWRbWmPrwqTvxxYlg9BR/Yz7NCLA==');
define('LOGGED_IN_SALT',   'ev8TVX/il0Tg639aYYLDrecdkAGAEOXfYGvoofGkUNAWDtYFFQjB8tuun1au8F0rCUoPokZj/7ySyg0hio8tmQ==');
define('NONCE_SALT',       '6AhDv0sBjmQYfjB5bKH+xC+fwLHBm3CJWLdWD4rgD8p+SYyxXIhhRdgF7WYf6KuYsuE1TTlHGVFk4v3bDIyfFw==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
