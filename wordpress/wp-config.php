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
define( 'AUTH_KEY',         'kP6?9`qocDXnx/r6RIn 3}Gi5F-nR&qDr4GB4$hdwR9?^E;G))4l,uAC:Yi<)#rt' );
define( 'SECURE_AUTH_KEY',  '-OI[.X50H7wO;+jP9J7~`{h$]H$[Zue3slnTN_l2}*ITuwW2x.=Fa^lhcY(xKw&^' );
define( 'LOGGED_IN_KEY',    '~_tn5L57kow(G@4)9s0,%f;-2;E##72-/Mu#hp<n2N 6w$= }]{?:@J[Uw1(I,@x' );
define( 'NONCE_KEY',        'r^Uij*<fq%jsY<<Tkfg[Fm46$/T0z;B8U%8.Pz&lMR%Pd/z3*b-o-53`FS*fyrDK' );
define( 'AUTH_SALT',        'o?iYfRdY@%V6=d@6C>oZ@5sn>UuWSa;fJabmF;$8{|J8]o;w.~7+q;+Uk3b=xK2L' );
define( 'SECURE_AUTH_SALT', 'v!m[S~1d@4rtQ>nJ`%y%g#CF lcT><2{ZuM)j}:JN,`i3EE4K$>Rl/)d.HSs. ou' );
define( 'LOGGED_IN_SALT',   '.sqA*y_`fXCd@Ry</CJyAQ )T$-VHDfrtW0qI#2//Au$MVa]-3_j0mzj;Y[qf|2c' );
define( 'NONCE_SALT',       'Kg~JGIWF^.)>>ZCyL^,*r|qx6J+x}q./pcxk=)R+*G6|`M!nOK6<a~Bp1(thi/&s' );

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
