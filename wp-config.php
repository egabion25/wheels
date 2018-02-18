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
define('DB_NAME', 'wheels');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '$h!z:%>=9_%=Sow_AjS<yJ$MDWw^,?K5}}512DZ]c&m-3i?y@F>>p_aF>D+H {([');
define('SECURE_AUTH_KEY',  '6>hG8](G%c&TL}/K<@9m7>32Q)no`PX}y[Wl%P2gj_%tb:wm3z;6uqk0WzE2g?&Z');
define('LOGGED_IN_KEY',    ',3H-CF@F]~#BU#XX<OYqG,eFfAx9ADLoU]/1} Fq-X0*ZSYdEW!)cs/ 1nINDvLY');
define('NONCE_KEY',        'F36@4uAe~[NW}06H|t2<Kg:EMXK dtWbf&QcYrdZevf1Fv,)Md/5~=ag^ Tq7)am');
define('AUTH_SALT',        'L9S!bbX11g,s[kR~r].l@p4O5 rzfDTOR[:yWHYK6gU3he;bH7uO,_?]H,)$i&E(');
define('SECURE_AUTH_SALT', 'QoE6o`t-r$1WZaTM{zkIL`h%}{33>V]k:310<#{ar_J4e0OPfaHU0`+lzP&VS_BK');
define('LOGGED_IN_SALT',   'eX^rC-M6*u7?KDR:#STt3Kh$,wTwPuK{K!^M.vz~#>H}TT.)z@_I[]2t1li7l^[-');
define('NONCE_SALT',       '~`LLWr Ltb..*oH;:zcC^G{CcP ],2[:>A)DqWH}T|.<y|lc}b9(T28uH+kg=i4~');

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
