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
define('DB_NAME', 'crossfitcal_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'local01');

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
define('AUTH_KEY',         '6 eE-&4;POe|V%/2gc5G|-~Mm7{qw|xJP!wr{0*<`HuxUujB-H4`Mk .~]5xK$u=');
define('SECURE_AUTH_KEY',  'Qdn2`*w4!HlGVLFOwMwdWC+X%(;cG}8H#uu1WzjPw4u^MQG#0Z-<e{oTq-&^,YMD');
define('LOGGED_IN_KEY',    '7X%]@9mtN5[g(m*g-9KQw/fGK&G{Af&=u-zg3|3vK&MA[BZrj+krYGLP r%QP]+T');
define('NONCE_KEY',        'F%H/=`MmY%VbS,ctxwm-ybrr>f}Y8li.N]SoYjv||5h|KeC{Rc;^Wk30 R}5-j1`');
define('AUTH_SALT',        'pxod4huW/B`*W+K.>F h`jpde|L{R*e0^N1Kk|;u5rbUmo1U$t,qhYC9+um-]dGZ');
define('SECURE_AUTH_SALT', 'u!_oy/0+9c|?^+/N}qtyO.oh(8h{Et#Hwp8@?xQbAe,cB(ep{8n*3xgyQ5hm(k^U');
define('LOGGED_IN_SALT',   'NQ>bpM@<{/7Yw0##km/sc,NxM|AFH9^LIgLA, IUo/tBo5&4$BTb=%tqWDV$B=n,');
define('NONCE_SALT',       'C2N/{p9?mR.D  !E+`V]Xb@M.*!SA9UQhvTf7J%[]>j_TF@o@]5x4.:j]jq2Y40=');

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
