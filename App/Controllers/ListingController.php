<?php

namespace App\Controllers;

use App\Core\Controller;

/**
 * ListingController - Handles job listings
 */
class ListingController extends Controller
{
    /**
     * Display all job listings
     */
    public function index()
    {
        $title = 'Browse Jobs - Jobseeker Philippines';
        $search = $_GET['search'] ?? '';
        $location = $_GET['location'] ?? '';

        $this->view('listings/index', compact('title', 'search', 'location'));
    }

    /**
     * Show single job listing
     */
    public function show()
    {
        $id = $_GET['id'] ?? null;

        if (!$id) {
            redirect(appUrl('index.php?controller=listing&action=index'));
        }

        $title = 'Job Details - Jobseeker Philippines';
        $this->view('listings/show', compact('title', 'id'));
    }

    /**
     * Create new job listing
     */
    public function create()
    {
        if (!isLoggedIn()) {
            flashMessage('Please log in to post a job.', 'warning');
            redirect(appUrl('index.php?controller=user&action=login'));
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // TODO: Validate and save job listing
            flashMessage('Job posted successfully!', 'success');
            redirect(appUrl('index.php?controller=listing&action=index'));
        }

        $title = 'Post a Job - Jobseeker Philippines';
        $this->view('listings/create', compact('title'));
    }

    /**
     * Edit job listing
     */
    public function edit()
    {
        if (!isLoggedIn()) {
            redirect(appUrl('index.php?controller=user&action=login'));
        }

        $id = $_GET['id'] ?? null;

        if (!$id) {
            redirect(appUrl('index.php?controller=listing&action=index'));
        }

        $title = 'Edit Job - Jobseeker Philippines';
        $this->view('listings/edit', compact('title', 'id'));
    }
}
