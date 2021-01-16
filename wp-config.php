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
define('DB_NAME', 'vitali_db');

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
define('AUTH_KEY',         'VlFzc; +CXdh6kqS=auTN)y?]ig0JY_a1#e/%7TFO^2E|!dMwb{CDb..S.<>9kMD');
define('SECURE_AUTH_KEY',  'DvRx%F9zE1SwP9P?MO4uzHy `_{Yn2F5!EU^~ZlA[N4Q%YgHTqc0cD^y2T?VU*A=');
define('LOGGED_IN_KEY',    'E=&q4#:o4-mm(7rw0ieWlyEm!@-d+-sNF:/97[Rlz[zQ;sV?hr,9Pm@I|wJB/kHr');
define('NONCE_KEY',        '_ZL9Y<-#U?;w%elkbX?cy1kse$b5M!(Y~o7v;(ksA &=w8s#6J>e2_oA%/qVY_Q;');
define('AUTH_SALT',        'uHA_gig4)5AuLYjM)z+VphzU+M#oyw_hfS%%eLgH1B=|>9z?M)RM8d;o9,?k 5H6');
define('SECURE_AUTH_SALT', '?%*H4xM&_vNQ G7av4<UvGR+.oX#K7o-dxd7paSjizbC<:p7&+_q=M7QK[=l=)m[');
define('LOGGED_IN_SALT',   '@#(W`[n0Z8#Bh_[lQ.T:,=2ZbkFcwS+Qq, 7}-[,T1FlM,k[~EP;t*I78|x**hdc');
define('NONCE_SALT',       'Gqsj[IA.$?wW} J!XcO?(*!_UU:QQ[1&e:]yuA&u=D-D9bmsTT-U<]5 R%(j;(cB');

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
