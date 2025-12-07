<?php
namespace App\Controllers;

use App\Core\Controller;

class AboutController extends Controller {
    public function index() {
        $data = [
            'title' => 'About Us',
            'currentPage' => 'about'
        ];
        
        $this->view('about', $data);
    }
}
