<?php
namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller {
    public function index() {
        $data = [
            'title' => 'Home',
            'currentPage' => 'home'
        ];
        
        $this->view('home', $data);
    }
}
