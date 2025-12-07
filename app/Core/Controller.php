<?php
namespace App\Core;

class Controller {
    public function model($model) {
        require_once APP . '/Models/' . $model . '.php';
        $modelClass = 'App\\Models\\' . $model;
        return new $modelClass();
    }

    public function view($view, $data = []) {
        if (file_exists(APP . '/Views/' . $view . '.php')) {
            extract($data);
            require_once APP . '/Views/' . $view . '.php';
        } else {
            die("View does not exist: " . $view);
        }
    }
}
