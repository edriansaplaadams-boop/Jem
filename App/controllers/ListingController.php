<?php

namespace App\Controllers;

/**
 * ListingController - Handles job listings
 */
class ListingController
{
    /**
     * Display all job listings
     */
    public function index()
    {
        $title = 'Browse Jobs - Jobseeker Philippines';
        $search = $_GET['search'] ?? '';
        $location = $_GET['location'] ?? '';
        
        require '../App/views/listings/index.view.php';
    }

    /**
     * Show single job listing
     */
    public function show()
    {
        $id = $_GET['id'] ?? null;
        
        if (!$id) {
            header('Location: /edrian/public/index.php?controller=listing&action=index');
            exit;
        }
        
        $title = 'Job Details - Jobseeker Philippines';
        require '../App/views/listings/show.view.php';
    }

    /**
     * Create new job listing
     */
    public function create()
    {
        if (!isLoggedIn()) {
            flashMessage('Please log in to post a job.', 'warning');
            header('Location: /edrian/public/index.php?controller=user&action=login');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // TODO: Validate and save job listing
            flashMessage('Job posted successfully!', 'success');
            header('Location: /edrian/public/index.php?controller=listing&action=index');
            exit;
        }

        $title = 'Post a Job - Jobseeker Philippines';
        require '../App/views/listings/create.view.php';
    }

    /**
     * Edit job listing
     */
    public function edit()
    {
        if (!isLoggedIn()) {
            header('Location: /edrian/public/index.php?controller=user&action=login');
            exit;
        }

        $id = $_GET['id'] ?? null;
        
        if (!$id) {
            header('Location: /edrian/public/index.php?controller=listing&action=index');
            exit;
        }

        $title = 'Edit Job - Jobseeker Philippines';
        require '../App/views/listings/edit.view.php';
    }
}
