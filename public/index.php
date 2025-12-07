<?php
// Activer l'affichage des erreurs pour déboguer
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 1);

// public/index.php

// Define project root details
define('ROOT', dirname(__DIR__));
define('APP', ROOT . '/app');
define('CONFIG', ROOT . '/config');

// Autoloader (Simple implementation for now)
spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    $base_dir = APP . '/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

// Start Session
session_start();

// Load Config
require CONFIG . '/config.php';

// Load Core
use App\Core\App;

$app = new App();
