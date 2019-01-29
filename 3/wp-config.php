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
define('DB_NAME', 'wordpress_db');

/** MySQL database username */
define('DB_USER', 'moodle');

/** MySQL database password */
define('DB_PASSWORD', 'moodle');

/** MySQL hostname */
define('DB_HOST', 'mariadb:3306');

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
define('AUTH_KEY',         '96!oi3Y|Ll?yVTo]!9ld8i|3)2]cf3#n/5=#L45sq[*?0q/<kPlY7fnGq(%v@G*k');
define('SECURE_AUTH_KEY',  '0ZBs~ems[Wof4[&h]/| rVLUL]<#&3}@*<@Kl4RQXnS%9#O$*=}b;I_7-~@4ljej');
define('LOGGED_IN_KEY',    '7E*lFw+7nNQ)8%l8}/OBU6ny:`TVe$01q[70Z=UkWm?w=8nb3T:a&eWIs(?~*bc^');
define('NONCE_KEY',        '`2ox#@0%$0Vb<#L.;O984u<-&hw;}Kg]}>;n%EM,CKno)$|+!L_V7/}@L6z1(KN5');
define('AUTH_SALT',        '=5vXMIY@QI1*>]QA:Ba188LI*j~lO;CM8r /T7)+9*No2Jd3#8tM}ZjQS{s+l8HC');
define('SECURE_AUTH_SALT', 'm*BS$ou5Bfb3`g16fuQop*B-gN3vR!=^p`:M NjK(HK`wt;SdT1MOn^u4I9 /Z$%');
define('LOGGED_IN_SALT',   'LE*NVRO ~Jm}6k ,V31[&nQ:M|9h0i2Yo4hP/(IS((}/`ks7|l=uDpf b8}&Ium{');
define('NONCE_SALT',       'g@~n2VXHeoN2J3du_eCQq&1kEN;mwJ4a2~;Jl6]59s E@n@+cMp<kp$GSO XhCeT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
