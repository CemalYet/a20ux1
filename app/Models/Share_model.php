<?php

namespace App\Models;

use CodeIgniter\Model;

class Share_model extends Model
{
    protected $table = 'DiscoveryTable';
    protected $primaryKey = 'discoveryId';
    protected $allowedFields = ['discoveryId', 'userIdFk', 'photoPath', 'takenDate', 'plantIdFk', 'GPSLocation', 'title', 'leafId', 'description', 'location'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    /**
     * EventModel constructor.
     */
    public function __construct() {
        $this->db = \Config\Database::connect();
    }

    public function get_friends() {
        $session = \Config\Services::session();
        $session->get('ses_data');
        $query_text = "SELECT a20ux1.UserTable.userName, a20ux1.UserTable.avatar FROM a20ux1.FriendsTable INNER JOIN a20ux1.UserTable ON a20ux1.FriendsTable.userId_2 = a20ux1.UserTable.userId WHERE a20ux1.FriendsTable.userId_1 = 11;";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    public function upload_data($data) {
        $session = \Config\Services::session();
        $session->get('ses_data');
        $query_text = "INSERT INTO a20ux1.DiscoveryTable (userIdFk, takenDate, location, title, leafId, description, GPSLocation) VALUES ('{$data['userIdFk']}', '{$data['takenDate']}', '{$data['location']}', '{$data['title']}', '{$data['leafId']}', '{$data['description']}', {$data['GPSLocation']});";
        $this->db->query($query_text);
    }
}