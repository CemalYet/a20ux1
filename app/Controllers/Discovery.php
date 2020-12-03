<?php


namespace App\Controllers;


use App\Models\Discovery_model;

class Discovery extends BaseController
{
    private $discovery_model;

    public function __construct()
    {
        $this->discovery_model = new Discovery_model();
        $this->JSON_DATA = (array)json_decode(file_get_contents("php://input"));
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
        return $this->response->setJSON($data);
    }

    public function getUserInfo(){
        $data = $this->discovery_model->get_user_info();
        return $this->response->setJSON($data);
    }

    public function getComments(){
        $data = $this->discovery_model->get_comments();
        return $this->response->setJSON($data);
    }

    public function getTags() {
        $session = session();
        $userId = $session->get('userId');
        $discoveryId=2;//discoveryid from front end has to be sent
        $data = $this->discovery_model->get_tags($discoveryId);
        return $this->response->setJSON($data);
    }

    public function savecomment(){
        $data = ['newComment' => $this->JSON_DATA['my_comment']];
        $this->discovery_model->upload_data($data);
        echo $data['newComment'];
    }

    public function savelike() {
        $data = [
            'likedByUserIdFk' => $this->JSON_DATA['userId'],
            'discoveryIdFk' => $this->JSON_DATA['discoId']
        ];
        $this->discovery_model->send_like($data);
    }

    public function deletelike() {
        $data = [
            'likedByUserIdFk' => $this->JSON_DATA['userId'],
            'discoveryIdFk' => $this->JSON_DATA['discoId']
        ];
        $this->discovery_model->remove_like($data);
    }
}