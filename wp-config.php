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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u123962300_authentic' );

/** Database username */
define( 'DB_USER', 'u123962300_docsf' );

/** Database password */
define( 'DB_PASSWORD', 'Talktome@123' );

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
define( 'AUTH_KEY',         'DBkeV|U B57tl Kl}[X5x29S BG.FCGG]$G9`)2IwJ_F3qkCba$Xjxz.-ZRFdnn`' );
define( 'SECURE_AUTH_KEY',  'ke<hAR5;wxq`/:wN5x{i0_xr=J<1jfd}>gt(ZWK|=}_HE!+Qpm<PC8r6PVq9p`3i' );
define( 'LOGGED_IN_KEY',    '_I>oQHhy?$`NBI`F%Ikm.PfzQU`5`<holAWsD=ZS/>Y/gmIPbSUoK~M8; %:CGk=' );
define( 'NONCE_KEY',        '`eMF=1L{ua:f)aO3=yu,*m!DR4*7xfkHs!pRWwl+e&eE0B8]JcP#SS&3NUiPk%}3' );
define( 'AUTH_SALT',        'R#t4<Wo(,46:.IdI$XE+!RFML;c?Lcnc6o9CprGt86yW/ZwAIiZ3|=H4>@mJF-1;' );
define( 'SECURE_AUTH_SALT', 'HJgdl;Ut3xBZgz){Rim3.Tii;b9-5X]H{ FV7ejG 8?<M=AYHo-3u!UdszHF?=ye' );
define( 'LOGGED_IN_SALT',   '(l[fZGXjkTmWYMiEqkf.CbEZF5@X_/?c{8wJ9fIFCDNGR$@FY0*YDq#Zmd0zWQ7^' );
define( 'NONCE_SALT',       'f-yP!ocxXiAbspBM(mMM SzGaOhV>u@@9l)$@$q`Afz(#^1eU#8*a$ILY#4]g][[' );

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
