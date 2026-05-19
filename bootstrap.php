<?php

define('BASE_PATH', realpath(__DIR__));
define('APP_PATH', BASE_PATH . '/App');
define('VIEW_PATH', APP_PATH . '/Views');
define('PUBLIC_PATH', BASE_PATH . '/public');

$config = require BASE_PATH . '/config/app.php';

define('APP_NAME', $config['name'] ?? 'Jobseeker Philippines');
define('BASE_URL', rtrim($config['base_url'] ?? '/edrian/public', '/'));

require_once BASE_PATH . '/autoload.php';
require_once BASE_PATH . '/helpers.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$dbConfig = require BASE_PATH . '/config/db.php';

define('DB_CONFIG', $dbConfig);
