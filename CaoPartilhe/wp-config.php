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
define('DB_NAME', 'caopartilhedb');

/** MySQL database username */
define('DB_USER', 'caopartilhe');

/** MySQL database password */
define('DB_PASSWORD', 'Passwd@pet1');

/** MySQL hostname */
define('DB_HOST', '200.147.61.73');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'utf8_general_ci');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '33oLrd<|@gSXJyr!6HR`=h>PzBT(f~=xj@*Z$/L:n;mUZ</))uXuiY;Pl/21C$Kc');
define('SECURE_AUTH_KEY',  'yp9>wGT&|YEiP9{;Gvqtt{5HN6(NUZbvqB{*^wH<(-~D5,++0-,YbGee~gqP`fr$');
define('LOGGED_IN_KEY',    'M)+/@;Aj/lZlOq$ujD>In2j18c,A<veMW-[8B35DH$62XVe#32*/JkxfXYUC.;`C');
define('NONCE_KEY',        '>tBsfSL#tK.{dg}A~*Ne:K+?nF6B47t?#JzKb`?eH!RJ6-lH@vkRzLZvKzB{UIek');
define('AUTH_SALT',        '4|Az_3{;eXu]&9*0[aBXwQfK?GRg5J@)@z/6l^87z-y2h6D]]7v:cnY-Vh6B|@*e');
define('SECURE_AUTH_SALT', 'z}(o*JB6LxREY$6Av?qIiR,g^<(QZ^+sls@]s?a)p6mKi$?IA1Cu1E3&rt[<MyT2');
define('LOGGED_IN_SALT',   '_R*6-1fa=(x#dRDI&Pf+i$/(/^Qn07n3xcL<QMKEF8EVQ[baJi:!bk:~3 e}+=e!');
define('NONCE_SALT',       ')LC/kn^sH7:DfoChP}mzk<4# hadwYfeA>!1:mPhoh)<skr5lZZ{YY0ZjZUUs]xe');

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
define('WPLANG', 'pt_BR');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define('WP_ALLOW_MULTISITE', false );
define('MULTISITE', false);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'caopartilhe.org.br');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
