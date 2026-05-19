<?php

namespace App\Controllers;

/**
 * UserController - Handles user authentication and profiles
 */
class UserController
{
    /**
     * User login
     */
    public function login()
    {
        if (isLoggedIn()) {
            header('Location: /edrian/public/index.php');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            // TODO: Validate credentials against database
            $_SESSION['user_id'] = 1;
            $_SESSION['user'] = ['name' => 'John Doe', 'email' => $email];
            
            flashMessage('Login successful! Welcome back.', 'success');
            header('Location: /edrian/public/index.php');
            exit;
        }

        $title = 'Login - Jobseeker Philippines';
        require '../App/views/users/login.view.php';
    }

    /**
     * User registration
     */
    public function create()
    {
        if (isLoggedIn()) {
            header('Location: /edrian/public/index.php');
            exit;
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
            header('Location: /edrian/public/index.php');
            exit;
        }

        $title = 'Sign Up - Jobseeker Philippines';
        require '../App/views/users/create.view.php';
    }

    /**
     * Show user profile
     */
    public function show()
    {
        if (!isLoggedIn()) {
            header('Location: /edrian/public/index.php?controller=user&action=login');
            exit;
        }

        $title = 'My Profile - Jobseeker Philippines';
        require '../App/views/users/create.view.php'; // Placeholder - create profile view later
    }

    /**
     * User logout
     */
    public function logout()
    {
        session_destroy();
        flashMessage('You have been logged out successfully.', 'info');
        header('Location: /edrian/public/index.php');
        exit;
    }
}
