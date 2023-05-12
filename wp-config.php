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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'assessment5' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'gID$uvk<NLXKq-GXBswm!yr*]!reLymav& ,I]?BQ[G9%,&+O*Rc p_*mLG+mIJ`' );
define( 'SECURE_AUTH_KEY',  'EU-^FoHYa1:hyO%}t>=q)3j+l$1}2b#WcV1f<GmMfi~=`c<Y3qYI+i:sT4}K]D*n' );
define( 'LOGGED_IN_KEY',    'h^[p1Ot%$nA)m9Ao)ss!=@jF Pokd&rG~$bYb8SZnUx!:>AvNL@.!>mMtJGwDzj.' );
define( 'NONCE_KEY',        ';Rc1S~>nF,&AFZ FMsk#;R2kN~#z9dYc|49Yt&CQ@cRqE<&QI@Ft3K~BRsZJ$Bx$' );
define( 'AUTH_SALT',        '{7Y3@??5r.]=<)pXpob~M[7tFg9=U3>6=f@7k?+7&Vj>4FR1fJ}/=I2iwMAUUmYf' );
define( 'SECURE_AUTH_SALT', 'opgh%b9b1IH*H;d5!kpwtI/]0y@57^j639LI9xlHgX6NZ{}sEJ~TvJ7X+J$Uz ]H' );
define( 'LOGGED_IN_SALT',   '>[ f!+{4hg`mEF,{RPgPwld?~S$8~rInv7_Wz)S_rp$C7^DLlg[O0L2 ;WdROk6-' );
define( 'NONCE_SALT',       'T-pg9hlHMYhct*HEecFiC(+709pK3DS7bWOSgS:2z?J[PW(vIatsGGTxTk+mUXq,' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

