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
define( 'DB_NAME', 'nice' );

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
define( 'AUTH_KEY',         '_24{`,A!$%=9u4HKyXa3!x<{tw1<-bmBZ)f2|hjo1oYgBls|*6Jcr#RG|!3D;vsv' );
define( 'SECURE_AUTH_KEY',  'I3zq%^J{}pwCf,gK#k~l;7WWr&dnPF&@{)k>&+&`Q+^RWUVzy.6?v/-*D 3f,O:|' );
define( 'LOGGED_IN_KEY',    '94bk<!Rb![f iQL1a+-A*LvK/=9<|nT#&<(WF+O[:{}*gdbqmgM`k@) po;-cx#B' );
define( 'NONCE_KEY',        'yi+70*/K7CV;i:yO,l@yt13s@1`AAWPBYsVppM=SraSft<sEZZ/KPZI.i0UC^ZWE' );
define( 'AUTH_SALT',        'B.%x9$An<0qY0:=e:CBqF.`Vq9LPh2JA1VX~$=,_C|m(rS#/RWc+fQH}b:Tt-5~J' );
define( 'SECURE_AUTH_SALT', 'jOGvD-pI,U >3KKl%JMwEEJcHW>]jF$kGv.@>K.bE#VFI*[*n0ZkK?hz9}]HyVy{' );
define( 'LOGGED_IN_SALT',   'Da lh7^>MxE`M`7llT|,hF.`f`aY!!b~!uRhS~?j(z>&3{Q#X-5j:dxjCPd+VxIZ' );
define( 'NONCE_SALT',       '/m|X}ch1u*zm;b4C<vk]2Li1 MZi#zc`1k0f5(D+9Df}$9>Yr8sc#k :J?wNTU)`' );

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
