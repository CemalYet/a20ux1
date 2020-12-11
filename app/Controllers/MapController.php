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
        $userId = $this->request->getVar('userId');
        $data = $this->map_model->get_my_discoveries($userId);
        return $this->response->setJSON($data);
    }

    public function getFriendDiscoveries(){
        $userId = $this->request->getVar('userId');
        $data = $this->map_model->get_friend_discoveries($userId);
        return $this->response->setJSON($data);
    }

    public function getPopularDiscoveries(){
        $data = $this->map_model->get_popular_discoveries();
        return $this->response->setJSON($data);
    }

    public function getDiscoveryPhotos(){
        $discoId = $this->request->getVar('data');
        $data = $this->map_model->get_discovery_photos($discoId);
        return $this->response->setJSON($data);
    }

    public function searching(){
        $req = $this->request->getVar('data');
        $data = $this->map_model->search($req);
        return $this->response->setJSON($data);
    }

}
