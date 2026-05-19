<?php

/**
 * Helper functions for Jobseeker Philippines
 */

/**
 * Escape HTML to prevent XSS
 */
function escape($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

/**
 * Redirect to a URL
 */
function appUrl(string $path = '')
{
    $path = ltrim($path, '/');
    return rtrim(BASE_URL, '/') . '/' . $path;
}

function redirect($path)
{
    header("Location: {$path}");
    exit;
}

/**
 * Check if user is logged in
 */
function isLoggedIn()
{
    return isset($_SESSION['user_id']);
}

/**
 * Get current user
 */
function currentUser()
{
    return $_SESSION['user'] ?? null;
}

/**
 * Flash message helper
 */
function flashMessage($message, $type = 'info')
{
    $_SESSION['message'] = [
        'text' => $message,
        'type' => $type
    ];
}

/**
 * Get and clear flash message
 */
function getFlashMessage()
{
    $message = $_SESSION['message'] ?? null;
    unset($_SESSION['message']);
    return $message;
}

/**
 * Format salary range
 */
function formatSalary($min, $max)
{
    return '₱' . number_format($min) . ' - ₱' . number_format($max);
}

/**
 * Get time ago string
 */
function timeAgo($date)
{
    $datetime = new DateTime($date);
    $now = new DateTime();
    $interval = $now->diff($datetime);

    if ($interval->d > 0) {
        return $interval->d . ' day' . ($interval->d > 1 ? 's' : '') . ' ago';
    }
    if ($interval->h > 0) {
        return $interval->h . ' hour' . ($interval->h > 1 ? 's' : '') . ' ago';
    }
    if ($interval->i > 0) {
        return $interval->i . ' minute' . ($interval->i > 1 ? 's' : '') . ' ago';
    }
    return 'just now';
}
