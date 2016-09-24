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
define('DB_NAME', 'new_tech_wordpress');

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
define('AUTH_KEY',         'a.4Pf5aFRxvNF0$393ymCi8,HpY,{cb0;X6B]bw&p7 }!Ei3UkyVJ_AyF2kcfi5I');
define('SECURE_AUTH_KEY',  'f4+vG7zF#Ha9W~4v5E.sua^qTfe~}al^&0*Ym &p.)SQ;ZtssPOG|1ZC?X`fQM)o');
define('LOGGED_IN_KEY',    'y1M$pl?0lh~CH6|3np3IXr0ah8!DSlI,_}I!Io<vg._gy<}[G%Ncc9FFi>[LrH-x');
define('NONCE_KEY',        'dzHk~tQ_@5*>^7C^9z2k!WLu+R]wY2Bk%psijW^R@M|>^W_?jCMcSCF7{lPt4TjJ');
define('AUTH_SALT',        '11]jMTPu:_|t&LH(nP+_.Eorw#qRE`z6GcrU6&aT#i7KLw)873nc,N EBD8e{O2*');
define('SECURE_AUTH_SALT', 'lGD0d;^tDXXM.0Jb}Rj1k@zzC`--L>QSrxC JGTO?u?1#44&tNlHt2QtOrL]C*_%');
define('LOGGED_IN_SALT',   'T;8q):~%@R3(pQ{CtB)O96Ch- FScDZjbMZOQQL{QcFCunTL~l=<lwY;0fy6cA&m');
define('NONCE_SALT',       'Y^gS>ZqE1ac<}t1O#<=nIz^#N8>pZg~]Cy%j.5g0aZ20b$`A.@@pdW<*-[6TI<?V');

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
