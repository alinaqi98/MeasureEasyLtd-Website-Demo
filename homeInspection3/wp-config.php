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
define( 'DB_NAME', 'homeInspection3' );

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
define( 'AUTH_KEY',         '3]UQ6l gI4nyp{1h%k,dJm~AUn$>R,OUVhg&fdre{cPb[aWYd?x+UJUXd(M(y,>T' );
define( 'SECURE_AUTH_KEY',  'ZzZz[apz^=q102WWIqS5 >roz(>_UbTNqm6+6mb)ot J<oA)O7vQhFO_HQgthXjJ' );
define( 'LOGGED_IN_KEY',    '=K,=~U3g=X7K-0lbvWf7eaoePFnae1b(7]4!|5NjrO%+5GUX<:Wm jlc@~T`CHvg' );
define( 'NONCE_KEY',        'Hdd>/4?M=b%:PDe4%.OH|rst/MghS5:ED` SgS~l*$iaBaA<YV.EOkh#+Cw3yFj#' );
define( 'AUTH_SALT',        'm|25NL{t`mHly:OZc~Km87;,Mz&Do|0lM/6i_&GPwH!:=I`8dU-TP8q?x]Wy3h?]' );
define( 'SECURE_AUTH_SALT', 'g-woHP7%y$QpbB%LZ-.LPmd-=n>j6n1]W:NDlz1q=gYQ;GVN(5-H&fr.l|KIGV,6' );
define( 'LOGGED_IN_SALT',   'VYg yh])jW7j&L_ +(G_L55:6;&]|&FVyPlK3|me-EBIP+~,du<xh+8kcvyZ3!)W' );
define( 'NONCE_SALT',       'Ix2p[?|p^~=%6iY]U?,RaU`w[+}N*$b8_!_V;;}!6z.l(pksR_8hN$XqG-O_EK4;' );

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
