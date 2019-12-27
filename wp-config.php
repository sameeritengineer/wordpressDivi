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
define( 'DB_NAME', 'divi' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xpL7d9os6usCXMxCn8c0BBcJx60aToCorA6j5ybg2968tD7mviDlQYkQiwUEodSm' );
define( 'SECURE_AUTH_KEY',  '8DtRX1sEjjWJIKAE1xnNn7OuAK5L6XLFaxRG7OICxat6Zg7woFP7j8WgPk1By32j' );
define( 'LOGGED_IN_KEY',    'qp9174UW4eTtxJx5AiA8OJ9x9cZ0dIVqa7OpACvT3ZaUKZdCRobAA1lt0ewqwmGA' );
define( 'NONCE_KEY',        'dCTcdO2pA1JaV1ZRVa6ZsthraGBd9v64mYOSZwcYyaGjLbsuoRgcwk61aDl7Nw0i' );
define( 'AUTH_SALT',        'ZPFolA9R9MAQihrDg2AQ7erkdadh5ifGzPOmopT46lbHLoInUklOsEPxa2aN4GC1' );
define( 'SECURE_AUTH_SALT', 'ZQP6gS0N49aI56wNKJYjL6HdqCipav6oE6erzTWZD2l6HX771KXKMvnyTsk19TM8' );
define( 'LOGGED_IN_SALT',   'cFngYG5bl7vJfrfjohdlt476O2QAr9AbDK69wWkLcc9txRDFE881uUL3lTOK2aFC' );
define( 'NONCE_SALT',       'quWrGvYAD4QLpMYP3Qtoa3uYbpoKHL6YCoWPsZJxLnWRoL0djthhcj9xNliuTsx9' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
