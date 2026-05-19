<?php

namespace App\Controllers;

/**
 * ErrorController - Handles error pages
 */
class ErrorController
{
    /**
     * 404 Not Found
     */
    public function notFound()
    {
        http_response_code(404);
        $title = '404 - Page Not Found';
        require '../App/views/error/404.view.php';
    }

    /**
     * 403 Forbidden
     */
    public function forbidden()
    {
        http_response_code(403);
        $title = '403 - Forbidden';
        require '../App/views/error/403.view.php';
    }

    /**
     * 500 Server Error
     */
    public function serverError()
    {
        http_response_code(500);
        $title = '500 - Server Error';
        require '../App/views/error.view.php';
    }
}
