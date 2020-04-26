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
define( 'DB_NAME', 'manga_db' );

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
define( 'AUTH_KEY',         '^LdW%;eQ 0/?FBF{hpDbrhJu?T$h(:1#2cs6TG KFD--8-K,PQGU?r~2s]>gX^BS' );
define( 'SECURE_AUTH_KEY',  ';ZuOT!e$.P(i(DE|o3,;!<uK632iR};On(y}[68Fc5(KVOd;FE~.5ore.HN{NPP1' );
define( 'LOGGED_IN_KEY',    '|tnY~ =q++;AysHp`p<u(Pi#ckNvcYx4/{[}uBc/j%LwFeUx^?KiC&;*uy6%,P=h' );
define( 'NONCE_KEY',        '9bBvYcJ-!Rw8T<v5hGxa8Y`OBKJ__X)>`5^{/IPx1zN%H.s0)/LsI4xED&lGx.xN' );
define( 'AUTH_SALT',        'Z`V@kT*Fi1K$^R,;`@/?J`;Lk?MX3Il|;>6ikL-n`K]IY-uz@HMERCD-)cqG/1/I' );
define( 'SECURE_AUTH_SALT', 'wwJr9FFw<yGH.#9C.p&-&tRy7gPen4!9cZM9hE4G}*ax?Id4{CE-M0l>>(ENioR|' );
define( 'LOGGED_IN_SALT',   'u@)S80_4X|R&TUT#r,FEXs|@LjpAbc3NP##)vv([deXjjKa;ekFg7}M8`)fl9Al1' );
define( 'NONCE_SALT',       '3#E>;@~k&W2;;oB7F*(0-h<zqo2Xq42ae)l]+b]`]~c+{MiSkZ7rx=.h,FOE8kdM' );

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
