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
define( 'DB_NAME', 'tarkarlitourism' );

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
define( 'AUTH_KEY',         'TJGp`f7x]6+t+wGM07Mt{Inj`T4DAD%>?*R^_3M<<{I=;4=|F=CYZq6Vu|0cf8fd' );
define( 'SECURE_AUTH_KEY',  '[`FZBx%t,pu1!Y:6/,*3eJc_gr)HC^3d2e?6t##hj6x$uJ^Q1Pc<jr9iC)|KXw_S' );
define( 'LOGGED_IN_KEY',    '[1kWO+or<Dn? Ol<4bD->o<SEg .4/9RyfV2  SkG_#-Odv]9a?f.jLXf!`X#wI5' );
define( 'NONCE_KEY',        '|8}7 (LObL*$GD$JK*f0y?q}m#[jQBO1`d/[H ~HwZhMwhpmCOL2yN)?) ?w})Jq' );
define( 'AUTH_SALT',        'Q4Ifz8 ce^~-9ObRUC9BP@iP;ge6PHHp}dH.-+0pUuJ$%Dh.pIDj{}GUUUud33Vm' );
define( 'SECURE_AUTH_SALT', 'Mo]NY.&#RCA(svXFwZ8N#Qh.kL2M!xNO^~0PaSJy3M0qEm#3J7&SpnTjiysqXyj&' );
define( 'LOGGED_IN_SALT',   'p:g=3-;k|,;-MPQ@+SVI!l^aBYEV,Kv79n0ad+PM,~BKv(S2s(|3R}6zwkOgFL?=' );
define( 'NONCE_SALT',       '(@$35a{g:L]v:qTxiF#8X]A`=rD!ddOKSZ_><,AGnB.0^f|No<):jZb_OUBjuRaR' );

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
