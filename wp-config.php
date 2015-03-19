<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'swan_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '3K-+-=-8LEVRlwR$>$$6.5=}Tpn}[1i}}|wVya jPnL/W@Iz[+8]^c1}QBz,tgx4');
define('SECURE_AUTH_KEY',  '){XW~G-mtqg<S1Hod`a>MWxq!nL0Z0+5C$4LF#$x||SA?{Hngj:a}QnQ~~s&|7%j');
define('LOGGED_IN_KEY',    'Frs6YQx@>@!D(-ui,8r1*?`a~A8Riv1l3dR|oP_-YH|M=]}=Rds {tpO6=YzR?gK');
define('NONCE_KEY',        'x^+w(EOM`0E2NS$5}42^Ip5.iy)*WQ0w.qIgZF%.0U^~;Jk_,80-SrZj~iH&Jb-i');
define('AUTH_SALT',        'g-}ok-i~H,1i4H tO~<$}m9Jb=Q91IM[/r!g]fN>ET(-^zLxk8[ m%Ar{Yh3E7.C');
define('SECURE_AUTH_SALT', 'W:@RU4qVJ!BIm>7@/SL?8=,Z.3MP{FylJ1{Y+Z5^[^pLtrl@8E_b?@S7OhTV|*|A');
define('LOGGED_IN_SALT',   '6-$0l@%OyQP<7nn;;43K|_@>;X`>tJ O^-Q2G}C{.GHG#BAMd#0{UP5FJy+o;L:b');
define('NONCE_SALT',       'Y!h_7l5O1Bm:I&i-at1^NZ~jgs<k3-Mc;%;pBMRvK~<{Y?]va;~/9wOPfz|]Q3N8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
