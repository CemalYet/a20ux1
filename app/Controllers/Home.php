<?php


namespace App\Controllers;

use App\Models\Discovery_model;

class Home extends \CodeIgniter\Controller
{
    private $menu_model;
    private $database_model;
    private $data;

    /**
     * Home constructor.
     */
    public function __construct() {
        $this->database_model = new Discovery_model();
    }

    public function home() {

        return view('index');
    }
}