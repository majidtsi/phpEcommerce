<?php
#require_once "../inc/config.php";
#define('ROOT_URL', 'http://localhost/php-ecommerce/');
#define('ROOT_PATH', 'C:\\xampp\\htdocs\website1\\');
define('ROOT_URL','http://localhost/project/ecommerce/');
//dirname(dirname(__FILE__));
define('ROOT_PATH','C:\\dev\\htdocs\\project\\ecommerce\\');
define('SITE_NAME','project/ecommerce/');

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '1919');
define('DB_NAME', 'ecommerce');

require_once ROOT_PATH . '/inc/include-classes.php'; 
require_once ROOT_PATH . '/inc/globals.php'; 
require_once ROOT_PATH . '/inc/functions.php'; 
require_once ROOT_PATH . '/inc/authorize.php';
?>