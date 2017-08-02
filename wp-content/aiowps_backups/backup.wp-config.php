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
define('DB_NAME', 'apede507');
/** MySQL database username */
define('DB_USER', 'security2007');
/** MySQL database password */
define('DB_PASSWORD', '-7-z0qND6S2o');
/** MySQL hostname */
define('DB_HOST', 'localhost');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
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
define('AUTH_KEY',         'gO_*/:+W|.fEK1]V!D=(e2>wG3,8:--%HxJx${+47FbAM/[0My5zFCQ+zY>:p15:');
define('SECURE_AUTH_KEY',  'Ii#{p${xb5-yfXZZ@=^-JNI`|dDA3LnUA2TR2] CW,!!$!_857@CUi/ywvNAP$B9');
define('LOGGED_IN_KEY',    '8A<:rB4uHe#.7n^1%`J} G}Moh8[v?:/JM<Gs06/mqDG!&c4h:dd3)qC-S#dMJ]W');
define('NONCE_KEY',        'OCPKz;-=jJC,Gc&N%#cW%.sKK|v#Dj@e=|^Ts/$:!]*,BrBp{>4|HHsb`_A&XP.C');
define('AUTH_SALT',        '/V5?3?e9F|uJ;<S Zd>p<$2g<A),1~rZIrbk<jh,V|`U4/mzQMWDfElaIv2OtlP_');
define('SECURE_AUTH_SALT', '3x,R~CT;#czh:{}DV7R( t(.HDA=D rdjg<&%CW(Qe[/N6&W*$|KNg<]3CIFj~MX');
define('LOGGED_IN_SALT',   'EPS/FR vSkWY -{|=ou6&a6!w%0Re+3T>Y~=Bj$:(D,XiNfC&_D^ N&su4JZWCl+');
define('NONCE_SALT',       'j-|cKRyfI<p8?fPKoSqaFb)Vlzg(]6<3s{H8A+)FWc^Zw:FQ~cu3s^m?YJ7(ohqu');
/**#@-*/
/**
* WordPress Database Table prefix.
*
* You can have multiple installations in one database if you give each
* a unique prefix. Only numbers, letters, and underscores please!
*/
$table_prefix  = 'wer765_';
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
define('WP_DEBUG', false);
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
