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
define( 'DB_NAME', 'THANHHOAletsgo' );

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
define( 'AUTH_KEY',         'l>XNBM4Z@A*t@,IJS6uIgS8wgY0HH$B mOz|$U; (s+#v*I45L=:rC|WlMXo_Iy`' );
define( 'SECURE_AUTH_KEY',  ',y3LT`t :F.T]]I7H#`o7x>fE=tbK#,^uSh&>I2:p[X9[ma0s N)TDXHv>Ggbf^P' );
define( 'LOGGED_IN_KEY',    'Kn[^&)}*d@hXPn.hN6vbR#jIB04,=J89CVTc&8hGq_0,CB8yUX9B[MmiH}U:WX3B' );
define( 'NONCE_KEY',        '[e);^Cz?:_]JDp/<MloZ%)W{P*:@BuZ/.[ZRqkn](jEE8+,Pm9F~S8]UA,<%8J[A' );
define( 'AUTH_SALT',        '3F&,S@5GA@9g)EsxXV3r!&xS@J%H2kX*N!Ei$!>WF_}rC[D!v[iJ&ESoOqZL7Bn4' );
define( 'SECURE_AUTH_SALT', 'Eks~(4AKpR7~#+%/w6kAe&O]QZl!F/O<@KcJCtsnP[IIOSP<+rdu5~,LubYe]}19' );
define( 'LOGGED_IN_SALT',   'dvEKq6G8J-99}4%u>mwY2iQo!x00u4?zq@2kP=0I.Dques`5EgE6Ma|#WsWB:SW_' );
define( 'NONCE_SALT',       'o(qY/C(LAKztPpk;#{W@2`Pmq@i[Qz5wYZE9t3M4o|4@L5yt&DRZmE<MNv4~o,|/' );

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
