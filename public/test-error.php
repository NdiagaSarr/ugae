<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "Test 1: PHP fonctionne<br>";
echo "Version PHP: " . phpversion() . "<br>";
echo "Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "<br>";

echo "<br>Test 2: Chemins<br>";
$root = dirname(__DIR__);
echo "ROOT: $root<br>";
echo "ROOT existe: " . (is_dir($root) ? "OUI" : "NON") . "<br>";

echo "<br>Test 3: Config<br>";
$configPath = $root . '/config/config.php';
echo "Config path: $configPath<br>";
echo "Config existe: " . (file_exists($configPath) ? "OUI" : "NON") . "<br>";

if(file_exists($configPath)) {
    echo "Chargement...<br>";
    try {
        include $configPath;
        echo "SUCCESS<br>";
    } catch(Throwable $e) {
        echo "ERREUR: " . $e->getMessage() . "<br>";
        echo "Ligne: " . $e->getLine() . "<br>";
    }
}
?>
