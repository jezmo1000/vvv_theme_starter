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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sandbox_default');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'k9twq$0FWZF+WJc:z/-6#T(#`%fj+oq$MDFoi@/[gD&mXQL.YvR>/uu8?O|Kjc/w');
define('SECURE_AUTH_KEY', '-mk.om)@_ Jb08ejKTD^nP)0y`<U+|l<uYcL61JITu<JO@_-$zmq,pt33ydE[F72');
define('LOGGED_IN_KEY', '|U|s_z*xb_ocm5]c|{hfa.`aXkVbvY*m45NxV%FZ@O~4Go+>!l{F2`4b@>b0OV+e');
define('NONCE_KEY', '1zgj`drq}8Mo@{%a[4^:{{pLdM>hP5Db@Zlknp;%=tZaTM-N~e|x[Rra:nDtVFP%');
define('AUTH_SALT', 'rt|qBD2!mK||1F~@K*ZteX]+K3MxC]+pSsJmrO7o_nNp*8BGwqI_PQXk9Cr.$|z%');
define('SECURE_AUTH_SALT', '<Ev/FDFw349f{$p&+O]<~]9xsEQ&NMr(kk0LUQ>MR#-cV?W.,<![QA>&bG|*$RN-');
define('LOGGED_IN_SALT', '45s&vW*53Dim8yG@O@vUW)`q-s8$8bFrOZSPA^~~.>Si>t&r8(.Fpw>zT:|0;lSS');
define('NONCE_SALT', 'A>0vI%D:{i S%w`G[bX|=jMefp}K93c*aeK*V9Yd>Ji1MB./puFd|W}W_`lj!u(4');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

// Match any requests made via xip.io.
if (isset($_SERVER['HTTP_HOST']) && preg_match('/^(local.sandbox.)\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}(.xip.io)\z/', $_SERVER['HTTP_HOST'])) {
    define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);
    define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);
}

define('WP_DEBUG', true);

/*
 * Move content directory out of core
 */
define('WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);

/*
 * Disable file editor
 */
define('DISALLOW_FILE_EDIT', true);

/*
 * Prevent users from uploading plugins/themes directly
 */
define('DISALLOW_FILE_MODS', true);

/*
 * Limit the number of posts revisions that WordPress stores in the database.
 */
define('WP_POST_REVISIONS', 15);

/* That's all, stop editing! Happy blogging. */

/* Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/wordpress/');
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
