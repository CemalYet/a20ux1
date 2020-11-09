<?php


namespace App\Controllers;
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Authorization");


use App\Models\Share_model;
use CodeIgniter\CLI\Console;

class ShareController extends BaseController
{
    private $share_model;
    private $db;

    public function __construct()
    {
        $this->share_model = new Share_model();
        $this->db = \Config\Database::connect();
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
        $json = $this->request->getJSON();
        $data = [
            'title' => $json->my_title,
            'hour' => $json->my_time,
            'date' => $json->my_date,
            'location' => $json->my_location,
            'description' => $json->my_description
        ];
        try {
            $this->share_model->insert(['title' => "Tree", 'date' => "Today"]);
        } catch (\ReflectionException $e) {
        }

        $data_array = array(
            ':title' => $json->my_title,
            ':hour' => $json->my_time,
            ':date' => $json->my_date,
            ':location' => $json->my_location,
            ':description' => $json->my_description
        );

        $session = \Config\Services::session();
        $session->get('ses_data');
        $query_text = 'INSERT INTO a20ux1.DiscoveryTable (userIdFk, title) VALUES (19, :title);';
        $this->db->query($query_text);

        echo $data['title'];
        echo $data['location'];
    }
}