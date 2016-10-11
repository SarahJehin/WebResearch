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
define('DB_NAME', 'new_tech_wordpress_ml');

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
define('AUTH_KEY',         '?#%w!%M OQ<}(o_]ej|GNQk^X|g(&i+wav&(!DiuThI0fB.eb5|,`{ IgKE:5||)');
define('SECURE_AUTH_KEY',  '^Ndc)7$BH>Xbf4K-mPOMyvj@Q?|vl>;(euRz/g=rt.]85=/&r^HI>TJZj1bMnbk/');
define('LOGGED_IN_KEY',    '4vmP7~VjYe;/T2)w1^`V1?B#GoE<9ds2$/4$b{VN1Qu_<XP/f:o@k>snhh9Lm|q|');
define('NONCE_KEY',        '`X-#L1oAyiy1B:u-)#_)8Jr*fR#@l>5?No^vVXqIw_w+9WLY4TTj+=e:NX=yB]HO');
define('AUTH_SALT',        'ExF $BQM(+}Q/9T`Cj,<~}D]YJOuv(g>I#6lt9;I58dN|o>X]xB_/-rCpUP5f}?r');
define('SECURE_AUTH_SALT', 'iD~(V#L|u9H%:q+R~>t2QWc}BC!E3P8m&`55:4x~H^t3=NlfmNdkC+p,>#CCah@,');
define('LOGGED_IN_SALT',   '~+>MKB4wxX#$Acc<OH|:B/nG~]AO#{0=S`2PBH7T)!S2Fsw6>Kw&.7ot`yG=sQ=f');
define('NONCE_SALT',       'x^f0e0brY?|u1U xu/YvP:4(wCRDKW3<!,7>.=[YU#|.aMED?Pldm*?24|`vC`)X');

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
