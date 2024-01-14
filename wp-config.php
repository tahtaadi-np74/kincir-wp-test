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
define( 'DB_NAME', 'wp_test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'UX<Tvypx|Z01f:z?#fR4jO2U3T+GTH$t,r]jDZ&#Bq>z$A@Ee!^lHOg^5.vVCh8l' );
define( 'SECURE_AUTH_KEY',  '!?Qn@N` %[Fw?X.!je&,d0PKUC?tVO0@;j>LZ>6jA|X2zy3#j|Cz]hlC=P_qREW^' );
define( 'LOGGED_IN_KEY',    'z@z@x60cOJX*--d`d1PV;qNS^*F[nVUs6=Bv|).i9nm<a)e*#>iRTC%WrwUAXf9&' );
define( 'NONCE_KEY',        'a.8mG!Z1%Sr.A|Ah!Uh%Ns,I^;8/<S`xNbh6yBer}g<ggt@_cAOI>x5(+N%BZH[?' );
define( 'AUTH_SALT',        'Q($~][u13AZd|FXGlL-3*T9y09K>BB09C:zQoY&S8~BfImD^oa1iN]*y:y|V_-YM' );
define( 'SECURE_AUTH_SALT', '[bzWs_P!vVn[+0u7pq X*D&]6#;?^CGW=vWC@beM([Z5^|!*yq4Tj66!GQ;cwnLc' );
define( 'LOGGED_IN_SALT',   '}}A-S/&qFnti{dzapMD1.Oh?>:t_LO,f+!kJ+V6~~Q+=CL{?sC^C|37l;w0N,iGp' );
define( 'NONCE_SALT',       'qj,pg,w*l{ZB_5B2oo>kxI.N$T>?=%Y6+swzx`%6Cp^6b6NzxkkB`K9Xf^Xu]J! ' );

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
