<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'websiteku' );

/** Database username */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         'bp!Z#Ep4]R-&u1w2WZ6-uDMqLJP5BJUy}$Pw,(|q+H_j|bOppj:3$!|*9:g}W?l(' );
define( 'SECURE_AUTH_KEY',  '`}:k}.(GjukTLmivSBA5bU/rbil3gg.M= bgwLx$.ZjU}Cg/d?YS=?X#rmf1T6!R' );
define( 'LOGGED_IN_KEY',    'c-M*QDs41fe:7+!tQ{-7#P?>`380a w!|SF*:ys]IV<KS<jzA.aFp]p!F4-4#p88' );
define( 'NONCE_KEY',        'lcep{sRV1ad1e8}!)e<M.lPz^(*dL%dW__WL8P#vT]hJzJ6%huQObn?!Bu*v~kqI' );
define( 'AUTH_SALT',        '3GeCgTNH=fmU&JI1or@b%Ti;a%~lYxEADm< EnN6R2B8#xq:muQ([83jC*Ey:V!x' );
define( 'SECURE_AUTH_SALT', 'g)^]#d39rI1=32D,N,mbqD.@P66SQXp3TZ[g(((M8y1d.+&WY|D{6^_YA+L_<(_]' );
define( 'LOGGED_IN_SALT',   'Q@RYd,4Qb|CqDRtxOdWYK4aeq*(a=2j?*ZlJR(M/&1f9veX*^z{l~<N@5q}EkFsx' );
define( 'NONCE_SALT',       'FWn_TXH4PlvXR=`j<(*d|m9&Rr4_#D +x]2Bl?J0)9XJAo2.4F:Ewr#BfHq},58}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
