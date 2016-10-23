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
define('DB_NAME', 'webdevblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'rO]CRshJj%W&5!S#P9H(Ir3>8V*7Qyx7%T3YS^.f:U;!+P02Ghs#iP~>CBx}E{d#');
define('SECURE_AUTH_KEY',  'JPgAua!nYZngM>`RZ+oPN3S]mZ~g7xz,Zj(Y{|Y^DhDsl65AGmKV[lk}wljb4bw,');
define('LOGGED_IN_KEY',    '*4fNuAljSP H=-7/g`?-tX<og*dXuP.TCbR?7Y0^Lj`iM4v?I^lQ!rRh2Uc-T0,(');
define('NONCE_KEY',        '4Tw&uso8{Jum{+%<43DAke<n{?8S!u$oz[n5.H;`69xjUN}jgg;JK4vVKaY7N85j');
define('AUTH_SALT',        '}w cwPkpf.NVQ(k5FcJ8FztVP.b?|j(w1l`gvWs7&mDG Mu4MBC]b:>[88iYFV#N');
define('SECURE_AUTH_SALT', '8YT)`/*n jK_GnM>KMDnX>9>YZSw)1>E8Vi8PyIP|j:3nzjsB@?E?KdPCKkFG>wV');
define('LOGGED_IN_SALT',   ';=Qv@Ym~Xzp|k{|MS0ir5>c7jq(U]PCaJbNBg+oDa$o7dVBBG*SOEg#yZ$TcXY0m');
define('NONCE_SALT',       'S_%]B72B8($jkR`uH?g|K]LD:~^|#cX>/zYlU#g2kZ/3)dCgwU{R@{5y6gq=C>ek');

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
