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
define( 'AUTH_KEY',          '}mQ2NRa{?nsJoMjPFB60MsSuNJ3|=uu:vBn>mbT@BD(W@l<]>}YqT:!Mq-zpO-u$' );
define( 'SECURE_AUTH_KEY',   '$+V_6a$;*[_mhgh`{Hf;qH,V>3nU|J53(0<2AAJn{56xxj!n]UK7d gb%, 7Ph=m' );
define( 'LOGGED_IN_KEY',     'N)(&T=E1+$qrTjRVRI@7|9|;yQg/mf%dX9TIZ{-zn#&%92jq-lI|:TBBDlf24>@8' );
define( 'NONCE_KEY',         'DrqTB~&AlU_tBX#o-&{7J=[{oL2%_dP0g*laU{M TG#*h.r|n80S2V?$g.CW062s' );
define( 'AUTH_SALT',         'hXN|&~QCXO79rgMh4)u2Bm ..Hb#lg._,BpxzV8 NCj,co[r,y@kW,|_A`Ty&(g7' );
define( 'SECURE_AUTH_SALT',  'e?XV^fd^/i+V-78w`n*GaD?uw#cWiTPkusF@leM/r_v9@ajl3kC213#^<en[*6j|' );
define( 'LOGGED_IN_SALT',    '|@)4!#%m2g&[D/Pp60w/F=,y>M phLn*f| ^UO^ v^0McU8Vn/@CYe4dKD;*&]~0' );
define( 'NONCE_SALT',        ' D,ASH8aKfOv6~CZZXEdQU@ZBB~xv1[w/Z([,J-WS>+pP,>`^;puM[|?Z3mTdf,g' );
define( 'WP_CACHE_KEY_SALT', 'TQ(mAsA;KfF|hCOL[z2oG>V=JOpflvQId&uL9Qso(&P$z5Y;?`,s2hgjARLTJRSq' );


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
	define( 'WP_DEBUG', true );
}


define('WP_DISPLAY_FATAL_ERROR_HANDLER', true );

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
