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
define( 'DB_NAME', 'trial1' );

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
define( 'AUTH_KEY',         '?GS/V*MSM[}?5&}$O0kphC20UvMb t/n8zOjzP>WnkK`b!BIL>s=pEMCD[Di2tgU' );
define( 'SECURE_AUTH_KEY',  'm1Aikz.YjhR@FGYoXg ([<nrf%Ze7G[0KK,jXGXu<pG7?aCQCn_Yf&<-/,{f8pUJ' );
define( 'LOGGED_IN_KEY',    'E@Bzt&cwzBPs<)cL2;REJ{W{QT7MC{nDQf#;#r=0jSIlWy +DrqiL^LXW(S((ftJ' );
define( 'NONCE_KEY',        '^q2 l*-Aaq:f%Hf]Kj?S0#0m|,}Ofo%)SSx2:t6HP#];YwiD2as:sE4B#j0%6:T/' );
define( 'AUTH_SALT',        ';xp^>Z/H S9J-$4(D*9$v*3$k&W(*v%61c;%d=`3%Rw-7%j( :K-FvehQO6iWV1(' );
define( 'SECURE_AUTH_SALT', '^0$b-@{hXgY7q%3?JipVa?z`ceeEPdCL0:=MgGROea$<,7uUZ4?l_r~-;Dn|?YFp' );
define( 'LOGGED_IN_SALT',   'rli~KtnQo$/fZ&rQ:5AZs`4.wQE]nWe.%hhZ?!ztD.Ds@ et})2%T/ukm?+2V7wE' );
define( 'NONCE_SALT',       '#]zdYCn.[x.ioSb#@mrxN}N^UJ _*jM[Zb~4dpYgdS9C]&iSARE<[:UFQrB|!USs' );

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
