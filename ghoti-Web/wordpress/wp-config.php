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
define('DB_NAME', 'gea');

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
define('AUTH_KEY',         ']Tx,&^^yWx,UXF8*s)U|`0/Vx;L?nPV_Mo+:Ykq{G,eni0sX09G+()@U<HnL#~i.');
define('SECURE_AUTH_KEY',  '++7M=DzBbS0R=W M}yH8xsm_Rgl8eKTM:P$/-P8{HP?-,K+vY+{f+8qB])_^;z$6');
define('LOGGED_IN_KEY',    'wNy}aY4v>#d&U+4G8xz>k_`}n%- B~QdI$Q93D<8E(ErU5k)~EX@B(nT+9$gcM/~');
define('NONCE_KEY',        '2IpZhjQ)m2>sI%7kW-Sgb+;t7u^kjg4w.V73?YzM34KrP6B9QD=0k0&kn(`Ds9.B');
define('AUTH_SALT',        'iTD|G4-B`!GUO++o-?6o~a+A;1|*~!+geO,f:=6<V z|9AKG&s}?Af*Oy6X>e#vo');
define('SECURE_AUTH_SALT', '`d}_E{^[D46qDlz+U(&+<O*4JE?+@e3]X1ou@#0H%+$HHQUGOr!/9R_iMNyK}}7`');
define('LOGGED_IN_SALT',   '+E^LV.dte(Va()ZqMkJ8AL+Tr.W;J1kJ[t^-&@pR-/R?V*m_%=+w)%.WjUOB?-:[');
define('NONCE_SALT',       ':%mdhO+FEKMte8[&++oVEm|]O4r[*/$fSbRnk{/Fk*9m9qvY+e}+_]AsVw~o)Rl9');

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
