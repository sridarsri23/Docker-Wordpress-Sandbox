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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         '9z|8EswXU7Sg9nKsY``H+7$6>8^Hf>!4/(uMHzbhetD%6h4yP|{m4GO `g; J1]$' );
define( 'SECURE_AUTH_KEY',  '{O-8{f:GYJSmn]l @xhLp@K.NG7G+c0IzKrN&*S `XJey+g+&t?sr|S%UVgqFPt+' );
define( 'LOGGED_IN_KEY',    '_Y.#C0xO>E_:iJ8B%oLD?f]zV8~Y]4~4+wf~+#CAfW5nlPLC6.[pv=j+=pYQ<o>|' );
define( 'NONCE_KEY',        'WPokzEk`lt~4J@6I]>eaiy38TXpXWrO~#hzyqej^ ,1|;(3)soTK!PYd_4+{hk[2' );
define( 'AUTH_SALT',        '%N*V]!GA!PBjN*`oj,Y27dHtox )lIR3XJAxj6OEh/7tJluGZbhQWA}@mGk MOWF' );
define( 'SECURE_AUTH_SALT', '1!^ARAzrDY)).8?3_8L2y7`-zATMCwO:|B4uk3XDO^P+-?Nyw&B&pychD0nLT9=R' );
define( 'LOGGED_IN_SALT',   '7u.pyA4oHTq!Z{CDe4i]2X*L/D2cf>> mt2#(e!>gB[GT6aqQUlearonh#PD/>g}' );
define( 'NONCE_SALT',       '4U-G{ PSH60Z)*OB~Og/mOF&3[DQK7!f5?8kCG.>3M1ZUYv}$_Sq=$_%3q@>ae|~' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

