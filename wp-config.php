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
define('DB_NAME', 'saho');

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
define('AUTH_KEY',         '$Q]iosfBy/b#*Sz)SRMd{* 7)+`n9l`0/;0]CVug+[Ac*4(<z~%3dn6!J*.KjVOr');
define('SECURE_AUTH_KEY',  'C`SB*S1}tl.!)4v?+jAD&Vd&BpFFq.3,4f0#:Y^_gjnn)XeOs*lRj`.h/aeF.+D:');
define('LOGGED_IN_KEY',    'y[i{YL=AF$v~tqX.]1mh|{I& @&ttg OXN8?$9-iW768t@E_qIBIcSXD)g#<|n}#');
define('NONCE_KEY',        'j-X?`EWRE:f=7NLj)UTiIIS_vG~7ur8WM^9Y[:X/W&HZ&ohEIgQ%G3=OXOeJLqM~');
define('AUTH_SALT',        'jg++*&[Rw ]JnU9%YR;<-2mDQMm0&8/*@,c(p&Vs-,)1 7_]7m@nLFt}dq0eOfO&');
define('SECURE_AUTH_SALT', 'RhDQc-F*6;GmT+i@[nrg7.fs9P>_jxB E/UgZ#`!VBxLA;WjGIbTBRwH=T!$_I]D');
define('LOGGED_IN_SALT',   '4Kjt{)Cn5B:l:ZoLcxY`:_10.oC0:,>p~KCm:>Zjl^}Ks73rl?3KOVIz+R{7V)cn');
define('NONCE_SALT',       'zrldw+Z+IDOaJ@p,{8UW|^)_JE_2Qx ?B*QW#y[8iAe{ip<*~$bB* Lp4&`]|2)-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'iweb_';

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
