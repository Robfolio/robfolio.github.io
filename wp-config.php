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
define( 'DB_NAME', 'db_ruokogrow' );

/** Database username */
define( 'DB_USER', 'RuokoGrow' );

/** Database password */
define( 'DB_PASSWORD', MatoJaMulta23);

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
define( 'AUTH_KEY',         '7H9$DH*$H[@wIOj%5p3(6SJ9LJ1p0||/uP/BF9,{b/=v%VoFUj6QG2l[cWzU#&2p' );
define( 'SECURE_AUTH_KEY',  'k:ZIo>&kt]3*]Y?4%H~*D4PsMC/Ekg}b{a+<L>Uf)ft-@B|I99^7qT!JWiw>/->3' );
define( 'LOGGED_IN_KEY',    'wrf(cU5:[vPKu5J6v;p7tdCoN8hq_l;VG@)1aEZI sk@|BDI8LVwod!-{}yYpP,!' );
define( 'NONCE_KEY',        'l?(9XS=zLdm,b2^mx}em%.v3L:@)]N%1y[5%yJ osw&~rR`Ye]|_lg1,Q2B&mR[y' );
define( 'AUTH_SALT',        '1&EuIeLrLCw$~X1AMDN1y *^rVY/yzeS0O1Z=z>+&^SOiBF>8D,VUy-tn=AaTg_G' );
define( 'SECURE_AUTH_SALT', '3`hv3KrTD5qbZO%:fP7Jy~]0oGWy)bp%/_cK;ksA3X@d:1^iMaD$8#=~[-l=]U?[' );
define( 'LOGGED_IN_SALT',   'Vu-ZB6}A-:@?3$0(6%VD.SxyY9MQ85E7TY#/$~oJ[Sxw4ihILY8p2w<TOeyWw}p^' );
define( 'NONCE_SALT',       'NviUcM)4{XFCErb4{i+|{=AjLulr2PmE($gSDHz&vt|{X4/Z_knnyW@]*=rnFDJ@' );

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
