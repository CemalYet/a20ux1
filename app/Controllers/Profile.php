<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Profile extends Controller
{
    public function index()
    {
        $session = session();
        echo "Welcome back, ".$session->get('userName');
    }
}