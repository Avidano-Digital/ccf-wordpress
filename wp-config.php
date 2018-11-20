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
// define('DB_NAME', 'avidanod_cheetah');

/** MySQL database username */
// define('DB_USER', 'avidanod_carl');

/** MySQL database password */
// define('DB_PASSWORD', 'ElginNebraska3!');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cheetah_conservation_fund');

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
define('AUTH_KEY',         'Lb!pokQqAT7;7t%K]@G%3R[,g-c_HRQ[fktdDi6DBLN=I<4/EM:N[MD9gsRk6PJb');
define('SECURE_AUTH_KEY',  'rJBZ;=[4S^kI@Q.d)4v)WWg^&CyO1c6dSHWLU#h8atm`I:BsPD2YG!Y=4zA8R b(');
define('LOGGED_IN_KEY',    '%tHAD=T>Bx?M;,Or{-3H~cWyzUaAN0>b@GAScokSrM%==./Em`9c3LkJ?@J)^cjz');
define('NONCE_KEY',        'Y@}>42gX^yJJ<)MJO 8PM00~4mZxS=EXA73_}?CD?w3xELZ5$iK>$r!w6QvB-4)I');
define('AUTH_SALT',        'mKdRo%/.?!;:|OP2 .*/*#4={~[[v?7f_dl$ZZd[|/zQQU+ J}TSBU.|3?I+5wSH');
define('SECURE_AUTH_SALT', 'bVZG.`8tFd)o;PF`N@AKtRi+G]o=1V Xf%8m*[wmu%}xviE8:_:fE?-$=d`vK`])');
define('LOGGED_IN_SALT',   '4QXhNoK;fz)+[uh=Y,zn)3AynEL%R2ly>1_)oq1?=.VU$A LEoJ{g)a^N{-,C;-k');
define('NONCE_SALT',       'kudSsx5#NH>@kC=tS2lVs`$]-ZiBdM+%BS`z!6Fwspbuopc1&=ch<!kItb6I3eAv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ccf_';

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

define( 'WP_DEBUG', false );

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'ccf-wordpress');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');