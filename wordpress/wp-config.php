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
define('DB_NAME', 'holic');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ',HAbUX^!H:b2mfq^r%SnaO2s|>(]iGVTf-  !v/Io][kt9E]vio<a<? epsuAWSW');
define('SECURE_AUTH_KEY',  'gRw~LHs_v6Mfngg(B%===vI1A@6!@0Z5^AJj$i-k*Da>4P_(P|u8:1@uX*Sx%VLW');
define('LOGGED_IN_KEY',    '<hf%!Z+000pAZ<P&7-6$)Ke%0F9oIc=u/sAJ~&+*/xA=w?Q)>{Tu+TC_~djSL<_A');
define('NONCE_KEY',        'UU<BTK,1$Ldu]S_Zh4$JHvEj3Cf;2#aP~qNjwtA8Gf}ULu@9nw=|lm!I6[fxvIL9');
define('AUTH_SALT',        '/[B>>Ydo:{u~Iz,=QO-s_X8}WN-Dp*1pHQ>SiPO)L%I6YJ@i7LsQ=%T*cHMqY:O0');
define('SECURE_AUTH_SALT', 'JS,i>C2.=^WUFV8D|lEw M3Anh29MdRxMoKd?ZcCUt>%^<9(oh{`^c)m^+W6z_Kn');
define('LOGGED_IN_SALT',   '9uwh*t[9pyn4<6-:ZeUx|S6~HQ{bi13N <FhVy&~h>ilV(N{8N .]6`DTDx]xr-?');
define('NONCE_SALT',       '[?A)pK4&8XV%mq`|$y_G|uK{YcP9Q==|Q+RA:C(M?3c^`d-%&naOZAHPB[IdB7+|');

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
