<?php
namespace App\Controllers;

use App\Core\Controller;

class ServicesController extends Controller {
    public function index() {
        $data = [
            'title' => 'Our Services',
            'currentPage' => 'services'
        ];
        
        $this->view('services', $data);
    }
}
