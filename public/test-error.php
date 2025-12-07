<?php
// FICHIER DE DIAGNOSTIC - À uploader dans public/ sur ugae.org
// Accéder via https://ugae.org/test-error.php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

echo "<h1>Diagnostic UGAE - Serveur Production</h1>";
echo "<h2>Informations PHP</h2>";
echo "<pre>";
echo "Version PHP: " . phpversion() . "\n";
echo "OS: " . PHP_OS . "\n";
echo "</pre>";

echo "<h2>Chemins</h2>";
echo "<pre>";
echo "__FILE__: " . __FILE__ . "\n";
echo "__DIR__: " . __DIR__ . "\n";
echo "ROOT would be: " . dirname(__DIR__) . "\n";
echo "APP would be: " . dirname(__DIR__) . '/app' . "\n";
echo "</pre>";

echo "<h2>Test autoloader</h2>";
echo "<pre>";
define('ROOT', dirname(__DIR__));
define('APP', ROOT . '/app');
define('CONFIG', ROOT . '/config');

echo "ROOT: " . ROOT . "\n";
echo "APP: " . APP . "\n";
echo "CONFIG: " . CONFIG . "\n";

// Test si les dossiers existent
echo "\nTest d'existence:\n";
echo "ROOT existe: " . (is_dir(ROOT) ? "✓ OUI" : "✗ NON") . "\n";
echo "APP existe: " . (is_dir(APP) ? "✓ OUI" : "✗ NON") . "\n";
echo "CONFIG existe: " . (is_dir(CONFIG) ? "✓ OUI" : "✗ NON") . "\n";

$configFile = CONFIG . '/config.php';
echo "config.php existe: " . (file_exists($configFile) ? "✓ OUI" : "✗ NON") . "\n";

if(file_exists($configFile)) {
    echo "\nChargement de config.php...\n";
    try {
        require_once $configFile;
        echo "✓ Config chargé avec succès\n";
        echo "BASE_URL: " . (defined('BASE_URL') ? BASE_URL : 'NON DÉFINI') . "\n";
    } catch (Exception $e) {
        echo "✗ ERREUR: " . $e->getMessage() . "\n";
    }
}
echo "</pre>";

echo "<h2>Test Contrôleurs</h2>";
echo "<pre>";
$controllers = ['Home', 'About', 'Services', 'Team', 'Partners', 'Contact'];
foreach($controllers as $ctrl) {
    $file = APP . '/Controllers/' . $ctrl . 'Controller.php';
    echo $ctrl . "Controller.php: " . (file_exists($file) ? "✓" : "✗") . "\n";
}
echo "</pre>";

echo "<h2>Test Autoloader</h2>";
echo "<pre>";
spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    $base_dir = APP . '/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    echo "Tentative de charger: $class\n";
    echo "Fichier cherché: $file\n";
    echo "Existe: " . (file_exists($file) ? "✓ OUI" : "✗ NON") . "\n\n";

    if (file_exists($file)) {
        require $file;
    }
});

echo "Test chargement App\\Core\\Controller:\n";
try {
    use App\Core\Controller;
    echo "✓ Core\\Controller chargé\n";
} catch (Exception $e) {
    echo "✗ ERREUR: " . $e->getMessage() . "\n";
}
echo "</pre>";

echo "<h2>Permissions</h2>";
echo "<pre>";
echo "Permissions ROOT: " . substr(sprintf('%o', fileperms(ROOT)), -4) . "\n";
echo "Permissions APP: " . substr(sprintf('%o', fileperms(APP)), -4) . "\n";
echo "Permissions public: " . substr(sprintf('%o', fileperms(__DIR__)), -4) . "\n";
echo "</pre>";

echo "<h2>Test de navigation</h2>";
echo "<p><a href='about'>Tester /about</a></p>";
echo "<p><a href='services'>Tester /services</a></p>";
?>
