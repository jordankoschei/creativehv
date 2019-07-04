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
define( 'DB_NAME', 'scotchbox' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'yB0Rl7j3n)@Y 4v[~JBvIYbu<K.~= Hj8YkEU<k={F.<P&nX=kWR75Mbr=;+:w8N' );
define( 'SECURE_AUTH_KEY',   'T~v5~fe8#t2Al.WibtqM_%0}:vg]>[/(rEQ|!_ZE9zobF1}dDbx$xq_x}$6W1++j' );
define( 'LOGGED_IN_KEY',     '_)I+7;cdvyKo];b3FO7nILox,{PgXpj?nuIMyk}7q--jjZ]]<ExrYKqQl#WZV,x^' );
define( 'NONCE_KEY',         'z=1jRF79T5D nfC%&Zyz<p10N5qGNQ8`=XZN:N6ykzLYm@l+),}y_8DRz}LCHi%g' );
define( 'AUTH_SALT',         'q8vu& -COKd@0Yj{]=B}W5hbY`6lAHFqVG(Pp0ILP1Zua /+BR&}m%ye#5Tp=zf?' );
define( 'SECURE_AUTH_SALT',  'b+CYRt{{/tiQ<1J5p/O@ji~U8RWi8zCtM;%9`7gMdYwZt@*%n}0R6?HyT1Ge_!]h' );
define( 'LOGGED_IN_SALT',    'G2tU~,h!I=:FPMT`xu!mCW#.wi2hRhYE`bC7,f;+D9@+*ezzo/$}yY/jGB2uD2p=' );
define( 'NONCE_SALT',        'jTJ[}=oWLV|-V~2<r,7%J978#X=>Y98ghd.Ivo-#)%`X`e 4DA}FUfQGHw5)%V$M' );
define( 'WP_CACHE_KEY_SALT', '9XjW$Kmnjwg3~&|FwT$6EJ4GJ:eN?UjsrSeJ*q9/oVQB4(wvqN95k_:!Lt~>1AG;' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
