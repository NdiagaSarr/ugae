<?php
namespace App\Core;

class App {
    protected $controller = 'HomeController';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->parseUrl();

        // Check if controller exists
        if (file_exists(APP . '/Controllers/' . ucfirst($url[0] ?? '') . 'Controller.php')) {
            $this->controller = ucfirst($url[0]) . 'Controller';
            unset($url[0]);
        } elseif (empty($url[0])) {
             // Default controller is already set
        } else {
             // 404 - For now fallback to Home or a 404 Controller
             // $this->controller = 'NotFoundController';
        }

        require_once APP . '/Controllers/' . $this->controller . '.php';
        
        // Namespaced class
        $this->controller = 'App\\Controllers\\' . $this->controller;
        $this->controller = new $this->controller;

        // Check for method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseUrl() {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        
        // Fallback for when .htaccess is not processing or not available (e.g. some server configs)
        $requestUri = $_SERVER['REQUEST_URI'];
        $scriptName = $_SERVER['SCRIPT_NAME'];
        $scriptDir = str_replace('\\', '/', dirname($scriptName));
        
        // Remove script dir from URI
        if (strpos($requestUri, $scriptDir) === 0) {
            $path = substr($requestUri, strlen($scriptDir));
        } else {
            $path = $requestUri;
        }
        
        // Remove query string
        if (($pos = strpos($path, '?')) !== false) {
            $path = substr($path, 0, $pos);
        }
        
        $path = trim($path, '/');
        
        if (!empty($path)) {
             return explode('/', filter_var($path, FILTER_SANITIZE_URL));
        }

        return [];
    }
}
