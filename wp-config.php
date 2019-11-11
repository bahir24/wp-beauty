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
define( 'DB_NAME', 'wordpress-beauty' );

/** MySQL database username */
define( 'DB_USER', 'wordpress-beauty-admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Wordpress-Beauty001' );

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
define( 'AUTH_KEY',         'Y-S9Z-n{6R*9iW8(nAit9QH/WC-r0B.%f>Bl~!9u:%R`pdP?4Fk+=:f1o3/6R+_8' );
define( 'SECURE_AUTH_KEY',  'IGE(hQPY.$M9bH^X@}ezULo~M,7)0dky7EgpHiS?)(]]r*MWc-b[1ZVEDpEBrNB|' );
define( 'LOGGED_IN_KEY',    'CDD-fnbqNbs3<DnrZpHwnB_o%n]3 )P9+L&K;y2p8acC;+>v9Gk)UZ~Sz2x6xVJ|' );
define( 'NONCE_KEY',        'AELf&+kC 8BygAN$7~o<^!JPf&oa&@-}LkkG=~Hq@eCPn0iD?a5K:`7BbHR-+b9B' );
define( 'AUTH_SALT',        '.748f `~9;1V3{e_]/pL4DA&_9W${VaUcU@Fh32&?j3jB{OX(R]d+JM 8vi%G$->' );
define( 'SECURE_AUTH_SALT', 'Q@PxhwkN.uld9M3GZ,dZ@[Y8xQrw,sv@Rz$LHyG()_Dx..$0+ojry< (bYG`1TAx' );
define( 'LOGGED_IN_SALT',   'gWX/PC7ZN`d/n,5VF.F3xzVwX>p&e!FT`EZ1F:3x/N)c,<u{7[MN-5|)PV3[+^t`' );
define( 'NONCE_SALT',       '(G`Ab7y)7Y#I=VYdmncdFkB~ex,{/RbF:;Wz]6U7gv89~g~TGQT`a-UzayjgW>4!' );

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
