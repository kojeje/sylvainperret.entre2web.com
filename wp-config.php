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

define( 'DB_NAME', "c1_sp" );


/** MySQL database username */

define( 'DB_USER', "c1e2w" );


/** MySQL database password */

define( 'DB_PASSWORD', "Kestufe12" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         'Ux`g!y&:e{.tt;vL;Avi9w;>cz8Z,Req|AU >c+PCr1SAMQE&-zxc4VdS.v%>U}P' );

define( 'SECURE_AUTH_KEY',  'S^)M2gQ%TFK:1:J-DOg]/^0B$ku}12=4314?9ZYGOJDCls8FXCj1Pnnr8!Gr|X?}' );

define( 'LOGGED_IN_KEY',    'o+]1,I/!{pN+8O~_IWZ[VJR]Dn]r2ANEqdx4L|*,*J9xt4(J:!cjIU4C.59M?:ZB' );

define( 'NONCE_KEY',        '|X!|mJI-HJu8h?zY$04Bp:H1CsVp[{c^5+ D.S9[;m52tUDBF6aZ824G!QkEIPY5' );

define( 'AUTH_SALT',        'xf0I.T@l`Ohp%XO=?dJ?%cp(q!_U}.]0<YBGU#j0SsORa=1Sv|x~f`f~oTt;?QM(' );

define( 'SECURE_AUTH_SALT', 'A%hKbl#o*>a@G+l$sY~K(}qST~;bE48,omsAiC4D2MD=XS$_%R!y~nqTT60-HAiQ' );

define( 'LOGGED_IN_SALT',   'TKsm0l-=-/~GT(YY_ E;Ei]=>$g!+[d<?#EuqBzrgKn0m5;^M/Pk+?M_d2N*K`cM' );

define( 'NONCE_SALT',       'n_|zgW5#V_djq(A;Pq1~tMHXQ&-b_4Z&Q1enxY3a~<hk!w.+(%q5k:=3Zm.rF,.|' );


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

