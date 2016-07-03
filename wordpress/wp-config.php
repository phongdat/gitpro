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
define('AUTH_KEY',         'mmKA KLiVTQ:tTqp[JLl;CquSkzO~Afcoo*]LcTB.U?~$Rw=!I#n3j;*;:rScs:y');
define('SECURE_AUTH_KEY',  'ygltah>--`):mOtZ?Sk[mn5^J!={pi`o=e6N-jl]-{lO8`1C=Uh@n&0V=QF%EdNt');
define('LOGGED_IN_KEY',    'ScSblkvGSg=?C?Wp<M)A@re$%HUxzuW%-Jj{Gc|VpsQ<br|wU%Mab8OW>10Sua4C');
define('NONCE_KEY',        'o4hCA.rTb9]>1<5oVW,*fgn_g@6c<0)B8`a w7LjX7x+daP;/7)^FX*#oEoy51Et');
define('AUTH_SALT',        '|A#fm0hd`Y7J0j>=KC&;WdQp]EHp?DJITu|~1eAqu@wu):gvH$[BGM<e(Hc~f_T.');
define('SECURE_AUTH_SALT', 'TxbW@949M-T?{I;Eay`MJ+#i(b$e4G*My.^$FD(G&)8(a<{NfB?<@_O,dum@&-W2');
define('LOGGED_IN_SALT',   '6iPn=A7!gMevmg^1ObLqcTs!F5 ]s!bZgEV+$6 |qkWt5.1<r:vHj@<nbYVahj(;');
define('NONCE_SALT',       '609<jvt>N41f}CvqLJg,hX1Ik3HkCjNd!<g|Oy8kDaG(|Q=~<c)>dk#?${~x&q1*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pd_';

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
