<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_thirdeye');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'x<wN=]:[l?~h~*)tN(yB0fLtPgo<Y _5wwGQtKJi9cW*k_D8(ey<)^4u:3`Mr5Xh');
define('SECURE_AUTH_KEY',  'Au?T{g{M(s|[Rdy3(24}L(iTaV9Xx{|Zx+--tk]ZE=7jY{esmGZ 8uW|#$4rjRXy');
define('LOGGED_IN_KEY',    'q2usl,AH1;HX0<qo&wtD%(6Ug<)1-bG#F*xGNKwnqz|To/^MRLL]3vs5o]<~,<[B');
define('NONCE_KEY',        'r|-n75,B[`(M1f)3&q#wdf-Hi+dj@y+naw;mu97[elK,I-j *yRr`ZBH]MF9*Nj8');
define('AUTH_SALT',        '0Lb7hV hpHSaSu}UdPPkyfAzfHB+2{S2StNB|QlL(k5MwlJ,Iv]U-O-i4s(UY0s-');
define('SECURE_AUTH_SALT', 'Gc1 ?1~a09G#4v)@K6|SAeBgW:,Ms6+nk/[Llo-7XEW*y&W`^RoK8|q+3JpS GXc');
define('LOGGED_IN_SALT',   'S>&KI<p=|O7:*DAikQi9V:URG-BW+*fT-mJis<s+O@==#[[C;jj[YwJ:X-0oW<eU');
define('NONCE_SALT',       '?:DFaQi:$pcq:B~l39 n_o^FC,P0Vxl=WaFcH[>QP-s-ko4<S_5AHTsHBn^N!XA=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
