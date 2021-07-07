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
define( 'DB_NAME', 'u866506359_DB_yabuki' );

/** MySQL database username */
define( 'DB_USER', 'u866506359_DB_yabuki' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Yabuki000' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

// This enables debugging.
define( 'WP_DEBUG', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':HrtY5XvAQn*_YnJ6wG8K^UuJ?> o-X@yNn)yfYY6][jiXV7J)4qo7b#dA<Z[pXr' );
define( 'SECURE_AUTH_KEY',  'e^SBW9$U%j G@+A{UBp y^brI.!3su^ZJH~Yym:y)lw3w?L?AI. OTWZ|-:$KK&5' );
define( 'LOGGED_IN_KEY',    'PI|Vl8uFy9l&J7]55S7arf(b$b,ROWi<,#x_{ &ArE4&X(Q0ATzm/Bzm&$4.imyg' );
define( 'NONCE_KEY',        'ohDJ9P12|KzSh]PN4L2CpDaK``e3%bdB4,b8L]r~3`;QjfuyDkG97b4gxc&HJiL)' );
define( 'AUTH_SALT',        '9CwX)+)6H$Pi9~unI?0%oLL096z^yn{12C7CEQw5vqDemqded9i#,a}|PP (pyR$' );
define( 'SECURE_AUTH_SALT', 'yw1C_)QE0kU yNz7ph.vm;EzSv)PaR8QL4S@K^}LT2&6z%!70.+~f;P4Njy4`r$@' );
define( 'LOGGED_IN_SALT',   '+*s^pHj=R@lVC0^l>JLIeEOtG^bl^XI-KaunX]l_qU/=QoDFJbWnc&j(t)c-$PKV' );
define( 'NONCE_SALT',       'VsvK+L;Z XHOd=$q&R#VZBTn,U5z6w/.l,Lve-#6xwr(]Ov9~-D%UZ{s9~HfBxb=' );

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
