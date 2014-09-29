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
define('DB_NAME', 'bfpcansas');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

// automatically switch protocol in urls as needed
$proto = (isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS'])) ? 'https://' : 'http://';
switch($_SERVER['SERVER_NAME']) {
	// new url; active until migration is complete
	case 'www.benfranklinplumbingmorganton.com':
	case 'benfranklinplumbingmorganton.com':
	case 'www.benfranklinplumbersnc.com':
	case 'benfranklinplumbersnc.com':
		define("WP_SITEURL",$proto."www.benfranklinplumbingmorganton.com");
		define("WP_HOME",$proto."www.benfranklinplumbingmorganton.com");
	break;
	// Development Sandbox URLs
	case 'www.bfpmorganton.com':
	case 'bfpmorganton.com':
		define("WP_SITEURL","{$proto}www.bfpmorganton.com");
		define("WP_HOME","{$proto}www.bfpmorganton.com");
	break;
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>5+SC8|Qrgw`y~QDS^@irzY-6-D`bF+81}Gg@H7j*$i9#BSHQ$#=y9WXT(]hecM?');
define('SECURE_AUTH_KEY',  '!eZI%!$33~Q(%%3uh~Bo0UdCG^huZVE,8y!|qbrzJH2-~]VT`n9D#:Pv.>0fLFm0');
define('LOGGED_IN_KEY',    'fY_leZ&!/^1*4+/fyy?kTiLaE0lQndk})p7E(TyAe`_rrQzo27(1X&.{0]f7JgoX');
define('NONCE_KEY',        'zdp@&G4i67qSRU57%tXn~1PpWUyHvTJp2:pWDv+g l;L-2Eo: +^Z@|-ciH*7Vjz');
define('AUTH_SALT',        'Qa@jB<8>;~6>[tplu(reyV!(OF0f44)Z_o2k5g>lEEYf!L(VxZ^Ip*b/1Xm|Q{f`');
define('SECURE_AUTH_SALT', 'a|,MrD|sptj6P M4<h]L5^=6,OmCt18(a<89eR1|5)5(Qz/IUouImT&r6lr?Un`w');
define('LOGGED_IN_SALT',   'N)o&=S;34DAUYR5yU8&oiI^a:?J;J3R:~%#p<j X=fUU,(g!oM+~NzE@(YKRna1z');
define('NONCE_SALT',       'c|ciKUXS$?0w)6Y#r^a*s2tqwf4C1HO,oW]meH&=Z:joy/Dvf[:+2*{}V&|4 9y5');

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
