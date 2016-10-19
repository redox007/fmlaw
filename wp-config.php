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
define('DB_NAME', 'fmlaw');

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
define('AUTH_KEY',         'sg75:.F-[>}~F#<PP*bnHdC?D(JNR+Y1%Ri].!r5Z+~xv$$xdOuB?D*28K{zr$a_');
define('SECURE_AUTH_KEY',  'MbN)SafPO_7:p:Aiv;L>02KCWLB=AmZ<9AX{(HVJ46/lCniwn`?hJyU{guq<?=/8');
define('LOGGED_IN_KEY',    'wzyZOQn8VG7b;AP YR/e!78hqqsk9[l`]`Vi3,$h@yf5$)0Xt7SfoqHjc60qxl(L');
define('NONCE_KEY',        '%z<1Aa:0WKR{ePhn3i17PAnA5x}QDk,1L{v,<ujF}4ge`q3%Z}-Nb@ybQNe&7+*-');
define('AUTH_SALT',        '^g|G.ixdrxdS{b+w,b|;lAkf~how&u,::jv6`$tg-rA,P/]@|4Mw+xU1]XyAP<CS');
define('SECURE_AUTH_SALT', ')-= #6QuRisb>N}E,rV8X)?d-0=iiU_4&|+qEhg=mxO2~~_Dl^&OSZ{zBJiC[sG2');
define('LOGGED_IN_SALT',   'sg6:jut6O>QH>qGq~:V4Mr}4j>AzL|slP7#pn{yWQ,5`X~kJ$)6M{uf`HQ|6,!Cf');
define('NONCE_SALT',       '{4St1UtCLb#DI+Fa-P%+`Wl2L&>}4UuS&>6?Y=*q.o*>8^AP(VrmT286T.`N]9a$');

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
