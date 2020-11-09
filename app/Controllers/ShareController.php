<?php


namespace App\Controllers;
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Authorization");


use App\Models\Share_model;

class ShareController extends BaseController
{
    private $share_model;

    public function __construct()
    {
        $this->share_model = new Share_model();
    }

    public function share(){
        return view('share');
    }

    public function getFriends(){
        $data = $this->share_model->get_friends();
        echo json_encode($data);
    }

    public function save(){

        $json = $this->request->getJSON();
        $data = [
            'title' => $json->my_title,
            'date' => $json->my_current_date
        ];
        $this->share_model->insert($data);
    }
}