<?php

namespace App\Models;

use CodeIgniter\Model;

class Share_model extends Model
{
    protected $table = 'DiscoveryTable';
    protected $primaryKey = 'discoveryId';
    protected $allowedFields = ['discoveryId', 'userIdFk', 'photoPath', 'takenDate', 'plantIdFk', 'GPSLocation', 'title', 'leafId', 'description', 'location'];

    /**
     * EventModel constructor.
     */
    public function __construct() {
        $this->db = \Config\Database::connect();
    }

    public function upload_data($data) {
        $session = \Config\Services::session();
        $session->get('ses_data');
        $query_text = "INSERT INTO a20ux1.DiscoveryTable (userIdFk, takenDate, location, title, leafId, description, GPSLocation) VALUES ('{$data['userIdFk']}', '{$data['takenDate']}', '{$data['location']}', '{$data['title']}', '{$data['leafId']}', '{$data['description']}', {$data['GPSLocation']});";
        $this->db->query($query_text);
    }
    public function get_discoveryId($userId)
    {
        $query="SELECT a20ux1.DiscoveryTable.discoveryId FROM a20ux1.DiscoveryTable where a20ux1.DiscoveryTable.userIdFk={$userId} ORDER BY a20ux1.DiscoveryTable.discoveryId DESC LIMIT 1";
        return $query->getResult();
    }
    public function saveTag($data){
        $session = \Config\Services::session();
        $session->get('ses_data');
        $query_text = "INSERT INTO a20ux1.TaggedTable (taggedByUserIdFk, discoveryIdFk) VALUES ('{$data['discoveryId']}', '{$data['taggedFriends']}');";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

}