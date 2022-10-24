<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'app_db' );

/** Database username */
define( 'DB_USER', 'matthew' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Z(#7^vt7u{lS~_tS2L@gsEj3pMo%q+WGH_1D(SBWQ}(K3,Q^H62SBp>SM8{99|1p' );
define( 'SECURE_AUTH_KEY',  'N<DAjvz]D!`PeHn6es`kpnLK(c-%lI@!Vru]9yY&!MBl |GjlV(k-pEtxGHW2DRQ' );
define( 'LOGGED_IN_KEY',    '91wh+;UQ%WJM`w_8brcdOi22Z4?EWm)*~qp|]8$Jr;u!/VQ|=Soq_l&*-whhe<4?' );
define( 'NONCE_KEY',        'Ego;B?2%6FrHzJ/jo0.-Mza{O}{~72)x!N&+sUqug} ~g5,O*Y@jLzLYGoJ?q#uf' );
define( 'AUTH_SALT',        '-LAJ}aeb]h /`@4!]#V9Nt!N:<}MB6+?psA3~1+CFu[2ELaQwKZk|lG. 5< s{@v' );
define( 'SECURE_AUTH_SALT', 'uOZypH40-HLhIYM],*L<L4rx6o.|iz87d=6y*6`SV1[i8v+fKoe+v1HaM]z|14c5' );
define( 'LOGGED_IN_SALT',   '-yPeiu6aLy YH6nLLCM{T]y1/RI484zC}O+#U4,I9iqmmDkCZza}d.H,;ktEzkj=' );
define( 'NONCE_SALT',       'GFO`78$X]-JtgBGIv#z 6.=s80G0;g*]6Y5&w*PJDZ2Mn<~I(m&*D)!`5?VK-fA|' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define('WP_MEMORY_LIMIT', '96M');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
