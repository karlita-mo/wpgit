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
define( 'DB_NAME', 'wpgit' );

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
define( 'AUTH_KEY',         'Ji8ZyQMzy3:SoOW2wekoMKVb#Z?arHyhktU+05>.FaxY%@99>,B/C+nvn *w>vNC' );
define( 'SECURE_AUTH_KEY',  'Yh^dlf;#`$Ez]b:0bS/9(, kv1rnT9fb=aAIXjC5elPv>?1{]X7xKAF@h:z9s!}$' );
define( 'LOGGED_IN_KEY',    '<rGDJRPh|,9M_qw638S3Gf9wBDVOdv58u%9iue=8)<(8_v6{#~iAGc6V2tfZ&7;S' );
define( 'NONCE_KEY',        ',iSLq`n4ni5-0]yd9hH1Uy alw>7>hbhS@PdDg%:4go|mJf8Y+(V@YmKqWGu;EpD' );
define( 'AUTH_SALT',        'EQ+;fZ%.m_4S_Z8XR{JBp M?(Q~%o$}M&n :giyeVD/+.vp;r} B4atHBxmG`#lE' );
define( 'SECURE_AUTH_SALT', '#FU4Wwes^&>VIdHo:&V/U*K*A$2Dijl11G&9:B2plDEitJ,NgS:ui`hxo6A/zc:K' );
define( 'LOGGED_IN_SALT',   'kxBYa )UrQaHt>]bhWNo@[y7DMs{_(ylb,GR7Dvz|>3~a/^EX>2w.c2FG)u}zBp)' );
define( 'NONCE_SALT',       'V;q%fQpXN!~A7ouX%Om%MkEx#l-U{lnNK])HaF5u X+c|.b,^_]wo.v[3(3]!SdH' );

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
