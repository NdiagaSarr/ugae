<?php
namespace App\Controllers;

use App\Core\Controller;

class PartnersController extends Controller {
    public function index() {
        $data = [
            'title' => 'Our Partners',
            'currentPage' => 'partners'
        ];
        
        $this->view('partners', $data);
    }
}
