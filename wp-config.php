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
define('DB_NAME', 'nsamhaiu_wp00');

/** MySQL database username */
define('DB_USER', 'nsamhaiu_wp00');

/** MySQL database password */
define('DB_PASSWORD', 'uS!0Gp!q92');

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
define('AUTH_KEY',         's5hljatsxmxv1iroc9ifugyszwpx9t09y0g9r5qkgycsmejtxss5bz2aajaaylhi');
define('SECURE_AUTH_KEY',  'txc4r8vzmxbvzro6tfncaeuxg0acbxcazv0a28zvtrly3us3xpflikiyjgbuoli6');
define('LOGGED_IN_KEY',    'fshoijgku5m1nri8dwhmtxwilkjmrdkqiivgdufuavmmn1kt7jkoqfxctyz0bahn');
define('NONCE_KEY',        'geymkz1jo2ac3gilu53y9yo4nfymx5xz2e6cr6ovbtjlhrz4msdhcl4ddrh7g7ij');
define('AUTH_SALT',        'yu2rijgiht8m8bruaetstbyhyzpoq43jo6cqklp1ahra0nuyz4tqynsev3mkjk2t');
define('SECURE_AUTH_SALT', 's4xov9hvgbjlsj4jaokqcamboezjmi3qidchqfvewcvagihdg9yxqclwp5h7wqve');
define('LOGGED_IN_SALT',   '912ptpswi2elkb5obwe6g89vqbgub59vba5wwkfnxmcebpj6kqxbxpc6l8pg0pah');
define('NONCE_SALT',       'oe3gedmyotuzl104ifndji2llnmyenrcwdvlapzsxizkf4fmz4gg2op7ak6kj85l');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp00_';

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

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'nsamr.ac.uk');
define('PATH_CURRENT_SITE', '/site/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
