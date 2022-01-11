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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'q2GCv=c170!NaXj7Cg$E;oIEg,6l`od#/m&2l ?p[C>HaAdF*xY;,=H;dEyijQxz' );
define( 'SECURE_AUTH_KEY',  ';l,CLY3 t+M1:HS=B*|.oTD`3MDX4W}_moPqx7fLU95SD+/jkwK=-/G/P!UM_dw&' );
define( 'LOGGED_IN_KEY',    '_Gjq[V4]PGh_io5u`3j]fBmXnY@oaR,TZ$h>Y~ [E]?P@Sqs#Gj=YBWb29ZK<`@W' );
define( 'NONCE_KEY',        'ZB!Y$h<XbT`Ld;%=)3E)9RbtjjJ2&O9 /6t]_{3)%5zx+DW$7KQ(vyz[wF7~6Dz:' );
define( 'AUTH_SALT',        'lsPW/zbJ.O5#`!x#e1M-n)B)S}yq>=:Ltn?L?-V<wJ]j[5`Ac}A< ;Gm@GC7TO#z' );
define( 'SECURE_AUTH_SALT', 'n9HC2~_} aSuCia TEHw`MtT>*=(%Do0a`HoW/qP5.9Wvz?{U&}kQ[{D}FBKXSBd' );
define( 'LOGGED_IN_SALT',   'i REm3P).^k`&td%5X0_WSLa2vXfhX%~p3nF)S7c0_Ky|n* iP@E_ME+jq4KBtA;' );
define( 'NONCE_SALT',       ':E<)RR#(.:C}{HdY=X<`:^+iIx:IZfGr-ldq|eTHUqE2V:=bdxV-|0NE!Xs:o<E.' );

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
