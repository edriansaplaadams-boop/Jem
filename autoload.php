<?php

/**
 * Autoloader for Jobseeker Philippines
 * Handles PSR-4 autoloading and error handling
 */

spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    $base_dir = __DIR__ . '/App/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        $prefix = 'Framework\\';
        $base_dir = __DIR__ . '/Framework/';
        $len = strlen($prefix);
        if (strncmp($prefix, $class, $len) !== 0) {
            return;
        }
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

// Error handling
set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    if (!(error_reporting() & $errno)) {
        return false;
    }
    throw new \ErrorException($errstr, $errno, 0, $errfile, $errline);
});

// Session start
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
