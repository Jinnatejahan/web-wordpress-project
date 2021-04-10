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
define( 'DB_NAME', 'dhakary_web' );

/** MySQL database username */
define( 'DB_USER', 'dhakary_web' );

/** MySQL database password */
define( 'DB_PASSWORD', 'dhakary@123#' );

/** MySQL hostname */
define( 'DB_HOST', 'dhakary.com' );

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
define( 'AUTH_KEY',         '< pyh 9|M;.z8Q1G~Jpe*4/*_o+TME >y k<~M[+O8PW#seWX%dlam|:HK_BQTfI' );
define( 'SECURE_AUTH_KEY',  ',cn*:SwDR21#/HIb]g6rDtQaxVUTJobD$:Co$$+d#MS=KPl/{;=(Je@-pEGNpH&i' );
define( 'LOGGED_IN_KEY',    '*lu{;&)ZSIy)7Ti}*g<tti-yKb1be:Hef>llx`gt|-;t?Hr4Dm`!m6S$M30]-cTj' );
define( 'NONCE_KEY',        'C3E5} x*TR IVvX*D$a3_nk?G~.~^{sX[7}HADdDx]rUd2p*+T,uJ:[NZOsTpNtI' );
define( 'AUTH_SALT',        'N~vRBGuU`H.b]3 jga)Idq9Di9Uj`6G2^lr%jdNqGpC*G<)Kfui-!|`/:6=zR,Z_' );
define( 'SECURE_AUTH_SALT', 'uwLsnGf,<GGJ6DC}xa h0d,&#5)S%B{j(^=)vacSZjh>sMF;EWM&3+Wi}LU^ i {' );
define( 'LOGGED_IN_SALT',   '7@{0r#5bcv{*SS`gs2 Yx^Uq;u/9@KlL1yI9h~/nx+,gac)9xLHG]jZ{~f`Gfhhg' );
define( 'NONCE_SALT',       'j>A|xz8j7!?7@%Kf8Ya|s&(.k>;Y{|1Ul27Z686(?|h+ihX~Nc&}O<a<{cdVGZU`' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'admin';

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
