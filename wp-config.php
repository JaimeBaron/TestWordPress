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
define('DB_NAME', 'testwordpress_db');

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
define('AUTH_KEY',         ':+E$2%ug#JPH^@_2? Rp%wm|j.DMIp{ML^A@wk<E*u#4S NdeeNR64M_@nB=5HVS');
define('SECURE_AUTH_KEY',  '/>:Yo^SfgO5dLj,( DNlI^lIJY&Tkz[XNrK*2L}{1fyuBd%O~EJ4~;os4$2PJSdt');
define('LOGGED_IN_KEY',    'Zw9uBe;LjIP(JL4V4b=:;!eB*t8gTsrdD[spb)2mh#~`M]L]#S!EJ_S}6e(1d6T`');
define('NONCE_KEY',        'b`ryBs6K<[!_cHo$y2z ub2@!nF<p615,wNq1ne#~ga7LM+j:2{8YHGGxbg1)lb3');
define('AUTH_SALT',        'k+$>03==Wz8kJd7 dIvN!A+N0e%TaD7hdJDZL>XY{=&!lz+4L82T)eXmSe4P,P#k');
define('SECURE_AUTH_SALT', 'A6k&Z,IP*;|VBo%d=jA/Vk9-Il=LJPiv1A4J.U/ ~Y&(;-Ct`Zm|Z+Ay@]DX((-S');
define('LOGGED_IN_SALT',   ' KPVN;bI$tVYS6eFthz~MtG^w<X9W~]-<Hq.otnxlIg(UL=$Slivyx 6?&-8niy_');
define('NONCE_SALT',       'S[&jsOt.4-*>?nJ.9|#yVrL+U`)igNuc-c}_l~^UUr[OVci}e<8D$V_X+P+cpaHQ');

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
