<?php
#Show Error
define('APP_SHOW_ERROR', true);

@ini_set('display_errors', (APP_SHOW_ERROR) ? 'On' : 'Off');
error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT);
if(defined('E_DEPRECATED')) {
error_reporting(error_reporting() & ~E_DEPRECATED);
}
define('SHOW_SQL_ERROR', APP_SHOW_ERROR);

define('APP_VERSION', '2.11.1.1');
define('APP_INSTALL_HASH', '08b6332e6da789c1ef8ce0ff3a4bc6d7b1861b31');

define('APP_ROOT', dirname(__FILE__));
define('APP_DOMAIN_PATH', 'www.bookactivitieshere.dev/iwp/');

define('EXECUTE_FILE', 'execute.php');
define('DEFAULT_MAX_CLIENT_REQUEST_TIMEOUT', 180);//Request to client wp

$config = array();
$config['SQL_DATABASE'] = 'bookactiDBamuo';
$config['SQL_HOST'] = '127.0.0.1';
$config['SQL_USERNAME'] = 'bookactiDBamuo';
$config['SQL_PASSWORD'] = 'l17uzRXIlr';
$config['SQL_PORT'] = '3306';
$config['SQL_TABLE_NAME_PREFIX'] = 'iwp_';
