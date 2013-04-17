<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '1351229_greeny');

/** MySQL database username */
define('DB_USER', '1351229_greeny');

/** MySQL database password */
define('DB_PASSWORD', '12345678');

/** MySQL hostname */
define('DB_HOST', 'fdb3.biz.nf');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'us1YN Z#5X R[LX.CwJm*2/sn_^#d}Bkx[BdtF=8`.(i]:AYf9s>,&&Vr1|xP7Y*');
define('SECURE_AUTH_KEY',  '}f-XyO5 ADAaZ2Ol>2jU[k/a+6Wb1fWSKc8Owj(I?r}_07ZNf3N{Pb_SG:fo=$&_');
define('LOGGED_IN_KEY',    '3=9Mf ~W,5RD?R&[@UEB3<bRt;fMw/dxmEVD~B^4S)!$cCfQFFHXz9hCmB$yrq%*');
define('NONCE_KEY',        '<hr5nqtIGHmKR37P( uL(YK5%)sGkW[bwj-5}l9-`xn5,NdwbGi+7q^/Qy#etpHH');
define('AUTH_SALT',        'lPC!%4<[?W]2dl9X3Maa+V3=R^Wv23nR(tkZ_D5$zr5{U3 j]iNWOK]hNeEL0!j<');
define('SECURE_AUTH_SALT', '6&$C}H3PfuB;fEL;ild&/T#Sy&M}H+X{~RI5?15L^:[8c/sG$5|weAFlT6HZ+u,X');
define('LOGGED_IN_SALT',   'K0WOwL~}(VY},E5![vH,=f2+A.3khC QP%4n:e_kk,<gJ>N%GKOtq%D8HLl=c,Q6');
define('NONCE_SALT',       'Q;LAyV?7R4#(7;*!NN0kW>eMeS_GOX5oD*q`G&t@}WGHj3mGd>=Ck/BX[B8>LRx_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
