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
define('DB_NAME', 'wordpresssnaptube');

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
define('AUTH_KEY',         '+AhOq;1Yu<fEWpxZrjK$_^a39~p#R^dE;7i&X>P]&ma)}f}m4fzW<( IYl *2C|l');
define('SECURE_AUTH_KEY',  '4NQ =g=]k$&2aZ^I(&ghMX&G<@,TY)ef+k?m6Z>3-}^wn7:=AC#j+#S_zkz=N,i~');
define('LOGGED_IN_KEY',    '7$O#z!&hvEs:y[w,>tdWG7]~57`FPd~#L]eRuq2JF X=4x96+aGh82-_v_wq}{U^');
define('NONCE_KEY',        ':qHl%m7yFR#>CYHEOEp.F2l_CS?]z>g0>y1E0,[lc.F]/^xt2iY1<L,DFRp*eu^W');
define('AUTH_SALT',        '$fexI_]AS2>F)uQN8}=G=1.q|FKOX7bq 75=eF4l]j]i%nj-Ko.kjnC`LXs|+e%F');
define('SECURE_AUTH_SALT', '0[+,r|TH`Fzj5a{~)lW$Oigd*(a?WzFNAC&ym:6H8%115TQ/vQNUpGW&_on4Js^!');
define('LOGGED_IN_SALT',   '9,rq+G3CK:Q9K*eT@@UQ2*NTYx#WQ9<G-TN3s[ya0z:hD~5p+B7H&WC)}<ifR$Ma');
define('NONCE_SALT',       '.P;`1ZkXS3t~W:+eEs>RTk/`HYd!C>Bz|KP MYPp0&n`{byhXK)od.L<m=z4YQL{');

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
