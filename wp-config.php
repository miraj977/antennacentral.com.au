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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'antenna' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'E%L83{?)o9gyPF%D@V<%)8$d+#U=,o9:A|H2a-R=[Bp}D_b3_`k4[MS&WV$KrQFq' );
define( 'SECURE_AUTH_KEY',  's?yAI,du01_<v5@0}s.uaC($7gSuryDH-%p3vn38{B([0+=Z(!Wr#ll,s]&V%N@q' );
define( 'LOGGED_IN_KEY',    'E|Z18<!/9U_Mg,/P~s9FGlZ:0x<-..~*Ma:^My?w%1EIM?=rv}0F79W:}-W4hX/m' );
define( 'NONCE_KEY',        'd_:LEXE|vKltvK[I+kwXKUJp=$~dkW(9gctj9A^TYvC^BS1/EN2{9FhoyTdI:o`I' );
define( 'AUTH_SALT',        'OG$:^MdO:8I?(g-w%ru0ctOy%z9&dZx,(hB)XadWLNFJm6dG1-F(UCfxasea@$l,' );
define( 'SECURE_AUTH_SALT', '7HX%[e,1vfC4!0f:m351c[{%Jq$7%zj^?lB)*PS!eySw3@BE+[Rz+;zz-;6ZO#Y=' );
define( 'LOGGED_IN_SALT',   'd-5^nx8lx4ugy7nu[Mg6(I^~$RM,da<NZnkea9!5?H V>=RnT&0(OQ7f@^5_j.0:' );
define( 'NONCE_SALT',       'lg+RlaBiDC(qKsb#e [7MBdfkd07)+N)H=XP.,Q!]AiBuC8=.?#A=VPI,x_`sNEC' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
