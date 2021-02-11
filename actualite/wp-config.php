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
define( 'DB_NAME', 'actualite' );

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
define( 'AUTH_KEY',         '9nNg#t7[66~iO_H]%btn!c&-L+NSyHD/iF`(nyQ9|5+0uLDAkU|J2OtdRvkn8nkt' );
define( 'SECURE_AUTH_KEY',  '%vekJSOvB^f)NfQ@FsjqFWcv;B=)rq,(<C(|Ve4,[<)-.YCBUWDdm<%jBM+lQ+Sm' );
define( 'LOGGED_IN_KEY',    'b9<v1~b>T:@%yMFlh:X%3R^>BhQB.F?7]_-%47Ds~v^V$zTNp<{u~Y}wjFrU]IZ8' );
define( 'NONCE_KEY',        'h]U0afsU]y?u=B$8ilGS.##iY/#/vps,=Na37s?|]R|fPVLW;Hh,S$,&4aTrs>^r' );
define( 'AUTH_SALT',        'HS)lW2B>Zrq~JXeE}RkpbowU1_I|:U(i[5!Lbn[,jZAcbgN{Yj1?|>VU{:v$syWi' );
define( 'SECURE_AUTH_SALT', '.c1&/cCDq94?5LL}=n]in?x~m?nRwscXE:z3J%[ze66%f$+3-U f5TW;xL>:;dTq' );
define( 'LOGGED_IN_SALT',   ':#Ot{wx%)V({UsJ<2LW/PK{J`J?$Xeu6yXz#HbMv5W))&N)}BySZkAn/ySPWS|*=' );
define( 'NONCE_SALT',       '0pid<c(t3ZI+~jjd.f6wt(@qr$%0ndlhu}JWD*enZ$VM+g+ix]A?stp3Z!A7=d-6' );

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
