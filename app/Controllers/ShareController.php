<?php


namespace App\Controllers;


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

}