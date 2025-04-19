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
define( 'DB_NAME', 'gtzwojo5_prod' );

/** Database username */
define( 'DB_USER', 'gtzwojo5_prod' );

/** Database password */
define( 'DB_PASSWORD', 'q~erp4xCJs!J' );

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
define( 'AUTH_KEY',         'rX^v0>_qi%:IX>MR.OAb4Tb.b`;it@>c@{vLK_/JRm]5-vUm-Xrlw)uSh}Q{4z)k' );
define( 'SECURE_AUTH_KEY',  'D+HTf%c&h!v`GEzI;`G-bz1Vsf#Z{!8?;-2Kl`yA@$1$OLs=wd@vH2|8((}i>b}<' );
define( 'LOGGED_IN_KEY',    '^;rf|`[C`4LSIs.f94|]=% u2FxnU5d Es1<^H!0eu+ER84ov!DGxvB_IkJf,3bd' );
define( 'NONCE_KEY',        '|3&6m(x#sI!Y91tf8VvN`H?d~WcIfHsLR(f@~Gv*djR>z]4)!C5A+NYM1m*(1,[[' );
define( 'AUTH_SALT',        'BUmPi`1_]zq4[>%<na|?j<cX>O#7>n8l&>In4M?QECv6kbkybmFL&(bJ={*(F0I?' );
define( 'SECURE_AUTH_SALT', 'gdpw{wTPPNJ2OZUTT.z!?;)JNO@]}r x4Jxf-R,AvGz#.I.!|_WRBM,LEiRS,yvK' );
define( 'LOGGED_IN_SALT',   '}Uf.6okwUZW<dJ+$X@q2r0HKAl{i@!b A*UCDM8:uCTidj]EY9)]6$idKa7}no+3' );
define( 'NONCE_SALT',       '~.BMDzU(A^$u@!u.(b!f5QC-:U~5]Em`XZuE0{o^%`IxyU=F,%?RfQf,/*]t?%#q' );

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
