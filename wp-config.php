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
define( 'DB_NAME', 'grand_froid_ours' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '%wGFWTQ>G1fXPa8`V$gg4[(/Q{7}v|cM[iY.kM.{v?;!T;m6wZ>ev`u[p}=eU^/0' );
define( 'SECURE_AUTH_KEY',  'p/u_QD%dKVi:=`bS3!a]9j~G<W;m[g:r]11wLP=0V>-wyyy{<w%M]awMP5Ib/d4/' );
define( 'LOGGED_IN_KEY',    'E&qpD!dDg5L]7`W~F -^L=7sp`x? (*)}f^rz4bW$cjsH.[+l2/TA=%OQ;L.jLSi' );
define( 'NONCE_KEY',        '%?T;^R(5LLmZ;o D-G@h+Tvt,u;$i2pJ$o5GzGDU=nh/?bEy,JnE.b+><%-kVe}[' );
define( 'AUTH_SALT',        '[?9pa3WdB0iC!Ng&%tjPI&CO]7C9fQmTRD&dJ%WG-$?=(+WfnMT3t@LMx0*I5RxI' );
define( 'SECURE_AUTH_SALT', ']w&*nnTHsyIY$@hUYwiy.]?YLOHVLjM5z$[_xXMf6yf=CV<V8hd1tkjXEOt$wkbA' );
define( 'LOGGED_IN_SALT',   'Q,!x:F*U7EMQ6e!f;V}w9)g~usN6|H;nW_6|OzD7xW4>/;S@O]Gu/aV*cD4($t*M' );
define( 'NONCE_SALT',       'kw5vpC*,`Dh5WYXxf9P&MuywL3k&r?)j DSHf(J22L--aLjG,m$5>7c`kK;<Qd<.' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
