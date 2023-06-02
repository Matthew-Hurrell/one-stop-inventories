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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'onestopinventories' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'v?M6rF07f4$1URG9yH$;SlD(+1.XHe!K`U2+x%Z;Qr5Z2a4?l|u=DH4/dpq-U[`A' );
define( 'SECURE_AUTH_KEY',  'Gc<u2E)b9rgyiVe@GP&pzBu3Y(K?9qI;Y_2XIo^_pX+7UtRy1p{Hm`YRm*X?&5}<' );
define( 'LOGGED_IN_KEY',    '.n8 C<l?,ye-dwZ0I{_v6WBB3jSn?=_OxjSDDx8JF#AI~5}p#_-dTA<E`C[wHB72' );
define( 'NONCE_KEY',        ']+!3S7s]+|3q@ye.<y.!KCh39_3d%&-pw>DnVcy6)usSsyJf6m{)g,>HmrpJ7~/$' );
define( 'AUTH_SALT',        'Y];M2aZ9_wC~<aw@;>e@iv#IzK<Q1cN|3N4u@mTG,IImw8ZV*Y}o64_f$30( M)8' );
define( 'SECURE_AUTH_SALT', ')-LzP(3??*_SVSPL#kl}D:OA%EG^6OGp|%]aMw7,)jqGhgm&a{OzZOUV~O0DMP)$' );
define( 'LOGGED_IN_SALT',   '!o8_^uNh)h:Wh0Yro{2JG8~Q+*LO3&DQbvq;V:&e.V~X|%Y_a<jM.B54{Hy=%UQ)' );
define( 'NONCE_SALT',       'Tvpkp[v0U?-)m|3R3zF[x^o$UVaMV<F_}zkKSH}AvgSewzUw5 qOUB,}P9Njt-WV' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
