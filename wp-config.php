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
define( 'DB_PASSWORD', 'nimrodel08' );

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
define( 'AUTH_KEY',         'lL._}EI0hHm7aTZYjJgr3K{=WlcQ#;X|:mw6uqdA:gFD)T7OQ:99{Pb S(v]R{du' );
define( 'SECURE_AUTH_KEY',  '{`,Z{fY6$F6Q]cd)=q-^aeI;T[yo/J5^LHx/U$Q>O6ZfS4g kAAqxKk_B?nhax24' );
define( 'LOGGED_IN_KEY',    'w6m?7Gy3F3^WP01o!e U|Ch!XPJ=5WSZMV50q3Ec$>/+:j&qkn@[ApkUxlOiwy,$' );
define( 'NONCE_KEY',        'V,Msh,.~]RjnOu*[FcbtvJ^:TF6kFxqIU5J$Gf>09Y$L[#SqXaHp~/[3 y-%~@1&' );
define( 'AUTH_SALT',        '|kfjZ).?h;+.k~Yi2?Pn} jkXZCLV.W?[SRqVRu;i$*`G^9ha/0)P4)gS=DzkYm.' );
define( 'SECURE_AUTH_SALT', '<-w[P=@5jpR);eg(UgKZ4VTy`b1*Xr@^.#Qd]Q28!mWXZ>&x#fp]<Y)JOW3`S|q0' );
define( 'LOGGED_IN_SALT',   '7vU@O-? aP e=,,=uQ,!](L 7omf$VriN9Z%[f*n-]=]v4uP)P6{XjSU;)KGAw1G' );
define( 'NONCE_SALT',       'w@M#W:If].c8H[6-&eJwV&*RfW#8k3GRQLKOdw.`S2OyTdNp[m*SY&DpyQ&&1L`g' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdan';

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
