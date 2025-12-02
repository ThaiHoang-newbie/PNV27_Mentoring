<?php
class Controller
{
    protected function model($model)
    {

        // validate model name contains only alphanumeric characters and underscores
        if (!preg_match('/^[a-zA-Z_][a-zA-Z0-9_]*$/', $model)) {
            return null;
        }

        $path = __DIR__ . '/../app/models/' . $model . '.php';
        if (file_exists($path)) {
            require_once $path;
            if (class_exists($model)) {
                return new $model();
            }
        }
        return null;
    }

    protected function view($view, $data = [])
    {
        // validate view path contains only safe characters
        if (!preg_match('/^[a-zA-Z0-9_\/]+$/', $view)) {
            echo "Invalid view name.";
            return;
        }

        $viewFile = __DIR__ . '/../app/views/' . $view . '.php';
        if (file_exists($viewFile)) {
            extract($data);
            require_once __DIR__ . '/../app/views/layout/header.php';
            require_once $viewFile;
            require_once __DIR__ . '/../app/views/layout/footer.php';
        } else {
            echo "View not found: " . htmlspecialchars($viewFile);
        }
    }
}
