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
define('DB_NAME', 'trimurty_sodeninsurance');

/** MySQL database username */
define('DB_USER', 'trimurty_dev');

/** MySQL database password */
define('DB_PASSWORD', '6TP%8~m(QDUE');

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
define('AUTH_KEY',         'yb-8t*MHL@{F29OclTV?I34g<CPd3+eB,,(Dfe*WW[>a$FKlex,}.$Y]cqV$WZ1(');
define('SECURE_AUTH_KEY',  ',TIJ-,#JdcNt%4xf_XgDU0j=a-:(,{sj7T_nB?o3,OL%6j0|g~Q5Q/oa^:zw(C9g');
define('LOGGED_IN_KEY',    '!yAX8u>dML(Xp3FmN![0G~>6^gFIz(1K%0I`ppM?KtQ;M~Nthqc/^Fn%<|;29Tx~');
define('NONCE_KEY',        '|eG7Xd)CT%I#HS~kSsC.j-K>j@KE|66;lykT@E;>WDQ0V3TRk&9N);pEz2>R1U{5');
define('AUTH_SALT',        'EwL%d P~L6ys+-+OGfd5wqo:K(#17Pb9ARnXqxCIn1JoI.~#QTqYcMjyF[.4znIn');
define('SECURE_AUTH_SALT', 'x?n~-HFM5Xh!J_&P;#&98r6kOrB$T4HBhE><wx=l>~ZIiQuLQKS)_}fIomB10^[&');
define('LOGGED_IN_SALT',   'V4<7L/T-tZ_QM_P7Z8&I1k34?30Lyvb}H``{SA(!6j|HP|9zxhc=MOPhSQE8+Rl$');
define('NONCE_SALT',       ',xR+`5ew#s`%5fC3]~cT1_wP349)bxc n6 @^.P)h(2XBKTaS1Ke<WX/-[2P^jru');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpsi_';

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
