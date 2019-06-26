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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ' 7x)<1*__%MrPBwD0FElP{Ynr+aCapJOVoa4gE$B=f~3_jV$MMN_*mZRNeUn8QYM' );
define( 'SECURE_AUTH_KEY',  '=jEnnKTs& _(4^OQe2o`1=3Z}N1eVLH}R/.n]37[9&JNT.}ZU52?<CYgcm,s3)T}' );
define( 'LOGGED_IN_KEY',    'x~5{5ZJtWB_V:64p1)w[GG?`|5dgaJAidmGX$A4A,lfyQz(c3y>Vlw^g3jpC Y}#' );
define( 'NONCE_KEY',        'A>wb|om(gy]lhE+~<Uac+t%!&_Aa]OFX@`w.51bL?%9DV~!%`DvplS=_:p /sIcU' );
define( 'AUTH_SALT',        '1@Qv[u K.8<=9HNYrPF<cY.1v}&|DGW~SGwZ[q75YMXd8gnBkfM*;WpHQr+8M IK' );
define( 'SECURE_AUTH_SALT', 'kWa_Wxz *M)BFFpz3v2Wb}dtKGPd^Cd3%9TZNjA/>$_?]5Pw?C9[F!JQ-Vc.8s}I' );
define( 'LOGGED_IN_SALT',   'U-?TKTa?9?_GZw`YNhtM{&R6 C6tG0~=,2eq~XO[d~s*6@8^:y6{coWprws3w7Z0' );
define( 'NONCE_SALT',       '4wKHyYc+%!cZ)!%!rn.YC@F q`!po5Pa=,vZv`BgY(l2+x)a7bp,V3o+uWg!di!=' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
