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
        $this->JSON_DATA = (array)json_decode(file_get_contents("php://input"));
    }

    public function share()
    {
        return view('share');
    }

    public function getFriends()
    {
        $friends = $this->share_model->get_friends();
        echo json_encode($friends);
    }

    public function save()
    {
        $data = [
            'title' => $this->JSON_DATA['my_title'],
            'hour' => $this->JSON_DATA['my_time'],
            'date' => $this->JSON_DATA['my_date'],
            'location' => $this->JSON_DATA['my_location'],
            'description' => $this->JSON_DATA['my_description'],
            'leafId' => $this->JSON_DATA['my_leaf'],
            'userIdFk' => "29",
        ];
        $data['takenDate'] = $data['date'] . ' ' . $data['hour'];

        $this->share_model->upload_data($data);

        echo $this->JSON_DATA;
    }
}