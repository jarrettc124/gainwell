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
define('DB_NAME', 'sanwoodf_wordpress');

/** MySQL database username */
define('DB_USER', 'sanwoodf_admin');

/** MySQL database password */
define('DB_PASSWORD', 'sanwood');

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
define('AUTH_KEY',         '!5iOeGq@OQy:FueBU&<Nfn4:>{7CGUfg<D|/mxHE)i^p(z]{<A-K}3_*S([4<(o;');
define('SECURE_AUTH_KEY',  'M G2%(o{-pj130d?D!1>R{UPqRmd-DI9W#6ENk%F:~49;VG(waGi+Ti)V*a~?4C8');
define('LOGGED_IN_KEY',    '9<@@P[; o@vC@0s(ye9@knS.AIm*Fj%$u7>P!/ Ckm*{OwLfp>t0;EnNaz`PPNft');
define('NONCE_KEY',        'G&.^k%_b~d=4V5oApla%xiEh1A2pgmGB,T/3_I%v/,yVrZ0Ls~9]LxFuT}@33So8');
define('AUTH_SALT',        'C(!Chn34<yNE6Wj:U%,t{cURmJ_$nSFpmD(!;piGmo}$:hbN]UC7;!%AgN)y_kxj');
define('SECURE_AUTH_SALT', '1~ad9N)PE(%q`!RCI;1o7S>PyBS5c.w/kaY513CTC/)-tf5]#q#;B7G(?(oZV-^x');
define('LOGGED_IN_SALT',   'QBAr7YK=X1u1UHwn #Tx4k@xK>BF[`Ep]3W|GywWE(Trhxn6{,X:S h7h:Q){Xg0');
define('NONCE_SALT',       '4O0f/*BBU](lLWz/$p6K~RXL=,lm3@Y.&8)2Rs%~<FKwp?N_2zz_^R9LCi3Z>[`f');

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
