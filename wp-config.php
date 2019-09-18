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


if(file_exists(dirname(__FILE__)) . '/local.php') {
	define( 'DB_NAME', 'expertcasting' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', '' );
	define( 'DB_HOST', 'localhost' );
} else {
	define( 'DB_NAME', 'themoew5_casting' );
	define( 'DB_USER', 'themoew5_caster' );
	define( 'DB_PASSWORD', '@3S3dG;NL^%^' );
	define( 'DB_HOST', 'localhost' );
}

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
define( 'AUTH_KEY',         '?w=S37,IU1&Y&}=~[w^KV:1)7.^q{J{t>um{v=To]pV`O.,m$g%9~7l)k5aYKv-&' );
define( 'SECURE_AUTH_KEY',  'cvITczlQ^ij,C`<S}c)G:0=Fm5KF&RVLt:_7+pyEt[X]lRPaY$|QD/ZC0R,YU-^Y' );
define( 'LOGGED_IN_KEY',    '4Y(JJ;l}+.$o:?K~WGg49XxITW2N dfGN7DZN|DHj3lh !eO^op2RAfU`Y_jkLo-' );
define( 'NONCE_KEY',        'x;O{pCH[^OKc<93)O|c@p1xg}*2#?cvtX/_eqfWr4~XS9BrI!#(,)(!b*oA&`$$A' );
define( 'AUTH_SALT',        '<q@#r7*YX:G&[)xbm)Lil{F^y;{/8j-#4(vGcop~_^O7}O*l>IaMfsME&&haL_|&' );
define( 'SECURE_AUTH_SALT', 'PE25Cy)1J! qjmcps*{,6d{& :OKQc_QI6i#f`jDRAOgf%ENJJSPU.FnjEm<HT]K' );
define( 'LOGGED_IN_SALT',   'e:|q4+@i[1r$I jw{CZbo>Ysb !96C)t,l8gby4LLMe@o#]aDj91;]a(yA(5_.Ue' );
define( 'NONCE_SALT',       '*6-kgPpSE2]{105SpC(i*i]hrl2N!h4j33-FIW7;,9,jd]bHjqB7Y^nkj- jTgpq' );

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
