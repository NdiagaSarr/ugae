<?php
// Fichier de diagnostic - Accédez à http://localhost/ugae/public/debug.php
echo "<h1>Diagnostic UGAE</h1>";
echo "<h2>Information Serveur</h2>";
echo "<pre>";
echo "REQUEST_URI: " . ($_SERVER['REQUEST_URI'] ?? 'N/A') . "\n";
echo "SCRIPT_NAME: " . ($_SERVER['SCRIPT_NAME'] ?? 'N/A') . "\n";
echo "HTTP_HOST: " . ($_SERVER['HTTP_HOST'] ?? 'N/A') . "\n";
echo "DOCUMENT_ROOT: " . ($_SERVER['DOCUMENT_ROOT'] ?? 'N/A') . "\n";
echo "</pre>";

echo "<h2>Configuration</h2>";
echo "<pre>";
define('ROOT', dirname(__DIR__));
define('APP', ROOT . '/app');
define('CONFIG', ROOT . '/config');
require CONFIG . '/config.php';

echo "ROOT: " . ROOT . "\n";
echo "APP: " . APP . "\n";
echo "BASE_URL: " . BASE_URL . "\n";
echo "</pre>";

echo "<h2>Test Contrôleurs</h2>";
echo "<pre>";
$controllers = ['Home', 'About', 'Services', 'Team', 'Partners', 'Contact'];
foreach($controllers as $ctrl) {
    $file = APP . '/Controllers/' . $ctrl . 'Controller.php';
    echo $ctrl . "Controller.php: " . (file_exists($file) ? "✓ EXISTE" : "✗ MANQUANT") . "\n";
}
echo "</pre>";

echo "<h2>Test .htaccess</h2>";
echo "<pre>";
$htaccess = ROOT . '/public/.htaccess';
echo ".htaccess existe: " . (file_exists($htaccess) ? "✓ OUI" : "✗ NON") . "\n";
if(file_exists($htaccess)) {
    echo "Contenu:\n";
    echo htmlspecialchars(file_get_contents($htaccess));
}
echo "</pre>";

echo "<h2>Test GET Parameter</h2>";
echo "<pre>";
echo "GET['url']: " . ($_GET['url'] ?? 'NON DÉFINI') . "\n";
echo "</pre>";

echo "<h2>Test URL Parsing</h2>";
echo "<p><a href='" . BASE_URL . "/about'>Tester /about</a></p>";
echo "<p><a href='" . BASE_URL . "/services'>Tester /services</a></p>";
echo "<p><a href='" . BASE_URL . "/contact'>Tester /contact</a></p>";
?>
