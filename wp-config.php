<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'sdm221825570_db');

/** MySQL database username */
define('DB_USER', 'sdm221825570');

/** MySQL database password */
define('DB_PASSWORD', '131789YCDlhy');

/** MySQL hostname */
define('DB_HOST', 'sdm221825570.my3w.com');

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
define('AUTH_KEY',         'ZrVyI5]fJ{#R[*V,9!utC 6rI^A,0]I+%^vL3zqaGS84bs?4Zg<dtp73,*C<tbC~');
define('SECURE_AUTH_KEY',  'TWCuCVm/HW0FgYoS|5aR]qVFN-=%Ig `AC8jyPc#2Z]MZ{iNxBh^Rn&]9u%CcN|d');
define('LOGGED_IN_KEY',    '9Zsz}P<2eU/=y]d?z OwW)um1_B?c62k5p#lR,>(SejL#ks~]wOh6]z~78$tl|Pd');
define('NONCE_KEY',        'nK_|,^}{g+y:pND4%|tA@FKod{8pC%cE=mQH^qV+^oYrwYjrqH<^xS8BYPV`yc5v');
define('AUTH_SALT',        'x=uwAa~GYdiD>RK&9rvU.Q6+vph2`i)3uaCo606aXyA.Cp8<0qtO#h-^L8CQ<[2l');
define('SECURE_AUTH_SALT', 'uw0TF$|Hyr5OcoO@PTzA4^v&:OV?u:f%[k+Q))zTY/!:u?V({W0l2j=U/mC#*Kn.');
define('LOGGED_IN_SALT',   'arbQ4qNFtEmYgAP[2[dj*sb`ta~4gUuSt/Frwl<vb<Zly]DS977|xd@Pg`y/m*:R');
define('NONCE_SALT',       '.@%;fLbUW-)U9q]i35V7Q]YsRXo8@W,?wwP,ofq~NU8)g#(8Fr9+P?hH=YhCp(53');

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
