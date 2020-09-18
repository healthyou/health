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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'epiz_26656600_w468' );

/** MySQL database username */
define( 'DB_USER', '26656600_2' );

/** MySQL database password */
define( 'DB_PASSWORD', 'p0w2@[6ZuS' );

/** MySQL hostname */
define( 'DB_HOST', 'sql100.byetcluster.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '10fvmomzmgc0gfqxkujgij9xbbchbmgt25jtlf3d2hortkouhxhtyip8xdbfu045' );
define( 'SECURE_AUTH_KEY',  'i1i6ayxsmqstmi7t3wujhxrdwdkaszyv70nibplias5rdifhz9gundg86ko0fxbe' );
define( 'LOGGED_IN_KEY',    's10oi0jtmlozmyrlima9wy9op63q6azumnkm1gufq76apyf85dyhsjyj3vxeqrxy' );
define( 'NONCE_KEY',        '8uvqvxjkz48m7qpbbbbtyefpxmogmwzyzci28ey3lrhyezbei24nfgq1azs1ovri' );
define( 'AUTH_SALT',        '24qn3rnbtubulx7ge8mbmlzeaumpziax9syapkef2vfs2bfvn4sindfzvxowmbwy' );
define( 'SECURE_AUTH_SALT', 'dyxxr1dcuetoegq8vwrdahiwut7jioyvdzbe6cii4zta4vn9h9aibcpxbeme3uhw' );
define( 'LOGGED_IN_SALT',   '9oc923h5mf5vkfnl9xoxzvhblli5qb8ioeuogjgaypw789s1d5xvo9bsv4tzhykk' );
define( 'NONCE_SALT',       'j4bkylzuodm4zpnqbxsbnn9yqj1wa3adkfxcbejbhtimc3mlzxwgaku6zk8vc6iw' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpyn4s_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
