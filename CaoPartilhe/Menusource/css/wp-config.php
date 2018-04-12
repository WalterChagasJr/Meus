<?PHP
define('DB_NAME', 'dbville_wp');
define('DB_USER', 'villedba');
define('DB_PASSWORD', 'Vi11e@dbWP');
define('DB_HOST', 'mysql.villeklemens.com.br');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');
$table_prefix  = 'wp_';
define('WPLANG', 'pt_BR');
define('WP_DEBUG', false);
if ( !defined('ABSPATH') ) Define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');
?>