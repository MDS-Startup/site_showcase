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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          ',x/z[^EX)nwN]Uj?)bmdy:d&hlK$c^{ :]tDwIn</|~LDh}s{BU,M!U%y*Y=]vEX' );
define( 'SECURE_AUTH_KEY',   '&3[#+_;K<H UVQVQRPme@B,-y^j[c<1|W8%KEUaDy=e|Zu%XecV~Ea}kU6Tl{jC3' );
define( 'LOGGED_IN_KEY',     '>? >.A%/Qd4mIrV&Dk}1`3>HhQ-P*kHXV 0^5_3qmEGV[Hjg|$M[x&2g L&f$#.>' );
define( 'NONCE_KEY',         'Zyn:lG&}[$o#%iWyMMiEx2]KtOhOF8REPq`sk:?z@[<b^Y*.5()D10;@AYCEayC0' );
define( 'AUTH_SALT',         '4gtK~3hTk9G;>epb^.Z:3->Rp<fZ1)C4pn{7}:u(v-<}0Cdb/&(`@2QLJWb?BfO`' );
define( 'SECURE_AUTH_SALT',  '_&)7d3a)^C5s]#DARxv`r*b}>T#LzIR@sMjNuDMNj[,t_dNR}_zUGBPky;~iUg~+' );
define( 'LOGGED_IN_SALT',    ' YTGv8Zb!5-gJX8IhXcw/A1rPC6z}ybT7_`Ll,YX- L7nx?{hkga{Ce!ey^,3YSa' );
define( 'NONCE_SALT',        'ESDQrZP!eEs{pXy7aUB7PD3_mV^o1aA&#W:=)S_=Ya}t:b]Hzcbn&).xMRd`JF<l' );
define( 'WP_CACHE_KEY_SALT', '9G>QI7O{&=hV12Bd+`2P@ctb*LK<1HEDq45*^[gl.<i^b$S%xM@QkYBu8:%%QpV8' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'JETPACK_DEV_DEBUG', True );
define( 'WP_DEBUG', True );
define( 'FORCE_SSL_ADMIN', False );
define( 'SAVEQUERIES', False );

// Additional PHP code in the wp-config.php
// These lines are inserted by VCCW.
// You can place additional PHP code here!


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
