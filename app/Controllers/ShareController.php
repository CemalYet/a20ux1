<?php


namespace App\Controllers;
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Authorization");


use App\Models\Share_model;

class ShareController extends BaseController
{
    private $share_model;
    private $JSON_DATA;

    public function __construct()
    {
        $this->share_model = new Share_model();
        $this->JSON_DATA = (array)json_decode(file_get_contents("php://input"));
    }

    public function save()
    {
        $session = session();
        $userId = $session->get('userId');
        
        $data = [
            'title' => $this->JSON_DATA['my_title'],
            'hour' => $this->JSON_DATA['my_time'],
            'date' => $this->JSON_DATA['my_date'],
            'location' => $this->JSON_DATA['my_location'],
            'description' => $this->JSON_DATA['my_description'],
            'leafId' => $this->JSON_DATA['my_leaf'],
            'latitude' => $this->JSON_DATA['my_latitude'],
            'longitude' => $this->JSON_DATA['my_longitude'],
            'taggedFriends'=>$this->JSON_DATA['my_taggedFriends'],
            'images' => $this->JSON_DATA['images'],
            'userIdFk'=>$userId//i am not sure from here
        ];
        $data['takenDate'] = $data['date'] . ' ' . $data['hour'];


        $this->share_model->upload_data($data);

        $discovery_id = $this->share_model->get_discoveryId($userId);

        

        foreach($data['taggedFriends'] as $value){
            $insertData = [
                'discoveryId'  => $discovery_id[0]->discoveryId,
                'taggedFriends'=> $value
            ];
            $this->share_model->saveTag($insertData);
        }
        
        foreach($data['images'] as $value){
            $insertData = [
                'discoveryId'  => $discovery_id[0]->discoveryId,
                'images'=> $value->photoPath
            ];
            $this->share_model->saveImages($insertData);
        }

        return $this->response->setJSON($discovery_id);
    }
}