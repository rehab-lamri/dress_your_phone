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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'G>_]c(%_Se>tyxXZE@j}Q>Bf^|Lx1fSfUzW*ci[G=(;#7mw!bxMho!<0vT]1S1_u' );
define( 'SECURE_AUTH_KEY',   'm@*qVik0+Y@T:]/(Bs.*^, 3>XU6A;4[z2Vd;pG><=e{;N;(Q|@bleD6MJb<H)38' );
define( 'LOGGED_IN_KEY',     'jQO@g*v2goT!Ry4+1aobTEtxpW]l1lAv#{vf-{fL|c=R&jEc!~,0|KuZa`<im/>I' );
define( 'NONCE_KEY',         'a._5<S;d ogNnJ?c2S;>`I@`P^;-;BL %4Y%V]Jp.J-|^C{N|eFpvZ}Rg}K UFjQ' );
define( 'AUTH_SALT',         '$Q-; 9xG%j.v%kK)L6Uj@sm0olj]:_#SeH+N>.z~)AZ$N$t6t&YJ)aEQmLPLbK;G' );
define( 'SECURE_AUTH_SALT',  'L]RiOb)a/7&tF041GbAUEu=L$Mg$>F#|;{G^=GPWUYl^E<j]k`lNWli}5fWQ7S=,' );
define( 'LOGGED_IN_SALT',    'B{WHBYt8QGITf;Iz5$.;43UgyRC&T8BSOgJ:HA`.0miT?c{XL)/9lwmb4SnfK#$X' );
define( 'NONCE_SALT',        'PHJY y>dXb|>_X$A<;CZsf.f+twZ+>MxofM}YLK=_nDT_C FT>CNkKQFPoSfC!s*' );
define( 'WP_CACHE_KEY_SALT', '}3fy8c#qpPv#,{ rw[9u0G4dyC8~88&6D8U(l*,<}-xHY.AdL;of9ooVsF|}l`j-' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
