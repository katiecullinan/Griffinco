<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'A+;EQ}yH|Yq&e-n?(9Bfg[fj 16_^`Cr9`&Sw;z]%{tQ2^qf_J1%(gjbM7U bv!!');
define('SECURE_AUTH_KEY',  'uilf7JN*tG83X|6zhOp_j[$WPAf8:OyXO5ETHyP]VFPY3|=YlT(5gu~*>S!Kc]i*');
define('LOGGED_IN_KEY',    '?hNz[X+`_:tr+]PE}R.C:zSb#SUl(b!+Pz5iYVVfw_.-E*URPa2?LY7jG_FxmY6!');
define('NONCE_KEY',        'V1YiLUL>v,frte[=Rt|c(BE8`M;~1H?-Wo3-:}!_5OS#$+LXQm=HM;>BtOcJR5lQ');
define('AUTH_SALT',        '$j~.s|k4]GL+?&s:_p*l?t.Ku0BdVBEVXWk,!uDKsj9N6>Z?(-Q63gI+Ey`7Y+HD');
define('SECURE_AUTH_SALT', 'vz5%5Yk^jnjtqed$+!<]9rT#m#ci:x)nk-X>NFQ)e4I:%;Jm_`-)Mzq#!F7qzy!+');
define('LOGGED_IN_SALT',   'jjt=pd| OG~HP4KWY>,-TJDS$gMg0f;EbLPmfZ|o8#p5t}H3i!H4!!pe*S-YET9$');
define('NONCE_SALT',       ':W&R]hhks5NQ`$]L}L1@oP Fr$;+eFGsdDKj]G!6V?D?Z}]INQ:WOnJkFl:8(p5k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
