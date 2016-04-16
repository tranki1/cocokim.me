<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cl56-a-wordp-cmr');

/** MySQL database username */
define('DB_USER', 'cl56-a-wordp-cmr');

/** MySQL database password */
define('DB_PASSWORD', 'tYt2m/VDR');

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
define('AUTH_KEY',         '^NOWtEXr1N^_mIAYkJ4sikFJgC)SIs^kQ)66luH4tNsg)T-kdXCz61Bae)uv/TjX');
define('SECURE_AUTH_KEY',  '5cDwAfMajL^nmna5LR!a=I2TaCdG9UgnsL8mg=Qp-bjScrcGyyGe7v^tIv935D/8');
define('LOGGED_IN_KEY',    'hQwA5cBO0_Q1af+4TD2oUzd+2)lN3ohY4kv4AVu5H3yIXj4!Iu3L=wai#O)=Y8FI');
define('NONCE_KEY',        '38-Tn1J#=QWuw8gTzexWt6CIc6/4uzfUIEZGbEs-V_0-zsVMrZLfOIJrD4ULpLxr');
define('AUTH_SALT',        'ei_K510k(RN(cQbUSL(Lix67AJ5ayQM(DqP_hZa7=MhH6A=^ggJ/pYlGe_GoA=2T');
define('SECURE_AUTH_SALT', '(UUwXC3IGx2v1Ufw/OM(hJE1HYX3zh/2J9BQKt!l)9Ja/8r)JBhE6/6+V4_S!zAU');
define('LOGGED_IN_SALT',   'IWV!a3^VE+6deLrEZpQvAb-A3xeu/=6QUHn05fvhu2zKk8dDGOY11TtcaTjzV)2L');
define('NONCE_SALT',       'hniJO)4xm3gzCeMO5zX8pfC)ARKQrwt6C5s-I6sSaZuRjO2yzz_cHJ1OH(Uryns!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/**
 *  Change this to true to run multiple blogs on this installation.
 *  Then login as admin and go to Tools -> Network
 */
define('WP_ALLOW_MULTISITE', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* Destination directory for file streaming */
define('WP_TEMP_DIR', ABSPATH . 'wp-content/');

