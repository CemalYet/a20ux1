<?php

namespace App\Models;

use CodeIgniter\Model;

class Discovery_model extends Model{
    protected $table = 'DiscoveryTable';
    protected $primaryKey = 'discoveryId';
    protected $allowedFields = ['userIdFk', 'photoPath', 'takenDate', 'plantIdFk', 'location', 'title', 'leafId'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    /**
     * EventModel constructor.
     */
    public function __construct() {
        $this->db = \Config\Database::connect();
    }

    public function get_feed_data() {

        //get friends
        $session = \Config\Services::session();
        $session->get('ses_data');

        //populate friends info

        //get discoveries
        $query_text = 'SELECT a20ux1.DiscoveryTable.photoPath, a20ux1.DiscoveryTable.takenDate, a20ux1.DiscoveryTable.title, a20ux1.DiscoveryTable.leafId, a20ux1.UserTable.userName, a20ux1.UserTable.avatar FROM a20ux1.DiscoveryTable INNER JOIN a20ux1.UserTable ON a20ux1.UserTable.userId = a20ux1.DiscoveryTable.userIdFk WHERE userId=(SELECT DISTINCT userId_2 FROM a20ux1.FriendsTable WHERE userId_1=11);';
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    public function get_user_discoveries($id) {
        $query_text = 'SELECT a20ux1.DiscoveryTable.photoPath, a20ux1.DiscoveryTable.takenDate, a20ux1.DiscoveryTable.title FROM a20ux1.DiscoveryTable WHERE a20ux1.DiscoveryTable.userIdFk = ?;';
        $query = $this->db->query($query_text, $id);
        return $query->getResult();
    }

    public function get_user_info() {
        $session = \Config\Services::session();
        $session->get('ses_data');
        $query_text = 'SELECT userName, emailAddress, avatar FROM a20ux1.UserTable WHERE userId = 16;';
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

}