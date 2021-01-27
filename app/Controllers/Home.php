<?php


namespace App\Controllers;

use App\Models\Discovery_model;

class Home extends \CodeIgniter\Controller
{

    public function home() {
        return view('index.html');
    }
}