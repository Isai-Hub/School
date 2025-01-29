<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          ' ZstSYP2paKD~~jJ@#Mm]}No5`DTn<&cMs_Ac-4O3L+/tbeRY~qS$OlmgU Iy@(`' );
define( 'SECURE_AUTH_KEY',   '/pU|^{O>)5azP&tV/}mBW]X_M:_z&:}8j:>T$g}6KcaH8-%Z@_-YszW`-]F`{Q,V' );
define( 'LOGGED_IN_KEY',     'T u L#5rZAo@4 gwT5.bw_FE8Wp}_|ScG(C^+6z F#<ATR$)Z15mSN#;2ya4=wA>' );
define( 'NONCE_KEY',         ' !L*QQ &;oF5G~=a]8ot`vB){$jA{kd?:Wp%)p~g{k)$#X, suBy6.D%Wdy#/5z ' );
define( 'AUTH_SALT',         'VP+K1P2{+_%-p/x,8o$/Syfj([LZGM=Z[?WRGa&I+kf$`jKl>3B.tS.$3+b<)AyG' );
define( 'SECURE_AUTH_SALT',  'mI{Q0Y:BJ(M<6q]HoSPv3GNwvhoap}ez:kgHGISH;m7LZUj/oPJ(9!Y6:yfZcHmV' );
define( 'LOGGED_IN_SALT',    '~:BRqn{N8I-wS;@/|_N>m!?YR>@B.f+o|7lGA95h`$xwKekHFUBUoVS7HeK3cLJB' );
define( 'NONCE_SALT',        '_fqQl%A*y7Pe~pG##BQ5|O{kpRSA4uF[{8ll,,k:k|@I.RlC4F}j4j?F6//!drZ9' );
define( 'WP_CACHE_KEY_SALT', 'NQ8]C<*TY}EbL 7#e.l]xZ[yvXD|I%QRJ0:^0Eq|[}(f9$s>Mu k%HJ]oMMv,N@E' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
