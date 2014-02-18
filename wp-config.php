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
define('DB_NAME', 'wordpress_blank');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Pc|NS>S0RW9<+9WvTVN k Cw&W~5GqSJ+F$Lx({?h:wpAeFB?J^<x`@r-i5bZ i7');
define('SECURE_AUTH_KEY',  'Lknu-.NQM#)l9m@& TO_F/I6fEdDh|wm:Gu(tcTc^:Q[ja2t#CMa+D/*q7[??(9_');
define('LOGGED_IN_KEY',    'Qyv1N$qtvDMkW{v2M|<%XFJe<oybvoYxbsusjE2gOj--h0_g|OLZ7{O~=O=lXlW%');
define('NONCE_KEY',        '_1sb~!5ft3/.=.%0qvS2C};WH!bBti*8+q8 ,k1KE31&jPg1V}@|q+ooCr1:3r+E');
define('AUTH_SALT',        '4tG@y}8V.C~UVIA[|Na<B%`|/x$R*EMNlk}Pb|4]cAtw{+n(=-{r9^N+NwK,qdxr');
define('SECURE_AUTH_SALT', '2>wW0Z$j|)-Cr<R9N|i|w.3!a>Wmo.~hyr4Zv^R}wCqalHa6FCGvp3p=7+Oijy-R');
define('LOGGED_IN_SALT',   'zW.aX}onYx-Xohp#]8JmiSnX?JYw_,0GHK)w-znH]gT#A_1yE~u XZi2/,.btt>=');
define('NONCE_SALT',       '.8$-cmP`]sMd/Z+h1#B~6UQ-<6Maz1wjpQL_9_t#|JagcQ}j+}_|8{8}Qfs8+$.}');

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
