<?php
namespace App\Controllers;

use App\Core\Controller;

class ContactController extends Controller {
    public function index() {
        $data = [
            'title' => 'Contact Us',
            'currentPage' => 'contact'
        ];
        
        $this->view('contact', $data);
    }
}
