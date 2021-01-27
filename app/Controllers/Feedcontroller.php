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
        $session = session();
        $id = $session->get('userId');
        $feedAmount = $this->request->getVar('data');
        $data = $this->discovery_model->get_feed_data($id,$feedAmount);
        echo json_encode($data);
    }



    public function getUserData(){
        $email = $this->request->getVar('data');
        $data = $this->discovery_model->get_user_info($email);
        return $this->response->setJSON($data);

    }

}