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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '2R{BpJx[fch<@* SfB8e!jhE5rav$TIqMEZgynyHamhJI/trVgYf%#!sI!7MF&vX' );
define( 'SECURE_AUTH_KEY',  'GupG/[]v.8K#Y3-b/QMUZisVaMGE`t!gY*~tMf%D;v90xbGipjlw~ClsnTsXKny:' );
define( 'LOGGED_IN_KEY',    'r|*1Agi9$?saX96HdlJjLc.Kd,A`mUy5GQY{jWNC(Kos%]}s12y4V$K[K(?kj?7a' );
define( 'NONCE_KEY',        '^0:>vj!+R]u.??F<w>1av+I.[1U:n%d6wL?SdshI<sBeAp3jwP8wgq`f3;-b%(QL' );
define( 'AUTH_SALT',        ')pum@?&W5.^y6G3CT#f_)9Rd7c@yJ4xBS>fr;pC?J)$-}0I [W%4]|bN<rEW1$Yw' );
define( 'SECURE_AUTH_SALT', '@vb[]rl?oZ&^pqPv^o;)1SBKfC>k%dsc48FzA-2qRt[Fw9yC8vZy_u`6Y1zu.2Qu' );
define( 'LOGGED_IN_SALT',   '8Z^6V+Uhg;_MP-E9;xJ{sUW!7|0y:)RNP&>9}V.g0C=j=dkd(t> Xo^I`9C,@spV' );
define( 'NONCE_SALT',       'F/~A<ApDF5O02$H?+DSXdeED47|1jlYT$de:f6Kh)~^7 T/;YxFtzK@7kmUZ/9|A' );

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
