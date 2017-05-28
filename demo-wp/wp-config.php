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
define('DB_NAME', 'wp-bootcamp');

/** MySQL database username */
define('DB_USER', 'root');

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
define('AUTH_KEY',         '}Mts,ienBb{qDM_~NuRm}Xj(&nc%->.-+>JTHD?SNH|JX1%IxT3Q4}$YV!y),}c7');
define('SECURE_AUTH_KEY',  '-o=1kje]`8|u7xGHy#R/kO79M|YoT)sAkVr_SL6Ko]`S%PFEo$S(){5oK{~:pt;@');
define('LOGGED_IN_KEY',    'OT=|< _$|HRUqe7Krzn-C>z_#Z]UmYBvNaDnQ@J$kY;fXC6%B,9vDCsAR2bO(F{$');
define('NONCE_KEY',        '`Z]@27@G#Io_t:oiDc;]hD/oi=[~z:A,eo&._@L)k!h^m6X6VIA+(6hZQN {(Qc7');
define('AUTH_SALT',        'o[QB_mBpO+xy%f|ZBN4GSZ{l5w?zQ,jjD0PvPhU`SL-+T]qN}-=pA6=t%N*(6s=;');
define('SECURE_AUTH_SALT', ':yGo#b,S%&[$pzQEd!NQMRv#]LvO]00~iF3e5U%P<dE>,y@@swZ`T(|DUEP,]_hJ');
define('LOGGED_IN_SALT',   'Y_N|yRWR%) pVNo>2|c3mZ, p,F00=:LW?B%v7#I!=7[YiRBBex|7fdKd%v;5NN&');
define('NONCE_SALT',       'E`+S.{c0U^a0>Y}u`?;ZV]8g6qTFUJSRYNTDy[<>NBvP%o!boyn|cv`<,t%StyY[');

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
