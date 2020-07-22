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
define( 'DB_NAME', 'wp_urb2020' );

/** MySQL database username */
define( 'DB_USER', 'urbprt' );

/** MySQL database password */
define( 'DB_PASSWORD', 'prt190708' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'YHpUi@!o-$<~l!?M k$zeF=E8U<aiEB0)QW1;*7T#~WUO-C1Ty~G?|sq9b)Rbcd-');
define('SECURE_AUTH_KEY',  'Z?Y8-L/2bJ6}KO)NJ)+(/p<6?;y6INbR~ZI2GUM+%aXSY3OBG9W?O3$jvqYyc3fG');
define('LOGGED_IN_KEY',    '&+# Tyj`~jceu8CgO.W-gAPQ)dWsWz6)Qs;ltdBj Jxb<vr>7 ogD@s-885w4>4<');
define('NONCE_KEY',        '=S3,6<mtSThm{%Px3=l>tdUy*tV}?.>-Bai%7G-!&Ef*|ldA9x-+Qz@l<fSSt))[');
define('AUTH_SALT',        'hf,De7~<Hi[OY#NiJ#%gP-_{sqa{$w9&hr6)-M*I4GL4P->]<C>t|,#c,4~7!(,O');
define('SECURE_AUTH_SALT', '<_-~oz6r?}/kW|uBfV8vK!8HB^kq@jrKu`D0.hgf$}Wv*@p=L9&+rWH9QWUW%[Y?');
define('LOGGED_IN_SALT',   'HcFB`.@_0m=N$k7+!z+v&p<QnL`lxo*%zoL} v!onT@f0;qARq~<`/Uu|c+e>_f,');
define('NONCE_SALT',       ':^e(8Bkv[5|S&Y$+Xe!;#(I4-r):TBu_`yXv^eQVA$KACJ|(-SB^^SqY+tvU+VGQ');

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
define('FORCE_SSL_ADMIN', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
