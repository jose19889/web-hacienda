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
define('DB_NAME', 'hacienda');

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
define('AUTH_KEY',         '#ik@6D)s~ej>]!({sFR2;Sl${6agERh =QxRI!lO 4> IvpfBtn--c<gjvz3NmbY');
define('SECURE_AUTH_KEY',  '<<b`>/,6.P=,U=emf9u+L+$m|_unpY/GKQ[R:3s@PYIh6*v/(LJ,t/J@Pm]O}vY:');
define('LOGGED_IN_KEY',    'Ks>]~YCCr] L`mZs-f&(:=hVcgz0^=7^JV)vBLQ%hq/g#8u[b?{OFJA!6!k6M2Fv');
define('NONCE_KEY',        'U?)#Q9~;263z3l8+.P U_y%o*D[r2Ckq$;z~3SF*x-(ahamBg=5!20{Fasfcb:,a');
define('AUTH_SALT',        'c@9ztagSthdak/b&M#6+w)+uwvg-+*1XUWC,Zq|!f+b%BL p@E`%^)v6Nq?WkU!&');
define('SECURE_AUTH_SALT', '}B@r9C/:,rVIaBV_P,w=5QcD7DV$ZU{Zinj>@9K4n_!K*Igf772waQw^-|.N-]B@');
define('LOGGED_IN_SALT',   's`;[^ai3&pC*|U+I(= 3Jtz{|m>Q(vgeN)beM[^0~(fYPYEqTesr2zRMnw==(pmm');
define('NONCE_SALT',       'aR+Ut8gq%LT4XSV#yX-6x6ttusrzDl^M~Dhyw eioq1JZBsQ9`]`l]:P|NpLIn]R');

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
