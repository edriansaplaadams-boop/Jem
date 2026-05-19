<?php

namespace App\Core;

class Router
{
    protected array $routes;

    public function __construct(array $routes)
    {
        $this->routes = $routes;
    }

    public function dispatch(string $controller, string $action): void
    {
        $controller = strtolower($controller);
        $action = $action ?: 'index';

        if (!isset($this->routes[$controller])) {
            $this->dispatchError('404');
            return;
        }

        $controllerClass = $this->routes[$controller];

        if (!class_exists($controllerClass)) {
            $this->dispatchError('500');
            return;
        }

        $controllerInstance = new $controllerClass();

        if (!method_exists($controllerInstance, $action)) {
            $this->dispatchError('404');
            return;
        }

        try {
            $controllerInstance->$action();
        } catch (\Throwable $e) {
            error_log($e->getMessage());
            $this->dispatchError('500', $e->getMessage());
        }
    }

    protected function dispatchError(string $action, string $message = null): void
    {
        $errorClass = $this->routes['error'];
        $controller = new $errorClass();

        if ($action === '404') {
            $controller->notFound();
            return;
        }

        $controller->serverError($message);
    }
}
