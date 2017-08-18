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
define('DB_NAME', 'deviget_wordpresstest');

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
define('AUTH_KEY',         'v_/=Y_0{qxC`|%#a3_eVy{(cu8)Mt<Lt/*]>_W(r;%JH8QR~5a^-kbP`Yb_q_+D1');
define('SECURE_AUTH_KEY',  'SUSvww85^BF[]JQTKyp2srO-0dd$kf75,N=)V2TijS1C)oVK43}6wC#(F`VR)OK;');
define('LOGGED_IN_KEY',    '+n]{?,.Rv&+&Y_S59&ZC:qm~y4|>j=,%K0m0AQTyTUXu.y()VydC`=eYMQ6p:9]9');
define('NONCE_KEY',        '7l*i9(sK1Z*3[7%%&k3<l+<]2G|e6IM2l*iMeX>++ROjy#%,CgK6.5WFJW/^~A(`');
define('AUTH_SALT',        '?g /q-e<o,J_`AbwP9yLJ=VJdM<<C}xk8_D Hv6C{r8o[=;!Rm4jPytqY{byN@3g');
define('SECURE_AUTH_SALT', ']SP/P/]oK4J2ZOlc__jI(I&BZ)a~ugguOl/?5$BVfaiUc5CENP}i;dVV;9fAc8iC');
define('LOGGED_IN_SALT',   'f4ygXOhjsKWnCO/8pD #k>T&K&B,<@L}x_ybf(-]^~D(O[$97W`p.R$Y.C(@gg0L');
define('NONCE_SALT',       '1/g-SPI&R)3:U,(pp@w..7g[uC]_Gurjd(qL~Wd{N{`aN}?_lUJ_q^:3$#F/(M>f');

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
define('WP_DEBUG', true);



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
