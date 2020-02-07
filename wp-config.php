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
define('WP_ALLOW_REPAIR', true);
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'college' );

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
define( 'AUTH_KEY',         ':zSsQ,q X -Sx_8rlJ-GHCpB+#+Ry^FMPwC(1IM5B^T%|w?q;Q8r`WNEScF7egD!' );
define( 'SECURE_AUTH_KEY',  'pF,n;z]h3(~$75.Lv`?dn}hb/Q)jR%Tp`&I?07B60he!31aa=A#A8XbSH-KA!,js' );
define( 'LOGGED_IN_KEY',    'H`]S_Zaz7a3j3:w`6H2fIxJt`g>9eoq;o?]AQz.p^R}T~{{.1j7-)u +GbnB3~,f' );
define( 'NONCE_KEY',        'O}w:<~opjlGzVP9A?_^];VDPU6Qtn8gcW]nLOq7p$]B1$Lv&|91Xj,5f?UQ[t46-' );
define( 'AUTH_SALT',        'M_/3!K45nb$yq+_zpN~( :P:Yya#,fASPH!AuwZEAQI&yYvlxeF3g1][SxaD>G.8' );
define( 'SECURE_AUTH_SALT', 'z/sR<pz&($QI;Pd6p,ZM?mv2mpNfweyCS,2QsQS3;/t>1V{O>a]t!BI5h+ ;8FFd' );
define( 'LOGGED_IN_SALT',   'F5@29Bf`X7ih/c)2&ssG#/jR@I`yK#Hd?6(w-xcs!GW1hX?<^%vK:Qwc~nU/h|<g' );
define( 'NONCE_SALT',       '~PYvV#{F[<QEwx;cdY2Bb}sA:;njN[,-0/=2qqUa>UC7~iHt?+kZ09^m06%/]J3)' );

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
