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
define( 'DB_NAME', 'wpbla' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'o*AUMdX5;k:l@q 4HX1by@4TdW4k+@,{lH/SG[CA70CQJq;@!}a=_RHGa24lGk<&' );
define( 'SECURE_AUTH_KEY',  '=Bg/ EE_nTDWkF!8x?EER>!*re^!sP7e3w4i6%2NR2M>AQfKeg+o:,}P)]!*f<g]' );
define( 'LOGGED_IN_KEY',    'ue!eI,Dz.d+YepFj[cU;6#)C{|AS[(J 4:}Z9:~ 8?`B 2Khi|qK)h1Or+1c-.v)' );
define( 'NONCE_KEY',        'I/bw0C!+ax^wBM?bLcC:M5Zd+u9a8[fA[s+PjE(55Vyq91^9xg/jQ]xDa-W=YSO_' );
define( 'AUTH_SALT',        'l>hGZmxQO!e8P^?*Bwm8ml0}noembuQMU]|RKw2i~K;F1OLS;FaM9V_.x4sOo#h*' );
define( 'SECURE_AUTH_SALT', 'm{1VHOO5GktJfU`*<84{&kec2N5edOhaBj,=RPw0:<P(q1&;j&SW0aTbTX^c!;4o' );
define( 'LOGGED_IN_SALT',   '5Rh7&?`}!=(Z#}KYJ0C2aH@#H,S$|adXZ_U/N}$9eD7w%/tj_SgN6n[iEm@<^gn9' );
define( 'NONCE_SALT',       'Z:lY>q2A7f*^{lAnmku4}&8Dd)#!TvXfQBkAS(mS{-H=U:>/1M.IDAYA%x$nG}%S' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_bla_';

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
