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
define('AUTH_KEY',         'Zzo2GBoqopBKpnfiODPCxl5xAA8qAhqyQOhgEP7NQ3mXm1Y4qzzsTEA4Tsy5lw0n8Ed++YjFNer9hdViF9QkcQ==');
define('SECURE_AUTH_KEY',  '+3S9Hk/bA8rG8Z/+n7apslxkUAx11WxVGsPGRLaVadIhR2phWGFmSixkh7a3jPwk0vHRpIHA7gfS2YYYoNiZqg==');
define('LOGGED_IN_KEY',    'd70V2gDDie2QBI2bI9Mma86RsoqeHn3rk1Ky00gph9Th6jQEHxMsmoFZ2lZAwBEiL6+QXyBjON3q9x9YtoXpXQ==');
define('NONCE_KEY',        '2x93SkcxyFM9dWkmh1ZCr3h2pAn146m2YrgOpmFtGxUG5NgBEcWAPcfCFWbmDeFNbLUC8H0rGu0PqvtJZ2wEdw==');
define('AUTH_SALT',        'W4o88oPXz0/JFIj/Xn5SK54mR2pFwzj2dNejhGb5H5Qgle/7wk7Dt54q0dhsMArOjkmC/vFfy/daMHDPcWNTAg==');
define('SECURE_AUTH_SALT', 'qaEN/IPQHswBqY0WZgSSd2yI2ItvLoxnOVV2+Ani8Yu9X6/ToVTMlR2F5MoGvUsY9/VKuan+8cmlnz/iqyq9fQ==');
define('LOGGED_IN_SALT',   'h4mjrBssuaKLWqs/NEx6YhHpTQRWIXw6OhokvPlwDrxoPqHRlnRMTOumw55Iyl5mhp2WZ7OoxxKITbDpg98oVA==');
define('NONCE_SALT',       '/X9J4sbejB2nSJsIyETy3cAr4XKx6349HrntBACu9oscXVoVuWFw7YsOMvZtL1J81AQCKURcKGNk8irUK/shGQ==');

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
