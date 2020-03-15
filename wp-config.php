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
define( 'DB_NAME', 'newDBi9tcz');

/** MySQL database username */
define( 'DB_USER', 'newDBi9tcz');

/** MySQL database password */
define( 'DB_PASSWORD', 'hnz6Ihqnv6');

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY', 's~O8VGRoZw1!8}dVzs0>NFkY>}>FcBYvj^7>EAXIj^q<E.AbLiTe+m.E;LXHe+p#');
define( 'SECURE_AUTH_KEY', 'KKsZ-1!8K4Rsj^q$3.AbLiue+6<EPAWLi*e+2#Da9Wth~p#D_9WKh~o|1!8:KhRd-');
define( 'LOGGED_IN_KEY', 'Rcvg@4,B0NkUr@n,BMYIfUr>n,A{IjTf$m.yA;LiHe+m<E;LWHeSp#l_9]LhSd-');
define( 'NONCE_KEY', 'y.6XHe+ax;*6]HePaxh~9]HSDdOlwh~5[GdCZwk!s[4|CZNk!s@4|C0NYJg!r>F6T');
define( 'AUTH_SALT', '^^3QBbMjuf$3<EbMXTe+m<E;AXHi*p+2_D;LiHe+p#D:9WKhSd-l_C:KhGd-o|w:8');
define( 'SECURE_AUTH_SALT', 'eS-1_9K5SCd-l_:~5SGdNZwg@CZJkVs@o|B}JkUr@n,v0M7IfQr>y,B{I3Tqbm.u{');
define( 'LOGGED_IN_SALT', 't9#DaKh_t]-1D:KhVs[o|C1O8KhRs[z0C}JkVs@o|v0N}JgUr>z0UFbnXu^7I3TE');
define( 'NONCE_SALT', '7BUFc@n,v}7>FbQn,u{7<E3QbMi*u{I<EbLmXi*p#H2PaLi_t]-#D:KlWt~p#D1OZ');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
