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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sante' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'u3h?U;zNX#{^JXc9Dej/@PqZ}6zKLnW&,D!uQpK<l{!Lqra-T7mw+SM;z[c,j~?E' );
define( 'SECURE_AUTH_KEY',  'H7u7p7Rb8Y4pX./A/RRO~T9vGMx6q{#7qBH!|Kx*7:R-a5P0#YocN3HMEV;RxD#)' );
define( 'LOGGED_IN_KEY',    'F9?P%mheoIsaUB~vKNgO:B;yS;f{)|v6XiqVa/[p_rmcM+MJDbw|-vag+CdcArK$' );
define( 'NONCE_KEY',        '1!a}-.z;0O}A6+~$q2Rb[fXc!geKmv>La2N!kTboF{?|rUP%vJ5-=6xHIm` G_8z' );
define( 'AUTH_SALT',        'tJ2Pi!ZxM]MZbOzV5,93sMw-Ry&=X#{HJemUzM(rgfAIK#kBV+b{u)Z?a(lWs-Mc' );
define( 'SECURE_AUTH_SALT', 'U2f0D7+l^XGM:0<S1+5&d@|p-MiP7(+sMAm^,lc0DADbw[Yk^JCcWo(XEm(K..#6' );
define( 'LOGGED_IN_SALT',   '<O*ig>sY*&vgXW1sF.c6BbPA?pBYXoGl4P2y=,oW]g;j&DoK2<yav]Vk`l%#k@|h' );
define( 'NONCE_SALT',       'Jq;|kY 6dnW(8&`!08DBL5oUg808p@6C|vB8VG5%oET 9J%):AWXA;iiD?bqqjmy' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
