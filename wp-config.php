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
define('DB_NAME', 'buywowgo_bsc');

/** MySQL database username */
define('DB_USER', 'buywowgo_bsc');

/** MySQL database password */
define('DB_PASSWORD', '^9ji~l3DN3');

/** MySQL hostname */
define('DB_HOST', 'buywowgo.mysql.tools');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '%f4hdRXWG!7QQUFZK5iu9y6YKLy!s%M!oz6PggJX6e@2vf%D@HKsPTue%V@ptA2F');
define('SECURE_AUTH_KEY',  'RDg!O#MQhi8cOoZtU#)d@se*FENSb(@y3vKLt9&d1rqKtXyMdmnWD5mPdfqAioP0');
define('LOGGED_IN_KEY',    'tRWZQ6PxNJgRFe6x#2vwW%y5DajsQoTTjUDzHmlazvSvlaY2Njt%M!LeEVO8lUaA');
define('NONCE_KEY',        'RVp0bKZ)z7aAs%iuknonhIdJC@)awUV!RWX9^P7s!!LBZLLxK*8vRYW3o8CLw4uk');
define('AUTH_SALT',        '03VtBbPU%)OXk&6aOKwzX#V4p^JRc1mTSR74GREZgPoInX^@ydv0AOPlrFjosBSm');
define('SECURE_AUTH_SALT', 'ZdV!QRVgkD4b@tYf5&#LELOIXClW%SHsk1o9Yhmqki4P2H4uJZOE)3S)naLjzt83');
define('LOGGED_IN_SALT',   'ZLVU7NVVa1#lg#(5DERHHL@OgHcVK@Uxd*e(jfJdFpywFEcsHr&B7o%(L^W&PQNe');
define('NONCE_SALT',       'A)GCRB^NflwGmvRimF@R*)&jm5Ov0cvndRqv%DlU#)LkPO8kn7mNADK%90wrz*cA');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
