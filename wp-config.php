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
define('DB_NAME', 'The Neurom8ncer');

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
define('AUTH_KEY',         'yb}/2?5FkjpUo?xam*61>M`sxm vObwORH=`+4Z0*Ew0?1zfce8<fR(uJ~e0`=(=');
define('SECURE_AUTH_KEY',  'MmHPay`>BUP&hJ#`Trb5/e}9KV#FuQ`Jp>M@(uPd]gw(q;y^*G}@ei;R6y~07s.a');
define('LOGGED_IN_KEY',    'ci)xJn8^]zF.I)F~xLrm@H(}O-z~AuOo]q8Wr?:l2kV0hNYUF|vXp^J | $@hMR3');
define('NONCE_KEY',        'kl@zl0owaG{6b<Sw6UtuXAn9|%VR2&UoDB-_BqDR`]?E2:H)JBQDW#HgVm%B~(->');
define('AUTH_SALT',        'eT [3g3)twc^Cu<Up&k,#etd1?L<NB3-zD1j Y~+Q 2|fM$ovH~ZnS,:hC;YeC.9');
define('SECURE_AUTH_SALT', 'w8&yiii~r0^Kp9K1m>@u6`2*?Ah+1o+GlXx[tzOrE1h3l5b&[ee5]p_(l[#ln7Qq');
define('LOGGED_IN_SALT',   'OpH7=c!9db[IRw(0!uFT!4S%h!]VN[-RMKY 4+G}*XGaG&m6+H((?!1%[^uFUGa?');
define('NONCE_SALT',       ')*h8bK!mrk$mp)~e{!k4`Ns1lNd<ZFs?b]#1rRjDn%,f>1hNkg4g-BDh40EllD5P');

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
