<?php
namespace App\Controllers;

use App\Core\Controller;

class TeamController extends Controller {
    public function index() {
        $data = [
            'title' => 'Our Team',
            'currentPage' => 'team'
        ];
        
        $this->view('team', $data);
    }
}
