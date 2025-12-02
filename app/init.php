<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../core/App.php';
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../core/Model.php';
require_once __DIR__ . '/../core/Database.php';
// Ensure default controller is available to avoid class-not-found in App routing
require_once __DIR__ . '/controllers/HomeController.php';
