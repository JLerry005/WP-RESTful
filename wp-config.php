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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '>+Q4BVZ@qgjlzX+et|KIeCx(3HAqe3 }>DrMHIygG(CY w2y=SI{h33OxdszSz,v' );
define( 'SECURE_AUTH_KEY',   'p7zje)1 pq3&aaD]z|/m?H!Z=IltA<3YqU@1;ul+#.4`87w}9$<t[c.u^K5pEvEe' );
define( 'LOGGED_IN_KEY',     '-u~U{{|@GJObu|!DF[N@S=@nQ:+n%ZgK7m`&6DIH/Cn7I&tb^^hh^G2DG~I:89Xm' );
define( 'NONCE_KEY',         '*g7&y*c;,BmYTuRb2AQ7iKJQ<-(V! >#f9RR-RllGSrfte.%5?t,o7,vP}3IK$JJ' );
define( 'AUTH_SALT',         'RiU.cU|^r>3<Oj(z#=rlwm}R,:}}l?N&UZvSz>klPIem%_DzzJSyZeo>{w_P@tE/' );
define( 'SECURE_AUTH_SALT',  'FA)#;XAY2/tI2vV]!qEIU8q6WI!-fC(#61juNRC584#A|%RicdobRpyv8sf`&*qO' );
define( 'LOGGED_IN_SALT',    ':OBgs_Spky,G@h~PG{wBCRt|L3@~qE_V?5~$LE[s!6-`L[Q#u:MV_9XEQH{rZG5V' );
define( 'NONCE_SALT',        '}OfaW rb99M )lr9AqN-QJ,;{ 89J(,bg}6-`<-/Y&iI5Dw<=q?5?UHS^(UM!U1 ' );
define( 'WP_CACHE_KEY_SALT', '6F R:i*EnHiX*;v_xvL)yyMrP?x4)(Irb=x]0b!/W5ZnJ?r:xEqP+5>Ea60e%NgC' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
