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
define('DB_NAME', 'wp_sport_island');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'FRmIx7b34_');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'F&!Q}Y}Fh]_tZm zOwP;$S=`gM:n@FIohGv@q!U#o8Wvx^|49(v~t[it1>!1^/u}');
define('SECURE_AUTH_KEY',  '6PmOz9`XwEL5t$w-?(~QPo3V(i0__0M.&S0]3kO&{rW`N$yP-hlw_wDJW0%&Mz,F');
define('LOGGED_IN_KEY',    '4]hYn!ewp$tW*~&[fG/=q4S7lsb[jf8a1]5TA]B{8:6Gw 25]/,PKzqXbiN7`.;B');
define('NONCE_KEY',        ';:Wy{,NNAzG=BnUz U!ZqHi.UQ}*^@:BpM`Vrb!oGR(vX16x{}z{JFN9F2i=MUN$');
define('AUTH_SALT',        '#~fo2G+$Gf5?<H~@i#0)#,tY!L_|@;hPF];BUtTHu-.h]H6(@1ws=}}Blv<z;id=');
define('SECURE_AUTH_SALT', '25eYl@PF1)?&B~pL$A~p-D3k7s_Kg^[b ZM:lnY0E6FN{te,J;A`e]T{,o(=@1?;');
define('LOGGED_IN_SALT',   'pd!GB5C}j|<6=YdplD;p>t^ZFgB(B9s jPry/!wq5ccZ;V.#&c[n]=R4^7#pcK0B');
define('NONCE_SALT',       'MmtWY`bb*~=PlpV|PjI$<Qf:+GagHg|Q^hTiV.|4vnGjed^u5SIfolQ8C~YSrGpu');

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
define('WP_DEBUG', true);

define('WP_DEBUG_LOG', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
