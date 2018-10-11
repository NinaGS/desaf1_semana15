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
define('DB_NAME', 'd1s15');

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
define('AUTH_KEY',         'xzzD[IK0>~}U`Yo0MdiO];n3WvCPTt#tq1.aL*FTg68aX)GX(`oE)(ip{sq~G/`n');
define('SECURE_AUTH_KEY',  'Atzo1%k :`Yhug>~?1R/y;DspfQv;xH?S$_XHZ>kZtXHC{jtk`OpXE*g>mx!;rB6');
define('LOGGED_IN_KEY',    '}s{ovU(&fS5@7]at7Tnkk0l8X C;0}*p]#jGMJ*`K,7wg6]S*>N1T|F)Afh6Jx`-');
define('NONCE_KEY',        'uR;`{Ny~F_:J3)alZ>QfU+Lx[Avm%M8` %nWd71Ecc=B#md0O3>>XfAO4#n(|m8s');
define('AUTH_SALT',        '*1 @k32{723;+]09qgWv+wJ,YfZOW0.;]2zbjY5`l/0 ;[rSFVI`.9mzU-+erNuG');
define('SECURE_AUTH_SALT', ';T7n[#[n(iqHlm&,al9#`JQQ!db2sDK{q)?]By+0w:A|`]rZ=qW~z>r3P]~P{t&Z');
define('LOGGED_IN_SALT',   'y%%(q8xcB,a,px=H.Kv;#UIwznf9ZO_9[c.1F+FGN!AiXzl=uSqC*ZB5t1:7b~(-');
define('NONCE_SALT',       '1K)2x=.7%sa;$3FzoE$f^JL|%.kpr~E=sFr4|KS4Ljtj-;B}n&w#@z9dZj*wf|~?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
