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


define('AUTH_KEY',         'JFLif4kjA7WuS7I2nC8dMg3VSbWuE+0b+ioRL2F2Tvgvv8pchlxQi2ReGvW8LbReookKlEIQ/PY2LfC6P07Ntw==');
define('SECURE_AUTH_KEY',  't6mX72aONkxhkhApEOi/Cf6LXzMiaC/lCvzXuIvKLo6yYKNhrkkbzQmdZuO1WTxnOjCtGvPmNhnzHevv0vAMeQ==');
define('LOGGED_IN_KEY',    'AB2IWkZzxJwruvw+SkBbI5CbW47MLj+o1odqhWka/0tVkSLw/lNypJAO0xSDzUi5dYodgLx/dps1I+b+aZbjjQ==');
define('NONCE_KEY',        'tMwd25m4hnyDhOQFGIM5DJvdkCaPNaSFuCmadwyXbA5Lw3vRckI0SeE6itTsaiMjDTrlPhiFF35bowJlaJzVFw==');
define('AUTH_SALT',        'DDGghwJXcLu5hzE3nybvVV2Rh3vd0F1SqNh4QK5mEdzaS+eFrooWGps14Vp+OdDfNgPPVPjW437dUTEWNNeMqw==');
define('SECURE_AUTH_SALT', 'NcV9LI6P2XIlVyxHYPrehjCaDmw0pOKPvKNSMKKk8aw4ctnac9SPmfikCp2tlb0peC7oOKgq+MDcGnwgWUzKig==');
define('LOGGED_IN_SALT',   'Is25uxE/TqBQe2cv4hBKp1vZBYNH1ijPreBrxrACr2hCtkzWUJgIUg39EahIqWbW/+h7JWfnao9cSRJhVWZCzg==');
define('NONCE_SALT',       'h0fatxHPIengvVZNnfsZd8PDPMfl40dEJ9lsrvBEXHMbiKTK/XQh1OqGkY75fRIX+2zAPjrTUzYtZdE9L28eHg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
