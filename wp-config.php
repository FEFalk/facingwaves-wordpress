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
define( 'DB_NAME', 'facingwaves' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define('AUTH_KEY',         '?k/G@KXsGq-Jqp1i/Y0`@SV@5cgoUE%` Nn|igCUXa<ute8<3tm8v_ni17]^]9O_');
define('SECURE_AUTH_KEY',  '.@t~I2wR~]js!f~|vP>sU[RjB+b&O9f3/-1^sk7QzYT+2eJ<J+Zzy%c:--#;pg>K');
define('LOGGED_IN_KEY',    'l0C -0(xK,] Y/{0/B#Fe(hbW/14XS|Aj+eH9;q/xf|27B0?#t-nIrCuLk^XoR-i');
define('NONCE_KEY',        '1oWg1ba_K3{}:-XYqAk:Gk+?03-|-?.4y+~Vx+Qwz<H!g=n+`+j`1Sx/|+mJS+(T');
define('AUTH_SALT',        'A<U.m.^?|F{BLl*rc)~jh.*z!s%I98UIx4CU8$s.D=v+r1<Vw0jIqA-}Y3;LA)kr');
define('SECURE_AUTH_SALT', 'Q|$BQ_>9re8!nb0MX:MCbl|cNA=|%zhD}gtxCSs(JndU{-+^VLns8|vmDz*K{Y3h');
define('LOGGED_IN_SALT',   ':a{%)jzYT&YAJ>w-IyD?kd8hR4K1H/en3[h+Q3tF235=A+C%HO ,a*6zU31)?c2K');
define('NONCE_SALT',       'y{7g9Wo|`NGt&Rz3-!1&<h}N(=<*r<v1XSoXg.%>lAdBup_nC9I<yY=oE^^GQFg]');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpfw_';

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
