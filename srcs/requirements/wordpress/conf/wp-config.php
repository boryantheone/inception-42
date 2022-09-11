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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'jcollin' );

/** Database password */
define( 'DB_PASSWORD', 'jcollin_password' );
 
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
define('AUTH_KEY',         '2/q9_PHHsuF{+neeJ<Ctk%ARv$P+DzG6/:,CD!?QCB9tJ2@tm@540Rad}$U||^75');
define('SECURE_AUTH_KEY',  'fd15Ith0sHhqx7OxE:Bm*TdMS*+4n?=Cgr7p N}Me3g:S7)-SGi99NJ+]b8Rp-J-');
define('LOGGED_IN_KEY',    'Id!5|s[Ygwas;JrA~$@xiZ7VBb |TBXhCQ&9.@?9Own-hZX:!:_AS-0LKn,6:QZ+');
define('NONCE_KEY',        'r$wo!y0Qh SU|T9tC}lBV`-TsAATD0|{;3/WR>|m]X(/@jcol7fizXhKKDT8B6Oh');
define('AUTH_SALT',        ')Zm{,A8!OJQ1tCQ+-5ca{8ETn8iJ$r%tk&y_y,Y3eM]Qm-bf z6kIgBbpF|yef/S');
define('SECURE_AUTH_SALT', '1xF7Gi- @`18OI/w9+eLV/@m{4L{><|]:!0%K*49wfgc~R7r-^rOGt`KGx@A-;*z');
define('LOGGED_IN_SALT',   '$nJ|XDp6%)!Qm_{fLL($pOO#XOX#9gJ!fM7@*U+XM+el}8Q2e:AYdaNUw6x m-5N');
define('NONCE_SALT',       '6eX7]GcBI.Quy^^hNm:t9BTj8p`f(ppHaH} B={n-tw=6U2^rn&+2[UW*yaw0f72');

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';