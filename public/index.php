<?php

require_once __DIR__ . '/../bootstrap.php';

use App\Core\Router;

$routes = require BASE_PATH . '/routes.php';
$router = new Router($routes);

$controller = $_GET['controller'] ?? 'home';
$action = $_GET['action'] ?? 'index';

$router->dispatch($controller, $action);
