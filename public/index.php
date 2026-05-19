<?php
/**
 * Jobseeker Philippines - Main Entry Point
 */

// Autoload framework and helpers
require_once '../autoload.php';
require_once '../helpers.php';

// Get controller and action from query parameters
$controller = $_GET['controller'] ?? 'home';
$action = $_GET['action'] ?? 'index';

// Map controller names to class names
$controllerMap = [
    'home' => 'App\\Controllers\\HomeController',
    'listing' => 'App\\Controllers\\ListingController',
    'user' => 'App\\Controllers\\UserController',
    'error' => 'App\\Controllers\\ErrorController',
];

// Validate controller
if (!isset($controllerMap[$controller])) {
    http_response_code(404);
    require '../App/views/error/404.view.php';
    exit;
}

$controllerClass = $controllerMap[$controller];

try {
    // Check if controller class exists
    if (!class_exists($controllerClass)) {
        throw new Exception("Controller not found: $controllerClass");
    }

    // Instantiate and call action
    $controllerInstance = new $controllerClass();
    
    if (!method_exists($controllerInstance, $action)) {
        throw new Exception("Action not found: $action");
    }

    $controllerInstance->$action();
    
} catch (Exception $e) {
    // Log error and show error page
    error_log($e->getMessage());
    http_response_code(500);
    
    $title = 'Error - Jobseeker Philippines';
    $message = 'An unexpected error occurred. Please try again later.';
    
    require '../App/views/error.view.php';
}
