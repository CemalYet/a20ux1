<?php


namespace App\Controllers;

use App\Models\Map_model;

class MapController extends BaseController
{
    private $map_model;

    public function __construct()
    {
        $this->map_model = new Map_model();
    }

    public function map(){
        return view('index');
    }

    public function getMyDiscoveries(){
        $data = $this->map_model->get_my_discoveries();
        echo '<pre>'; print_r($data); echo '</pre>';
    }

    public function getFriendDiscoveries(){
        $data = $this->map_model->get_friend_discoveries();
        echo '<pre>'; print_r($data); echo '</pre>';
    }

    public function getPopularDiscoveries(){
        $data = $this->map_model->get_popular_discoveries();
        echo '<pre>'; print_r($data); echo '</pre>';
    }

    public function searching(){
        $req = $this->request->getVar('data');
        $data = $this->map_model->search($req);
        return $this->response->setJSON($data);
    }

}
