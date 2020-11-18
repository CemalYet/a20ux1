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
}