<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'skz1963');

/** MySQL database username */
define('DB_USER', 'skzman');

/** MySQL database password */
define('DB_PASSWORD', '4TDJN2YHWwEM9EWB');

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
define('AUTH_KEY',         'Z8/@nTZ#dC5.-5=NKG#O~d$gzJ;GhV.ji,sSx=-Y9oh#U&Y498X9S&`|{o6^jF*w');
define('SECURE_AUTH_KEY',  ':j+xzU]X04`E[@-Cp3zu75)-mt[@@eTiy2a}o+M^X jD0Mwgnk+^/Be$|i-lLlNP');
define('LOGGED_IN_KEY',    'bT}-Y+^I[c,j<2._0-QHS+2MyuV7~4 W-y$d:_}|%(l%u( F{bjWZpaUS(/>l,3g');
define('NONCE_KEY',        'L4,g(9?{O;L,|YE/bzNS1+/85e!Klv bx|ikjzsob<% yU(MRFqgxY({,s..7Rf|');
define('AUTH_SALT',        'ztk:d<5&PbZ.VWEOD!h}-ATQlN1!/nU-fR/ax|=wbx=x M,D<n3J*!G3@j;@lNf2');
define('SECURE_AUTH_SALT', '^Wi~U<+1*6[WPIk,0!H[b>| Ej+9&hbCrU]U-IjEFnX>dLbFdE-=O89eNbZ9?zVl');
define('LOGGED_IN_SALT',   'ObyH(`SFakh#*we[ml$P+hoMqA9w|-JZu_f` )8mm3Ih?g9ULPmX88!!Bq]|>I|Q');
define('NONCE_SALT',       'p.4gj|lMu,Z2WAi)Q>`IkjE=Z{}>Mb|wbWBO6|nL&vEXHe#YE-Is94B_OMOds&&W');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'skzdb_';

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
