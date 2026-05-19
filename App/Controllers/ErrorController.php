<?php

namespace App\Controllers;

use App\Core\Controller;

/**
 * ErrorController - Handles error pages
 */
class ErrorController extends Controller
{
    /**
     * 404 Not Found
     */
    public function notFound()
    {
        http_response_code(404);
        $title = '404 - Page Not Found';
        $this->view('error/404', compact('title'));
    }

    /**
     * 403 Forbidden
     */
    public function forbidden()
    {
        http_response_code(403);
        $title = '403 - Forbidden';
        $this->view('error/403', compact('title'));
    }

    /**
     * 500 Server Error
     */
    public function serverError($message = null)
    {
        http_response_code(500);
        $title = '500 - Server Error';
        $this->view('error', compact('title', 'message'));
    }
}
