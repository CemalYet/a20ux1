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
        $query_text = 'SELECT a20ux1.DiscoveryTable.discoveryId, a20ux1.DiscoveryTable.takenDate, a20ux1.DiscoveryTable.Longitude, a20ux1.DiscoveryTable.Latitude, a20ux1.DiscoveryTable.title, a20ux1.DiscoveryTable.location, a20ux1.UserTable.userName FROM a20ux1.DiscoveryTable INNER JOIN a20ux1.UserTable ON a20ux1.DiscoveryTable.userIdFk = a20ux1.UserTable.userId WHERE a20ux1.UserTable.userId=17 AND a20ux1.DiscoveryTable.Longitude AND a20ux1.DiscoveryTable.Latitude;';
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    public function get_friend_discoveries() {
        $query_text = 'SELECT a20ux1.DiscoveryTable.discoveryId, a20ux1.DiscoveryTable.takenDate, a20ux1.DiscoveryTable.Longitude, a20ux1.DiscoveryTable.Latitude, a20ux1.DiscoveryTable.title, a20ux1.DiscoveryTable.location, a20ux1.UserTable.userName FROM a20ux1.DiscoveryTable INNER JOIN a20ux1.UserTable ON a20ux1.DiscoveryTable.userIdFk = a20ux1.UserTable.userId WHERE a20ux1.DiscoveryTable.userIdFk IN (SELECT DISTINCT sender FROM a20ux1.FriendsTable WHERE receiver=17 AND state=1 UNION SELECT DISTINCT receiver FROM a20ux1.FriendsTable WHERE sender=17 AND state=1) AND a20ux1.DiscoveryTable.Longitude AND a20ux1.DiscoveryTable.Latitude;';
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    public function get_popular_discoveries() {
        $query_text = 'SELECT a20ux1.DiscoveryTable.discoveryId, a20ux1.DiscoveryTable.takenDate, a20ux1.DiscoveryTable.Longitude, a20ux1.DiscoveryTable.Latitude, a20ux1.DiscoveryTable.title, a20ux1.DiscoveryTable.location, a20ux1.UserTable.userName FROM a20ux1.DiscoveryTable INNER JOIN a20ux1.UserTable ON a20ux1.DiscoveryTable.userIdFk = a20ux1.UserTable.userId WHERE discoveryId IN (SELECT discoveryIdFk FROM a20ux1.LikedTable GROUP BY discoveryIdFk HAVING count(*)>1) AND DATE_ADD(takenDate, INTERVAL 30 DAY) >= current_timestamp() AND a20ux1.UserTable.useLocation=1 AND a20ux1.DiscoveryTable.Longitude AND a20ux1.DiscoveryTable.Latitude;';
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    public function get_discovery_photos($discoId) {
        $query_text = "SELECT PhotoPath, PhotoOrder FROM a20ux1.DiscoveryPhotosTable WHERE FkDiscoveryPost = '{$discoId}';";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    public function search($req) {
        $session = \Config\Services::session();
        $session->get('ses_data');
        $query_text = "SELECT a20ux1.DiscoveryTable.takenDate, a20ux1.DiscoveryTable.title, a20ux1.UserTable.userName, a20ux1.DiscoveryPhotosTable.PhotoPath FROM a20ux1.DiscoveryTable, a20ux1.UserTable, a20ux1.DiscoveryPhotosTable WHERE a20ux1.DiscoveryPhotosTable.PhotoOrder=1 AND a20ux1.DiscoveryTable.userIdFk = a20ux1.UserTable.userId AND (instr(a20ux1.DiscoveryTable.takenDate, '{$req}') > 0 OR instr(a20ux1.DiscoveryTable.title, '{$req}') > 0 OR instr(a20ux1.DiscoveryTable.description, '{$req}') > 0 OR instr(a20ux1.UserTable.userName, '{$req}') > 0 OR instr(a20ux1.DiscoveryTable.location, '{$req}') > 0);";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }
}
