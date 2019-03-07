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
define( 'DB_NAME', 'wp-gym' );

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
define( 'AUTH_KEY',         '{5PSpf;ZXRcy70{R3TfeB#SO[ BJu0dJZ&ka!qJ#d$?U#L/4!BIp2@ Ac.F=f`%M' );
define( 'SECURE_AUTH_KEY',  '.V>()R]5)+-p+{Eo=[o6`G-05H2I+c,w(jJ_$A~F:#S`UI^]CgHHV&ZA(>]>0C*9' );
define( 'LOGGED_IN_KEY',    'x!R>}16Y6Fw$o$QciVP~|I`tU[%}K!sUC(P!;If4Q&OImkHk:Imnn6V40StWHOW[' );
define( 'NONCE_KEY',        ';JO8laOWt8|j{ s]oM%x4F>ZfE]4&%aJCY.RSd.Xsv#}f2@_Kxo@H0:&&^2D~I&`' );
define( 'AUTH_SALT',        'P2jD{qah-P{,/g+U8#9 pg;D_JSi:V-pv^d[oqS5_,EzR=.xNqBH ^.KP:#v%nvx' );
define( 'SECURE_AUTH_SALT', 'g?rUB!kd$5{^NW&PG2H=;ESQ%DEC#iS.V7;EQ%qQWVx,jDeX,4x!4.^;H(2V6T9F' );
define( 'LOGGED_IN_SALT',   'ut7k4I#^1LmKm1z><`n?FT9,13x;%LLn{)#*gBZqL}~lM=tW@3_Ehj=+=EvjZ$O8' );
define( 'NONCE_SALT',       '`gu?_]#QrA9fJZe3c@=ma/`_lki$G.4[RBDyyjY%Y`FLf$V-o$Wolp3O^.^>jrc]' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
