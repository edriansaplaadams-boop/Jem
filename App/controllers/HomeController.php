<?php

namespace App\Controllers;

/**
 * HomeController - Handles home page and general routes
 */
class HomeController
{
    /**
     * Display home page
     */
    public function index()
    {
        $title = 'Jobseeker Philippines - Find Your Dream Job';
        require '../App/views/home.view.php';
    }
}
