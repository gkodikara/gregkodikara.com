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
define('DB_NAME', 'portfolio');

/** MySQL database username */
define('DB_USER', 'gregkodikara');

/** MySQL database password */
define('DB_PASSWORD', 'crimson55');

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
define('AUTH_KEY',         'QMj@lf8C~1=(Pam-9.XOZF|Jops=kjT%w+)k}pCgZD->B1,nU-*e$^G6}+Nw(,mE');
define('SECURE_AUTH_KEY',  'wo)HHly,tkQ1sA(DWo5%+;bm(y|.uJB$G.h]?Tnh0i~nDAroUp{,HK}6uAKb)&!2');
define('LOGGED_IN_KEY',    '7;r?CdJ=$)q&6#A;WP#bO6t_#6jk&7>?2zBP19%nM0%a:?cdg-3lxG|-AM~h|Jd5');
define('NONCE_KEY',        'AbnNMHYFR?ef2ywce[9QT8<5)y+k+SSMDL;<EHY:UH5vT8X?THXvE^5_9k:L+L#~');
define('AUTH_SALT',        'nAb8DcUC=ULVHykv,D0;o%K`!P6-ujr.,(dkn]WGfAO^#VbK:XsEer=|p/Zc10J%');
define('SECURE_AUTH_SALT', '.V#9H1|zC fC|ChCI&y&(uGZwkJ7_nHa:I/|-w,`BC<r1k=R+_H/&Jkz8|N*Ws0^');
define('LOGGED_IN_SALT',   'IQUex7+_L:-k>u#:|n#sWM#^Kkk$S]UIuDljvHqu3}BFz$c2Y4a )JtB2eA%s&@G');
define('NONCE_SALT',       'Fqq1QU3(+Q9Y8I/fAmM$aZm;>SNW|Ky06VsD<g!t)NM:pY/3U0RF96QmUG SL]|;');

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
