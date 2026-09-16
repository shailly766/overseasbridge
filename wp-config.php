<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'u735483691_O3E4Q' );

/** Database username */
define( 'DB_USER', 'u735483691_UpzvX' );

/** Database password */
define( 'DB_PASSWORD', '5O2T0oi692' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'vM06NVC^9a+|Q9HNk^{{,D}%Dw9pxpJs],*>^R3X]KjAqK3[F`#cRTO-h9N$aY*c' );
define( 'SECURE_AUTH_KEY',   '=;wBy=ML?{d |O>2IxX*!3UX#x/K3qx,#f)0]<Mg%HMM}{Y/hE(~Rxx@Z6f[A]/(' );
define( 'LOGGED_IN_KEY',     '3pT>vkE-tn7sQ XO2^eA7[f_cnsf.rAC27|+u^979ksFSNA]U<@JMV_r)-+]TOVA' );
define( 'NONCE_KEY',         '8,:X`2R4.4u[Lok_}oe@vbQq9(wvh8!Bs/cEIT9<FWEMK8#%d9CF]R7C-%Yn@Jrc' );
define( 'AUTH_SALT',         'zF/-?:b4rmZA]g2Iz4O#yO#wsyeII_WIBzjr,65V7vbf>BERSC.N7lN=&*&Xz;+r' );
define( 'SECURE_AUTH_SALT',  'aY|:SCi*X;RRd8cyygGBPC =l/~e!fdG{#>&N-#XSgxV>Q>R!>%ZEgEo2}m0=2K]' );
define( 'LOGGED_IN_SALT',    '/Ot!*Dfbk*xGa2zux&KF5a^]+yY$x#?-&Vx zW4K~Y_s6-IT_nkb!o_;dG|d,m:.' );
define( 'NONCE_SALT',        'B<5-P;9DpjUC4q9GKa@Q3![K&Y=F:OCm7|zC;TsDM9-_2eJLd8k^inc8 ,41mfe*' );
define( 'WP_CACHE_KEY_SALT', 'Rc;@Dn-RkS4tiY%;-d:,6q(R2o<F~^PcY60h$%-Ow8$:`u=RZa4zGB73G.FNpP#q' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '4000a166dcbe4bc30cec8f92bff2ae83' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
