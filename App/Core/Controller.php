<?php

namespace App\Core;

class Controller
{
    protected function view(string $view, array $data = [])
    {
        extract($data);
        require VIEW_PATH . '/' . $view . '.view.php';
    }

    protected function redirect(string $path)
    {
        header("Location: {$path}");
        exit;
    }
}
