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
define('DB_NAME', 'gmp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'MfI9RT8uTmjedOSLom4sTpn94Jn51xam1eLmIPkesWTO6PvamVQFoASALjFE7toI');
define('SECURE_AUTH_KEY',  'yii6LH7SsAbVn9EKFjaKDbEiTCJxKFtQbcLEk9HN92t9aLyvNNqFiwN1D1Y4p3ht');
define('LOGGED_IN_KEY',    'jWjjiyMQAkg2WIA1EqCNLbLdzc5Z1382PBv3dFETLSSJHj8oCBDsq5mc9UklRIsG');
define('NONCE_KEY',        'QiABmSjcqTusUXMjl3hTHU4nqQIeJGbwTTnSqyso9ZwTTCgYV5EHttsBj0Cn9Foj');
define('AUTH_SALT',        '3aFeRaIrF6KwlbdVpT1eujXNsVF5RKEfo2JtPh1JwpGxP1kWSc2vBVPn0FYMJECk');
define('SECURE_AUTH_SALT', 'ZPHx25iMF8cC9pTUwhCnW3OUH0ygPMbX14gxIUm755wDCjYUYIIB0u6jtlkosaUP');
define('LOGGED_IN_SALT',   '4vXbdFrQF9H7imXljsTOcwVPpL1zk8VufdXJlFPRNonvS0cIfFRW25VjLd5h8OQ4');
define('NONCE_SALT',       '6Mz96UIECOsOU2fIwzs8op9YGfvXnVgMXBM9wf7CFsWhkEN7zBbBSGXR6Eo30Cg9');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
