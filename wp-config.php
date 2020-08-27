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
define( 'DB_NAME', 'new-wordpress_db' );

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
define( 'AUTH_KEY',         'DT,|+v51G.TcCk7`vKroJOJ#fzL2My X~Ee7Z@dBrh:~Yh6wHP$!@A=F3UM0u ,W' );
define( 'SECURE_AUTH_KEY',  ':y%L#NEM`ugx?<d_15f~y<Cgn~])K7^oc!rv)KUYzLaeI@yRJnQXfeS3ZTsyusO:' );
define( 'LOGGED_IN_KEY',    '*Ck(2fo*mER^0M6VZ]$Ag9yI4i1SH;C=Bj7-8* >Yf^NZ@8b==TG,{4:U9T9Of;-' );
define( 'NONCE_KEY',        '+)@[LYR=DSoL$~o0.9]ij~&G72^gXN88i}nBppJ>{iXBZ}1d}YMz1TV$Q]~({LPw' );
define( 'AUTH_SALT',        'PsM4jwS3]LJYrY-Blk%+pje`HRN9U;8.<W9^X`dancGYl5Kv7[x~Ux(IKE6]LSa5' );
define( 'SECURE_AUTH_SALT', 'p09EfyL.->`S#m&b !,Ey]B?yiIW:6bMBfxWR,=KD`6U%(]r9Hb+KA`h[((f|L`i' );
define( 'LOGGED_IN_SALT',   'd!XJ`#L@zQr4GjKfwI<ya[]nkMiJaf/&w_Q:fZMy;>^YvO zaA-Q|57TcU,6;&qL' );
define( 'NONCE_SALT',       'oO$4>q^+Nr+S;MRQ)zz*tlpf=p0=!w9G!M;ALe361*ZBLSmP,PII(}ouZfCs{g0=' );

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
