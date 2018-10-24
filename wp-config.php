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
define('DB_NAME', 'alexsharke');

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
define('AUTH_KEY',         'tiOZU^[vbBY.d(5nu#C]F@JEYi{qRry!Yz-^z;&+qa{=)A9QJx/|MylC>4r):[ke');
define('SECURE_AUTH_KEY',  '1<$12O1)wsK ~62[`);k~|Qfs7Q0Ek~Wo%NK0(JaUQ#G1=WMPz9v-/]1eEF;rmK0');
define('LOGGED_IN_KEY',    'h,o[QN<ExNF_Cz)|_~co5&E>vb/T`?>C}rMnhrvwZx}Rw%f:LC%6K3rl*{I3%Rn@');
define('NONCE_KEY',        '2!3zkn%w_?1N<7 LFl^}+gmagv|w5Yv5e@/bS!E:C4i>.zD084@?%)Q=W36/,rxj');
define('AUTH_SALT',        'Q&Gw`b:VW@OpxQVDr0=c~-Sw34>NwIc>F1pYP*T^3iP]q/>)W[2%jN(*p0p2JNL,');
define('SECURE_AUTH_SALT', 'GA%y.G:pL}|@rn4^0>#H3jlDYTW.:7QCjxpEw@(E] 3aj{KN._?;BK+-+.q1&r*c');
define('LOGGED_IN_SALT',   '?{-&s>&S7I$%1Q(yRy- S#kO7bp(PMx65*Y:[UYnBW`S6#GR u8Sh0vm#0=Ct,^4');
define('NONCE_SALT',       '/}b9lTerLzbOs%;n3Y%m`Aj=K<N>J(M_E2db*YYK]+9*qC,-S]>#i$y[k H:>U|<');

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
