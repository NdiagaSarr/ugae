<?php
// config/config.php

define('DB_HOST', 'localhost');
define('DB_NAME', 'ugae_site_content');
define('DB_USER', 'root');
define('DB_PASS', ''); // Adjust if needed

// Dynamic BASE_URL detection
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
// Normalize script directory path to always use forward slashes
$scriptPath = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
// Remove trailing slash if present (except for root)
$scriptPath = rtrim($scriptPath, '/');

define('BASE_URL', $protocol . '://' . $host . $scriptPath);
define('SITE_NAME', 'UGAE PTE. LTD.');
