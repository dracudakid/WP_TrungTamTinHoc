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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         ';^OL=PvN;iDsVs)c!R*N:~8}SU{&&hWeD)!t||uI5S*H^czMp!M}dO3f&#kkf(+:');
define('SECURE_AUTH_KEY',  'D,4f+HoT#$IKH%657vA>~h@ayOGxdd2[vR?~S(+mEDWa8DB|Y15Jh3Oy7L}PtRNH');
define('LOGGED_IN_KEY',    'sl+h.-`&1=G7UNb$]a2SkC>|^+28N<]G/E}h7sys{`T|*D)BWC_`xx(s[>MV;mb?');
define('NONCE_KEY',        'k+x.-=JoC%J<2sV/0{rrUV~qk;m/90ZOJN|l6_p/})O }T-,M-c=!H<,9G&$$0|r');
define('AUTH_SALT',        'te]i(ZU@;SW<Lpj*{-=>eY_9:B9sB4j7U5LL!@0!zv9*f5Ow{A|79Jj|,kdHpjpw');
define('SECURE_AUTH_SALT', 'X|N91^5?OKa>}E6y5`_b#8UfeLLbZ<K&5c}qgxc|`/rD_|u()T96$Ec6n/h{g*?J');
define('LOGGED_IN_SALT',   '?:dS ~]sp>bODl+kAe(iDf-vM%x{Z2`cYAqe+-Rx/KY^9c/`bUA@~<!(1:amer()');
define('NONCE_SALT',       'TMW] Q(6J8D(2kFgey;SnE8b)b-5#O+}E7<8m(c)@c=2Tv!X3R6w2Bj>u|F>^r>?');

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
