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
define('DB_NAME', 'wp_polypixx');

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
define('AUTH_KEY',         'W%vg<@4918V+/w6$DdDrqy5bX`C[t^vF7Rv(]`V&dC?.!Jr3Yq?i.cJdqrTz74N%');
define('SECURE_AUTH_KEY',  '>6M>%q*_FBMmx=+i4ObqY@!e?fgLp:h=W:GlfnQnVNFuWaWuq=H!!lC]?A@ta(Q!');
define('LOGGED_IN_KEY',    'C3U?3~gM}nU%39f;=60tmqkr|9g8MhFf<y70eUnhWFa,yjeOZjSsB@41e5yv8H0H');
define('NONCE_KEY',        '>s|{(rK<&FUz[>KpK^@PFF_X_~3*cgo2QWt1,*ce7eyDx[7}KhX{<7|EzbX8uSDn');
define('AUTH_SALT',        'e$(Uw_:f`kl:F259kPB+A4u?7n]II5_|OO7Q&M-We?~E&iR[i^zdOK`9$]<A2^nb');
define('SECURE_AUTH_SALT', '6I;99A<!f+L8{c!Djqyt7fSs#V<<w{SP5#M_^9qZRn9n)v%gz6X=YuYQ>=57-E1Y');
define('LOGGED_IN_SALT',   'y=GF>g]feCvE{y%E@@1 rpH4S([5obJUlTJiPvF;-NcL_vMgJ 0wt:,bZq@YkFIM');
define('NONCE_SALT',       'AEMNH2] -vp=B>Y-`C21&UA,ePJ-S5~Jspo=vu90b3(0DZ5yQ5xd<@lV^oZ&CH@c');

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
