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
//"Driver={MySQL ODBC 5.1 Driver};
//Server=MYSQL5018.SmarterASP.NET;
//Database=db_a1fdad_egc;
//Uid=a1fdad_egc;
//Password=YOUR_DB_PASSWORD"

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp-egc');

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
define('AUTH_KEY',         '4WGx,/Su9je,+cK~My5,#n#djPVj9~ J_x5JEvq(y5hj_eT2mb5/Dl+Bp*QJ1&Qm');
define('SECURE_AUTH_KEY',  '&TtQToI@e]@P`z/0LZoqV507SF_!o`-C{(#3QtLeE5sV8.#.ds~?l[XQn5k|kRCR');
define('LOGGED_IN_KEY',    'U[|9)AkvKvlwwM%KXmdAuV;`=bdz,GV&HZJqQn6eyWgcC$s1gf@Wy,7f}.>{][kl');
define('NONCE_KEY',        'NX@0ZjVo@zB[_B4S8[ELldkl9|eMxBSGtLXbxr,-<[S3=fI.FPV?HufK21KK@w?j');
define('AUTH_SALT',        '4buI:tM(sIbe2XTn|9bp$+8OtlgNSu&+}Q(pk` :X;{TDrX0v:IZ4ccHw)dY]@<u');
define('SECURE_AUTH_SALT', '%_+4*Cyy)^T8pmshqH=B=%Hu=9jA_AtlJ*<F}yI5S)>[9B6^Sj4uM,U=V%+C-z:Z');
define('LOGGED_IN_SALT',   'o@E!Yk 4_KPE>yA?FYzckHDR08%A<?y|nKI;?ESMIy%4}Ee`GKv)a!t^j8`Es#zp');
define('NONCE_SALT',       'WLJSY1HD?bgjVI/I(Q&HAI;m$0z.MAFRAPQMLeHOK<~,XRn3Y:ebE {@Xo; hqIE');

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


define('FS_METHOD','direct');