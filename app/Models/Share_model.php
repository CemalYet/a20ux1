<?php

namespace App\Models;

use CodeIgniter\Model;

class Share_model extends Model
{
    /**
     * EventModel constructor.
     */
    public function __construct() {
        $this->db = \Config\Database::connect();
    }

    public function get_friends() {
        $session = \Config\Services::session();
        $session->get('ses_data');
        $query_text = 'SELECT a20ux1.UserTable.userName, a20ux1.UserTable.avatar FROM a20ux1.FriendsTable INNER JOIN a20ux1.UserTable ON a20ux1.FriendsTable.userId_2 = a20ux1.UserTable.userId WHERE a20ux1.FriendsTable.userId_1 = 11;';
        $query = $this->db->query($query_text);
        return $query->getResult();
    }
}