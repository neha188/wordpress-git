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
define( 'AUTH_KEY',          ' 9@1B+T3xPMgJX!wl9?l*{94ApBE w*k62a i<}R$`yf^%@Ub.QC/,b=J#xK9T{|' );
define( 'SECURE_AUTH_KEY',   'j5(~(sXn!5L2ml@=12(}w;Wwps6B([)k];o$ZT/@? ]Y`gEd6BQD%<eW>S]{zz2!' );
define( 'LOGGED_IN_KEY',     '%HwH0^unzw0&v**{rrV.<.z=YG*(!:_5hUnN%ubVQ[6(4Y0so)%<y<4(m?)lY-O?' );
define( 'NONCE_KEY',         '%I1su}^XV~F>TrG_8,?(Xth]%-lpnAN(#0`[=[._j.[t,_gfMLj%vIMR4E:LJQh[' );
define( 'AUTH_SALT',         'qCw(XM/_Dq_2AX4AO2~@@>uwk,td*Qrqunb?J48?l14y12-Gj2*b3)r;a;{,U`3e' );
define( 'SECURE_AUTH_SALT',  'S*vMPZ<2Ntoep_6}Wo2e]I0:0UDi`XH&:%C~)#xHT}M4jfM2sBTh~.mP[f84NfSy' );
define( 'LOGGED_IN_SALT',    'mon[#+BiQib[}$x~<L,{_nb18*|-,`+;MfRvSiCUqq{7G qI>~_/ ghFF5,GlNQ-' );
define( 'NONCE_SALT',        '[MKYTM`I2Pmk$r>s)jx7NASYZF[l$2zQ!p^Oc7 Wr.<S)hTpq]b_iEbIdq> dQq,' );
define( 'WP_CACHE_KEY_SALT', 'Jx;|g4$XaYbtNnm0yfJ7!:%~ml(MR#+^3Y!pcT70wZc$Oto5rFP+AaUR!,W:JbXp' );


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
