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
define('DB_NAME', 'hacienda2');

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
define('AUTH_KEY',         'kF:F?U(Q<Q[W(h+L|(o;$_0*A7U2F|y>plKuC?{0kC4-c&T*w-@2Px#:8pBt:K?I');
define('SECURE_AUTH_KEY',  '^mjl{fo@%sIGGv<JY_4T/ 4eO#0@C<hIdVyDS+N?w1(SVv_uX/g~e>ZT!f`O,Snf');
define('LOGGED_IN_KEY',    'K*deyHm9Z,s=D&C&Dd2h{1#.n;sTvR>%(CX8Rkm,r}~vcdp)yvpUHK;KS %ZF#H(');
define('NONCE_KEY',        'dy},(]{MsB.TW72sLLiW;GvF3Fl83Wb!;`8kw)n.D&9a?s]dm-}W3@7i^=JGr.C@');
define('AUTH_SALT',        '^J`u0C1<CJhQ0KpzB+e0AZ|#4UB.6 FTxPu0)*rNN7ObhvK9RRkne]Hj%#D$92b]');
define('SECURE_AUTH_SALT', '0^.,f.;,?l_NR>:|B*i%@C7Hsy()p$o/^?]C]IChzR<Wtvw8=oLx+Z6wyYI$!lcq');
define('LOGGED_IN_SALT',   '$(`qDdHInCzDaboNMnat$*;((h8/CYmBiS=Uy=[y`.i~U%1#M|+L/+dgZ:]j(Y6?');
define('NONCE_SALT',       'O;t2*YY;5FrpcJ~w91>&`MumOJRBigOw4@A%*r]]hREDlI.5jt@ck )iMw/[54U8');

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
