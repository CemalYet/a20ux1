<?php

namespace App\Models;

use CodeIgniter\Model;

class Map_model extends Model
{
    

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function get_my_discoveries() {
        $query_text = 'SELECT a20ux1.DiscoveryTable.discoveryId, a20ux1.DiscoveryTable.photoPath, a20ux1.DiscoveryTable.photoPath2, a20ux1.DiscoveryTable.photoPath3, a20ux1.DiscoveryTable.photoPath4, a20ux1.DiscoveryTable.takenDate, a20ux1.DiscoveryTable.GPSLocation, a20ux1.DiscoveryTable.title, a20ux1.DiscoveryTable.location, a20ux1.UserTable.userName FROM a20ux1.DiscoveryTable INNER JOIN a20ux1.UserTable ON a20ux1.DiscoveryTable.userIdFk = a20ux1.UserTable.userId WHERE a20ux1.UserTable.userId=11;';
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    public function get_friend_discoveries() {
        $query_text = 'SELECT a20ux1.DiscoveryTable.discoveryId, a20ux1.DiscoveryTable.photoPath, a20ux1.DiscoveryTable.photoPath2, a20ux1.DiscoveryTable.photoPath3, a20ux1.DiscoveryTable.photoPath4, a20ux1.DiscoveryTable.takenDate, a20ux1.DiscoveryTable.GPSLocation, a20ux1.DiscoveryTable.title, a20ux1.DiscoveryTable.location, a20ux1.UserTable.userName FROM a20ux1.DiscoveryTable INNER JOIN a20ux1.UserTable ON a20ux1.DiscoveryTable.userIdFk = a20ux1.UserTable.userId WHERE a20ux1.DiscoveryTable.userIdFk IN (SELECT DISTINCT userId_1 FROM a20ux1.FriendsTable WHERE userId_2=11 UNION SELECT DISTINCT userId_2 FROM a20ux1.FriendsTable WHERE userId_1=11);';
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    public function get_popular_discoveries() {
        $query_text = 'SELECT a20ux1.DiscoveryTable.discoveryId, a20ux1.DiscoveryTable.photoPath, a20ux1.DiscoveryTable.photoPath2, a20ux1.DiscoveryTable.photoPath3, a20ux1.DiscoveryTable.photoPath4, a20ux1.DiscoveryTable.takenDate, a20ux1.DiscoveryTable.GPSLocation, a20ux1.DiscoveryTable.title, a20ux1.DiscoveryTable.location, a20ux1.UserTable.userName FROM a20ux1.DiscoveryTable INNER JOIN a20ux1.UserTable WHERE a20ux1.DiscoveryTable.userIdFk = a20ux1.UserTable.userId;';
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    public function get_discoveries() {
        $session = \Config\Services::session();
        $session->get('ses_data');
        $query_text = 'SELECT a20ux1.DiscoveryTable.takenDate, a20ux1.DiscoveryTable.title, a20ux1.DiscoveryTable.photoPath, a20ux1.UserTable.userName FROM a20ux1.DiscoveryTable, a20ux1.UserTable WHERE a20ux1.DiscoveryTable.userIdFk = a20ux1.UserTable.userId LIMIT 5;';
        $query = $this->db->query($query_text);
        return $query->getResult();
    }
    

    public function search($req) {
        $session = \Config\Services::session();
        $session->get('ses_data');
        $query_text = "SELECT a20ux1.DiscoveryTable.takenDate, a20ux1.DiscoveryTable.photoPath, a20ux1.DiscoveryTable.title, a20ux1.UserTable.userName FROM a20ux1.DiscoveryTable, a20ux1.UserTable WHERE a20ux1.DiscoveryTable.userIdFk = a20ux1.UserTable.userId AND (instr(a20ux1.DiscoveryTable.takenDate, '{$req}') > 0 OR instr(a20ux1.DiscoveryTable.title, '{$req}') > 0 OR instr(a20ux1.DiscoveryTable.description, '{$req}') > 0 OR instr(a20ux1.UserTable.userName, '{$req}') > 0 OR instr(a20ux1.DiscoveryTable.location, '{$req}') > 0);";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }
}
