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

    public function getNrOfLikes() {
        $discoId = $this->request->getVar('data');
        $data = $this->discovery_model->get_nr_of_likes($discoId);
        return $data[0]->NrOfLikes;
    }

    public function savecomment(){
        //$data = $this->request->getVar('newComment');
        $data = [
            'userId' => $this->JSON_DATA['userId'],
            'discoId' => $this->JSON_DATA['discoId'],
            'comment' => $this->JSON_DATA['comment']
        ];
        $this->discovery_model->upload_comment($data);
        echo $data['discoId'];
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
    
    public function deletePost() {
        $discoId = $this->request->getVar('data');
        $this->discovery_model->delete_post($discoId);
    }
    
    public function getHeartButton() {
        $discoId = $this->request->getVar('data');
        $data = $this->discovery_model->get_heart_button($discoId);
        return $data;
    }
}