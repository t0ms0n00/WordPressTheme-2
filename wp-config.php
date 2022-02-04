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
define( 'DB_NAME', 'db_task' );

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
define( 'AUTH_KEY',         'z8|8@@^<wZz]C-T$IFvA1(DG:]?M4ZnH4@Z0[K hqp(MwLGo-MifXg~m<5~>X!je' );
define( 'SECURE_AUTH_KEY',  'v)3k%i9/((+z$1&8A!0j_]8C1FO,QDIQTL~?4?^#FbH|~V!cH&*c)%Y+kv+doNcT' );
define( 'LOGGED_IN_KEY',    'B|15ngZbLTwr&$[#izGD}gYu%8<O;y!`|FjYAD;DlGzWIVX1g+|5*) Vt#.C4k*N' );
define( 'NONCE_KEY',        'Qpms`g!%?pnE% xS!eE]60o}K[j+BMJsVOS~,).XxQY:AHPu ~^;C}vqQ1-k?ugp' );
define( 'AUTH_SALT',        'adiR,r_(;+!-wH^^@1Gjt23*ssM0 6@!0B4S9dCA&6d`HP/bvU1XHHP1}D_da,1M' );
define( 'SECURE_AUTH_SALT', '^Q/~WOahKP,H%O!dwU6U.;|D?re7,8Ltd`};L5{V}Iq8Bq&&j;p3gYI :_+ouUC:' );
define( 'LOGGED_IN_SALT',   'Y.rm2#Oesz1tvL-ZI/ZHy8i@38M]?h/_I#^N$iPo}?!8Hq;&!W<oe.s$wP2.T_W]' );
define( 'NONCE_SALT',       '%=P9G8@joe%RX=f,{><r@9QP+_o30sY6V1`?anzyo;Tx,3U7]iq.7.TCEzMq)d,?' );

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
