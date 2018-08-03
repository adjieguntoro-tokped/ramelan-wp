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
define('DB_NAME', 'rrdatabase');

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
define('AUTH_KEY',         'PIyxZ1X&k2RjZ#EX@e[LP#f9l*1%`/-.b}wk%&-l/5Dnk*0X@PQe4|M}_O?8x8ww');
define('SECURE_AUTH_KEY',  'qB0 .bLYXah#MRNp7~Rg3U(ScwWS4e3oG(pkTyHq2GaV`](aFD[PX2hO5?JD|#Zt');
define('LOGGED_IN_KEY',    ' y3dQW5<F3D&*P&}}@A&DO|UYnfrx>z9S2bsyb3;Lj0;B_Fi #qU!kEI<HUu-(fw');
define('NONCE_KEY',        ' [TH.y2}Ee7lEG4Qgf2iR:5X#nISqn9.G[0{k8vec%@HC~Eif<:~SLb+2(mhpJLk');
define('AUTH_SALT',        'rKx[ m&yE/vCTqOEinDrKcT.]5MS4z%^4 e|4SMxth@HKd^jkFgvJx:EDp{Vr ?]');
define('SECURE_AUTH_SALT', 'Y/mY`vY8=vS[@R6{aLTFV0f50;f12QAX*2.urP|$8V/2^sfWL O<VP*nj^2p3)F}');
define('LOGGED_IN_SALT',   'Jn)t3$yK8rgRjc,b@d0(Z=<+cuT GP,n]HwpmwXv|I/{egDm;HwcH!XZ9esei Yq');
define('NONCE_SALT',       'f.5:k-vGbBu1!KODSf]^:yJhjjRziWWT0#F!qCbI+=i.C# ABKG:<*RKCmlwgi95');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rr789_';

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
