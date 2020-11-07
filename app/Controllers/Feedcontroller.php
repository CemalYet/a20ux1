<?php


namespace App\Controllers;


use App\Models\Discovery_model;

class Feedcontroller extends BaseController
{
    private $discovery_model;

    public function __construct()
    {
        $this->discovery_model = new Discovery_model();
    }

    public function feed(){
        return view('feed');
    }

    public function getDiscoveries(){
        $data = $this->discovery_model->get_feed_data();
        echo json_encode($data);
    }

    public function getUserData(){
        $data = $this->discovery_model->get_user_info();
        echo json_encode($data);
    }

}