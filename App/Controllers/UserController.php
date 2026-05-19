<?php

namespace App\Controllers;

use App\Core\Controller;

/**
 * UserController - Handles user authentication and profiles
 */
class UserController extends Controller
{
    /**
     * User login
     */
    public function login()
    {
        if (isLoggedIn()) {
            redirect(appUrl('index.php'));
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            // TODO: Validate credentials against database
            $_SESSION['user_id'] = 1;
            $_SESSION['user'] = ['name' => 'John Doe', 'email' => $email];

            flashMessage('Login successful! Welcome back.', 'success');
            redirect(appUrl('index.php'));
        }

        $title = 'Login - Jobseeker Philippines';
        $this->view('users/login', compact('title'));
    }

    /**
     * User registration
     */
    public function create()
    {
        if (isLoggedIn()) {
            redirect(appUrl('index.php'));
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';
            $confirmPassword = $_POST['confirm_password'] ?? '';

            // TODO: Validate and save user to database
            $_SESSION['user_id'] = 1;
            $_SESSION['user'] = ['name' => $name, 'email' => $email];

            flashMessage('Account created successfully! Welcome to Jobseeker Philippines.', 'success');
            redirect(appUrl('index.php'));
        }

        $title = 'Sign Up - Jobseeker Philippines';
        $this->view('users/create', compact('title'));
    }

    /**
     * Show user profile
     */
    public function show()
    {
        if (!isLoggedIn()) {
            redirect(appUrl('index.php?controller=user&action=login'));
        }

        $title = 'My Profile - Jobseeker Philippines';
        $this->view('users/create', compact('title')); // Placeholder - create profile view later
    }

    /**
     * User logout
     */
    public function logout()
    {
        session_destroy();
        flashMessage('You have been logged out successfully.', 'info');
        redirect(appUrl('index.php'));
    }
}
