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

    public function getDiscoInfo(){
        $discoId = $this->request->getVar('data');
        $data = $this->discovery_model->get_disco_info($discoId);
        return $this->response->setJSON($data);
    }

    public function getUserInfo(){
        $email = $this->request->getVar('data');
        $data = $this->discovery_model->get_user_info($email);
        return $this->response->setJSON($data);
    }

    public function getComments(){
        $discoId = $this->request->getVar('data');
        $data = $this->discovery_model->get_comments($discoId);
        return $this->response->setJSON($data);
    }

    public function getTags() {
        $discoId = $this->request->getVar('data');
        $data = $this->discovery_model->get_tags($discoId);
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