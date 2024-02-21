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
define( 'DB_NAME', 'digital_project' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Letsdoit@123' );

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
define( 'AUTH_KEY',         '>}{1mEu^m<_]IZsKO(DP0/%rC-s.DvO*,?ON16b_9m)^2X%<cmscs>T&@t.id.y6' );
define( 'SECURE_AUTH_KEY',  '^X/$FH,E7:}/2|JZo@F.ciMqDE?~(hfmw<m*U`1*auF/+De~4VBPK{^+jPK?V81d' );
define( 'LOGGED_IN_KEY',    'bAi8E+Sd&0Sx+l1dT0B+&c-9X>ks/qSQFP7r7WDD*J8%v<=9@]PaC~DN2m+!#Cmc' );
define( 'NONCE_KEY',        'b3V0Xd4U-:.M88+gG6^/Krs-=PT<P%4K:MJA*}-e4A:qRUnV#|8$Vtt|{av h8z*' );
define( 'AUTH_SALT',        '5)(myW;xHw;0yCH><MKW#,=)8r2q[xe*lyHtGn!=t~HJa{v*RJ_cwV9(m(!bQGz,' );
define( 'SECURE_AUTH_SALT', '|V18zuo*?b=jY|yDSsQri4+8Ajdnc^c;!F^)wAE&}m|!#X|-6`!yI_,*<KLf}_mS' );
define( 'LOGGED_IN_SALT',   'he?vPP[^IiN~S_%B*h>#TD$%:D].Y<l4pe-E;4ndle?-vh)%SI[M[ttU^3s00)$(' );
define( 'NONCE_SALT',       'EBDtFmus]~3(-7;CW1]!~4a%OWAmr8Fz{fXyweTkM_IqR{UvB3/P[r`AUs>+}H&8' );
define('FS_METHOD', 'direct');
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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
