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
define('DB_NAME', 'whc-nature');

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
define('AUTH_KEY',         '{02WLBp{}]X@B-no> ~;taF]w7QTi/6|bJObB^)qj,|!Zr7K75f~?X*WuV_|Pl_M');
define('SECURE_AUTH_KEY',  '%=Hs&-VyD*b,x(H6en;_TjsVWoB+dVZ0AHzWp$23Z=/.?y3GZVJ}:]e>-XxJouai');
define('LOGGED_IN_KEY',    'oH8ky&3<+A,g6J_nVw&)07M!TDlI~5|zkzf}>y;Mzik)]<j?^h^w50A3t:PM)Ch`');
define('NONCE_KEY',        'h<J_JX]N9VsL2:LPh3|,ZvH}a,=>a/G|$nqm}]E~oQ%}~A0gE-%%aMqN=3]R,[LI');
define('AUTH_SALT',        '3QIo-25%j%@#;Yj8^ZEaUr*F:O/Ib-%{v I]K.FQ78Z~Yg3;,>Z)Bq :XBOn0u7X');
define('SECURE_AUTH_SALT', '1z.?yB>2~GpU>`9!k:2mJB$9MgkFT;<O]]d#4|3(IP3VqCKCZjf_.KnRRCtt8$1y');
define('LOGGED_IN_SALT',   ']I#PzWjU~r,66mzOn*,|6gY[ 7#+4YaN^BQZ{ag_J (n? AbEN[9|G}C{R  Y;S_');
define('NONCE_SALT',       'u+e+`ArE4H7dXuwXyU=bZO]rAefiLS;*]VFBgW#oF&c|*4;lcba!|^C:KO/[;Z0B');

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
