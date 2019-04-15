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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7QK3qfEjlFHKAdt2yDdhq9VPSNqIqX6mRoX+QNToFP2G1lhWex2PsNm2NeajUs+OQJdXnqCS6N3mFkqwLcnGfQ==');
define('SECURE_AUTH_KEY',  'Buhj7q97w4TnZbnEBh4Zl5wpku61EMcm/bt2kwIAD9+Wud4upT/Lt0SOnQPxOnxO2FBvb9jpKaFvMb9b3oXpkQ==');
define('LOGGED_IN_KEY',    'fX1DRHZwYkWBFId1paI8kIylZeMXasQyIZ1CRSdTVszOPWe/QM9FlS/mdIEMQMdMrY6RCsnZXzt66NpU4ZsGxg==');
define('NONCE_KEY',        'NCHkcG+hs72ufErAa5trdehYTlJpi8BXdcxC8h3Sq26ICn1GVEgFdDeJxgfuVCaVqEhyDgkTdv9QX+clTNZzJQ==');
define('AUTH_SALT',        'pxBP/WOEMS9U3j0IYs3IAHr4aScP7pl5zC95oFZ5wliZNRWUypF/tKRoK4uuznEicG1oBlNapoTFNwnnIQ/7Fg==');
define('SECURE_AUTH_SALT', 'qbiuyVE8oYLhMOAZTxK+RAHiKoTFifRty4hW356CMaL++hbY+YnfyoK+humU/rNPvLnP1qEq2DP7M6rE2ljRqw==');
define('LOGGED_IN_SALT',   'DXfDUd2Z8HbNKwFcvvfknqEgkxYHFnQLQLILUFzQKwZF7AgdXqE5qsekv78P4/i51zyXENluyiUgRe2HVMyOSw==');
define('NONCE_SALT',       'w6DH6fyAejVyxmPkM5lUiHuumSbZuRB1ht8ElmV9hPdHsVFHIaTxQ+T0wXf8/SmEocaETEHaYRG9wluHuhmMJA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
