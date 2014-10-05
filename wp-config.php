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
define('DB_NAME', 'gerikpet_wpbhc');

/** MySQL database username */
define('DB_USER', 'gerikpet_wpbhc');

/** MySQL database password */
define('DB_PASSWORD', '9.TP[SPe61');

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
define('AUTH_KEY',         'ycftztwzj4srjt10eixyvg9lefeqbg9cqunufuawtplmqxgkuirmstf4bl6lq0hh');
define('SECURE_AUTH_KEY',  'ogskugkr34u8o8z7j6ckfcn08dmdqhemxobmwqlx1jxq28uxne3zfmxdfdg728fp');
define('LOGGED_IN_KEY',    'fywmd64slzwlzbf3gvtnwkogiq08fcueqy8qby4odnmktucpuo7miursfiwvuhxk');
define('NONCE_KEY',        'eulqtn50fsxpysyygfxkrmc8y3gyqc9b5bzqljsbcgfwmrq73jqrkmuenrskrurw');
define('AUTH_SALT',        'igmv697ijfrq8kwetibvixdokrxu936xfvgqvoieg4akeftbdeu2zqfvr47pa2jg');
define('SECURE_AUTH_SALT', '6wqyshhmqyrhmrhmzmepzwsmpwqqjttt7fi0mo1owiuidkphecndxqmorxfkutix');
define('LOGGED_IN_SALT',   'ck0vkiz8iebd4prhhgtukrjghctt9fqamru9giuv3y0jffgnyukuficwnya0nmdn');
define('NONCE_SALT',       'oaznblbu5xihnuc86zdxrvrxymi0s35zgyapforevd6xckumqdjqmc5bkwwu2bry');

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
define( 'WP_AUTO_UPDATE_CORE', false );
