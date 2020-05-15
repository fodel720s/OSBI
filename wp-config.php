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
define( 'DB_NAME', 'osbi_db' );

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
define( 'AUTH_KEY',         '7~Ln@Wwf5&$Xx>z;h p5[1(DEvaw~kK@[|qH8!-4V>7/0^?q9!;xy7g~!F|zqm;+' );
define( 'SECURE_AUTH_KEY',  'EtYa%jE2%*MF0bPn6eOK92Kcd_feLC#)u~g>}KXLchitX4zMwF9rD(5GXl9MW-2B' );
define( 'LOGGED_IN_KEY',    'wRJLXL00p9M>30N6?gMm016cY@^Q9}>XPLW 5ev*s%1~FtMyTx<Dfvh`-P%U{Tt[' );
define( 'NONCE_KEY',        'AwaK(MT?^it&!hD]-7<nqyVc,684Iwb&:CoPrioTD<2tb_[bX9&Rp`4%9Ectko/f' );
define( 'AUTH_SALT',        'A5=yiplzC,v0`VhT(0_7Y9jyn+]wZ2}`L*`fhr7}.u>h-s7oa{>l?~e3W#3QC%#b' );
define( 'SECURE_AUTH_SALT', 'Z jl2hcX!>KH?n{Tj2f`#BVfrWY3rLsR:6NqDCjM{Cf7g8. nAQPp7KLw]229squ' );
define( 'LOGGED_IN_SALT',   '.Gz- B|),M=LpAYv<SQ).lqpqr  ?KCfPpdS6c>57Afl]ic]3,c,!ie!9L`>Q?rd' );
define( 'NONCE_SALT',       'sVG<BP>`)@cf)i]kl!_s<H&A:b_q}PYSI/BMX#`y=Fr;s$@k1E(+ks;XPe7tg@Hk' );

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
