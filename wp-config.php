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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'Wordpress_test');

/** MySQL database username */
define('DB_USER', 'rv');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'C$g3PtvxNVz~;%/~siVx3uryTFh3__0-[q&ch#g)4>$jHO^<,mw#H!unp!=.bjsA');
define('SECURE_AUTH_KEY',  '_)g%3b&2HtrqDy%;Jq[1,}+T#_[M7SBU!+x(JuqW)F|^@-l(pQq^RZGE<6=f^R1y');
define('LOGGED_IN_KEY',    '{AY5KyR1M6p:y/sm2oA,r`CzoAT[~P79aV;4s#a* -O:o</Q+:E-{S(k&a>}[#g]');
define('NONCE_KEY',        't{s$4{dil(}zc-e]cVsV>p~4,~KJ2]R@0}fc6&&Xf%70$-g]JvbS8&i4,+OFDU6j');
define('AUTH_SALT',        'qaY!&ORLlR>d(IB`&D=_$V?bXv30fXNHlW)S};+:!U=4hZ]s<#wxXVS2B|mI?57b');
define('SECURE_AUTH_SALT', 'ilw^IW@co&<i8o9[L)b9chVzShGNF-z8pgDl ogWND=@pU2n13VK?7`^QlYEc=Wk');
define('LOGGED_IN_SALT',   'y>>GVtNqA#:IUz3(h(Wu[^fIp#%tHTnJgz8C`v[`%xr&(4|=U$ou*uG*a@.H3B0w');
define('NONCE_SALT',       'N]I&K$5327J6iSYEo+yyDiIVk? ( Ipq~s)D,1Y&20{zSRkY<SmS6)&RGeZ6HWw6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
