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
define('DB_NAME', 'ruspar');

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
define('AUTH_KEY',         'M#Z)m^_`fj&Bmm<qv`iF$;K]]Q3`,C2 J4ewA[7Nr;gPRPFpEPt*nv:FeZI@oB[q');
define('SECURE_AUTH_KEY',  'wll6wxV5(wx7P+FQ6DEj#1mn].jhWP#~{rJB)D}DeOGhXE4PCRT(jfNyTd%ETSrJ');
define('LOGGED_IN_KEY',    'nyCZxu*3/y2v[;j/KWwm.E-1w@2 o`]G<7-W51ZXeURGzec}$6eZ6T_I#4(o{p%S');
define('NONCE_KEY',        '-6Ln1 hT,_nRm:-@M7Sby=9,p/<j8iMkfs3]:#31WM?PA/_^Io_0mAw{sg>@J>o_');
define('AUTH_SALT',        'hAY6-~x`Vt<M+&:]8ogR)T74A3QC6?Q{@57IP/4w{Nbm_7BNoZ ?h-pDo(/)tT;k');
define('SECURE_AUTH_SALT', 'q^-GbwOgEUurfoiE5`Z[WAHJ{(OK)-4?*NxN`E!6}TML=O*/Y=Eto/TK4O3h8Jj^');
define('LOGGED_IN_SALT',   'MZ?zJ0PvA~_c6=z%sOu@(?C&nt%dz4W<FxyVg1| frbB2}u(V;p$M~G?p1>TvFHu');
define('NONCE_SALT',       '.R+KL9[PO)E[Q,4S3g3{wpv<LfO9pTv}T,(M.i{)ZV?N<3{. Xk=+x2];*rIa]QJ');

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
