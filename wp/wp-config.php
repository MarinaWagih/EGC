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
define('DB_NAME', 'egc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '0000000mrmr');

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
define('AUTH_KEY',         'r+^qgbH/rb4XPXSS`?-NtsJ~Q~b&VL(XEC^I0i$pI)352oRstF ;u[K_sq1npiD;');
define('SECURE_AUTH_KEY',  'bcxTr8Kd5VToj~O_tepfI<2fl2(ISz+Wpn>iDe4N rUAwYLX|pExrx&(_@9dWyyk');
define('LOGGED_IN_KEY',    'y#J(6  /?<,/r<a&R-a85rkma~fo]|XIZWhF7a xo_}sd%rYYhU|U[bLY`EtIw@J');
define('NONCE_KEY',        '!?Au:#[<xXb>A=ZgJ8?/SyqSyY`8],CY+L,^3It).JXE[m+)[:yA *H8LSS2r)@v');
define('AUTH_SALT',        '&,dPrFGq:IH@.hBfs:7.?*g-[L1pJ^hz<XB6wb^*np,<2X#!cWdH_&,Lk~?^:C2`');
define('SECURE_AUTH_SALT', ':N!5>^@O_Zr69r2JtzKCx$_/L/+@s ,0#>u24$`,SXKZTY2p+<+G,:<G4dH,N{5S');
define('LOGGED_IN_SALT',   ':PV4U/Xr!bW.b}nQ|#PI);v6>~hDR`]Nc~7B7Le2IIh>D4I{.<I~p%Gtzeq>fT48');
define('NONCE_SALT',       '6UJ)Pr^_U]f<QT1J5bKXI#./TXc<g.o-U:3#s~lPNvQIgSm*D(@ot6BqnU6%lgP9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'egc_';

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
