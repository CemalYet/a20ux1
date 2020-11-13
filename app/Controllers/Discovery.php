<?php


namespace App\Controllers;


use App\Models\Discovery_model;

class Discovery extends BaseController
{
    private $discovery_model;

    public function __construct()
    {
        $this->discovery_model = new Discovery_model();
    }

    public function discopost(){
        return view('discopost');
    }

    public function comments(){
        return view('comments');
    }

    public function sharedisco(){
        return view('sharedisco');
    }

    public function getDiscoInfo(){
        $data = $this->discovery_model->get_disco_info();
        echo json_encode($data);
    }
}