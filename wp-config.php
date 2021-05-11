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
define( 'DB_NAME', 'wordpressonline' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'rA2)@8jPNHTFZGSLmHFl}`<GPcH:u(P%7O>4iRRr~6lFt,:hOU.YA7wd}pV9=cDm' );
define( 'SECURE_AUTH_KEY',  'wzzrs-s~$L9+;cWs1%X&/0crY84|XfV$)FN[y(@ekBRE$!@]_4%9{<A!]Sk[hIT,' );
define( 'LOGGED_IN_KEY',    'Snsh+zV%z#b<k;RP@g[2!e=e-R%go%vH8x%8V,!jKGfiktdF&-%+r#2|B@LyX61,' );
define( 'NONCE_KEY',        ';O_~=Ks8bIMCPz>2dr!=QSUMxGzuGFGLh3W~AU?w]kdg!G7|go_(6d.ftWU3?If8' );
define( 'AUTH_SALT',        'ac3Ko,5w3U$]G&  m#(R~}k w;~kw(Rs^5rK)syCswlmJMlO*1S5@,4XAS]1?:P9' );
define( 'SECURE_AUTH_SALT', 'bFDg^7vjcdQj:1u9Y9r81,.@O5y)GF[d.2K Q|%1:Gx}uGZA.Z!bs=sPA-uKN1[o' );
define( 'LOGGED_IN_SALT',   'E+~3a$; ? S|!N%,Y2NBY[^_ciUj`.dVi`+?fx+8<^mXctl=*8%4BWB?|;e+8TAB' );
define( 'NONCE_SALT',       'SA|kUcv@xZ){)e|aRjR,Ft %VqT93]NE(Oy,~;@[A_{s4o{%9pvUM$Y.q@|K wyQ' );

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
