<?php

namespace App\Controllers;

use App\Core\Controller;

/**
 * HomeController - Handles home page and general routes
 */
class HomeController extends Controller
{
    /**
     * Display home page
     */
    public function index()
    {
        $title = 'Jobseeker Philippines - Find Your Dream Job';
        $this->view('home', compact('title'));
    }
}
