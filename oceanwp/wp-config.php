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
define( 'DB_NAME', 'oceanwp' );

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
define( 'AUTH_KEY',         'VG?;dil;=s OkJlm,qY?>hDq-z4t<UYT{{)lUc9&Q!CBvc0~{-:>EHFBpV-s7 0*' );
define( 'SECURE_AUTH_KEY',  'g&%^o=3hK>2.KK#sx}1q6cV@0Xy+*;?P.KLvQ-HYc})@CYXR/ArY?~OKBJ&}]^;c' );
define( 'LOGGED_IN_KEY',    '|wm#Om9:$l9t=*wMAG]%J8Gl!nAjg:$~lm6qd6kFsCID98|R3q8<53 jGs{GOn(%' );
define( 'NONCE_KEY',        'KXI4q`<5V5_Tv>{6uD>v2DG#bGENHlQLsHo,x> ^$(<[3gXqD9okHU)x8uu7&&g5' );
define( 'AUTH_SALT',        'qO2i$vgvB`{37H^%SezmAp_W?LL0^O@V(rM|~E0FNW.AqZ$k[KNZ#=$>N*;!OH`5' );
define( 'SECURE_AUTH_SALT', '[]D)I>^Fiv-l>JPUbvt6~0M5`]YR #3az{ihN>e[z9BrXR}?~!Hwj ?tH/Cxw*lh' );
define( 'LOGGED_IN_SALT',   '&>~NEzSR#rzvw;gY4wfa PA)fj&ti8h*ggJZ=`aKF$5_=r~r0@SE}<uyV&QnLCg.' );
define( 'NONCE_SALT',       'jT7rq$x$`B|P|;FQ]g`GH&_/9%Tyc2<Qgc[3_eh,<!RL]KB?w,55OdHA+J2<(BB0' );

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
