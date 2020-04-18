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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '12qwaszx' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'bjhvto(Om<5V:TU,CO1kod&X46$xU,p0a(@QoeJu#}|Bj!-r*m=;7-rT,#yda;~4' );
define( 'SECURE_AUTH_KEY',  'HF1jh=K;I{_Y&+>Tl=C@(%M.$Y>F;|-LWZYiel8K^s#sCwyfTOa?!S)jZrzTJ]!6' );
define( 'LOGGED_IN_KEY',    'jf h3u[Ubq}nCf~c</<h_`!P|=3eCSE-+TO/.;6f&53}_Z]6UruM-x,^81LE[[0w' );
define( 'NONCE_KEY',        '.4PU_2vaxSm]8^TZ}x,0f?-:W!E0Gs>MDjh[SVZ6XK3X}egazd}%M9VJdY0P;:bB' );
define( 'AUTH_SALT',        'H{ASX2>X&T p3)yPJSyNtt@LuQ!Nzqd+#ke(uMa;/jjA`Y@qs45[i4}uv-f&lX8f' );
define( 'SECURE_AUTH_SALT', '&,X ,f{Qm,t{+nY9ya3v$TRO_1bFyE4*s p};yo|;^PwAz(dLzlLTd9 |>~8ng};' );
define( 'LOGGED_IN_SALT',   'C$zLqkN)F[z,^pfMjrNl@ap+qy{+quiS(/ecS0~t<l`>?xKO<H1b<.GTBSog_K^l' );
define( 'NONCE_SALT',       'HW:QY2{l~/JG#O(,@wF.E*v)9f pI.8=_Tbtg86IL(;FQ+AZu$m9Q8&@P3PI`z6h' );

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

set_time_limit (60);
