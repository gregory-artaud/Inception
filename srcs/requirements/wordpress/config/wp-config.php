
<?php
define( 'DB_NAME', getenv('DB_NAME') );
define( 'DB_USER', getenv('DB_USER') );
define( 'DB_PASSWORD', getenv('DB_PASSWORD') );
define( 'DB_HOST', getenv('DB_HOST').':'.getenv('DB_PORT') );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

define('AUTH_KEY',			'put your unique phrase here');
define('SECURE_AUTH_KEY',	'put your unique phrase here');
define('LOGGED_IN_KEY',		'put your unique phrase here');
define('NONCE_KEY',			'put your unique phrase here');
define('AUTH_SALT',			'put your unique phrase here');
define('SECURE_AUTH_SALT',	'put your unique phrase here');
define('LOGGED_IN_SALT',	'put your unique phrase here');
define('NONCE_SALT',		'put your unique phrase here');

$table_prefix = 'wp_';

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

define( 'CONCATENATE_SCRIPTS', false );
// define( 'SCRIPT_DEBUG', true );

require_once ABSPATH . 'wp-settings.php';