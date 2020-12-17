<?php

namespace App\Models;

use CodeIgniter\Model;

class Map_model extends Model
{
    private $userId;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function get_my_discoveries($userId) {
        $query_text = "SELECT a20ux1.DiscoveryTable.discoveryId, a20ux1.DiscoveryTable.takenDate, a20ux1.DiscoveryTable.Longitude, a20ux1.DiscoveryTable.Latitude, a20ux1.DiscoveryTable.title, a20ux1.DiscoveryTable.location, a20ux1.UserTable.userName FROM a20ux1.DiscoveryTable INNER JOIN a20ux1.UserTable ON a20ux1.DiscoveryTable.userIdFk = a20ux1.UserTable.userId WHERE a20ux1.UserTable.userId= '{$userId}' AND a20ux1.DiscoveryTable.Longitude AND a20ux1.DiscoveryTable.Latitude;";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    public function get_friend_discoveries($userId) {
        $query_text = "SELECT a20ux1.DiscoveryTable.discoveryId, a20ux1.DiscoveryTable.takenDate, a20ux1.DiscoveryTable.Longitude, a20ux1.DiscoveryTable.Latitude, a20ux1.DiscoveryTable.title, a20ux1.DiscoveryTable.location, a20ux1.UserTable.userName FROM a20ux1.DiscoveryTable INNER JOIN a20ux1.UserTable ON a20ux1.DiscoveryTable.userIdFk = a20ux1.UserTable.userId WHERE a20ux1.DiscoveryTable.userIdFk IN (SELECT DISTINCT sender FROM a20ux1.FriendsTable WHERE receiver='{$userId}' AND state=1 UNION SELECT DISTINCT receiver FROM a20ux1.FriendsTable WHERE sender='{$userId}' AND state=1) AND a20ux1.DiscoveryTable.Longitude AND a20ux1.DiscoveryTable.Latitude;";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    public function get_popular_discoveries() {
        $query_text = "SELECT a20ux1.DiscoveryTable.discoveryId, a20ux1.DiscoveryTable.takenDate, a20ux1.DiscoveryTable.Longitude, a20ux1.DiscoveryTable.Latitude, a20ux1.DiscoveryTable.title, a20ux1.DiscoveryTable.location, a20ux1.UserTable.userName FROM a20ux1.DiscoveryTable INNER JOIN a20ux1.UserTable ON a20ux1.DiscoveryTable.userIdFk = a20ux1.UserTable.userId WHERE discoveryId IN (SELECT discoveryIdFk FROM a20ux1.LikedTable GROUP BY discoveryIdFk HAVING count(*)>1) AND DATE_ADD(takenDate, INTERVAL 30 DAY) >= current_timestamp() AND a20ux1.UserTable.useLocation=1 AND a20ux1.DiscoveryTable.Longitude AND a20ux1.DiscoveryTable.Latitude;";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    public function get_discovery_photos($discoId) {
        $query_text = "SELECT PhotoPath FROM a20ux1.DiscoveryPhotosTable WHERE discoveryIdFk = '{$discoId}';";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    public function search($req) {
        $query_text = "SELECT a20ux1.DiscoveryTable.discoveryId, a20ux1.DiscoveryTable.takenDate, a20ux1.DiscoveryTable.Longitude, a20ux1.DiscoveryTable.Latitude, a20ux1.DiscoveryTable.title, a20ux1.DiscoveryTable.location, a20ux1.UserTable.userName, photo.photoPath FROM a20ux1.DiscoveryTable INNER JOIN a20ux1.UserTable ON a20ux1.DiscoveryTable.userIdFk = a20ux1.UserTable.userId AND a20ux1.UserTable.useLocation=1 INNER JOIN (select * from (select*, row_number() over(
partition by discoveryIdFk order by photoId) as row_num from a20ux1.DiscoveryPhotosTable) as order_photos where order_photos.row_num = 1) as photo
on a20ux1.DiscoveryTable.discoveryId = photo.discoveryIdFk
 WHERE (instr(a20ux1.DiscoveryTable.takenDate, '{$req}') > 0 OR instr(a20ux1.DiscoveryTable.title, '{$req}') > 0 OR instr(a20ux1.DiscoveryTable.description, '{$req}') > 0 OR instr(a20ux1.UserTable.userName, '{$req}') > 0 OR instr(a20ux1.DiscoveryTable.location, '{$req}') > 0);";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    public function searchPostToShow($id){
        $query_text = "SELECT a20ux1.DiscoveryTable.discoveryId, a20ux1.DiscoveryTable.takenDate, a20ux1.DiscoveryTable.Longitude, a20ux1.DiscoveryTable.Latitude, a20ux1.DiscoveryTable.title, 
a20ux1.DiscoveryTable.location, a20ux1.UserTable.userName, photo.photoPath 
FROM a20ux1.DiscoveryTable 
INNER JOIN a20ux1.UserTable 
ON a20ux1.DiscoveryTable.userIdFk = a20ux1.UserTable.userId AND a20ux1.UserTable.useLocation=1 
INNER JOIN (select * from (select*, row_number() over(
partition by discoveryIdFk order by photoId) as row_num from a20ux1.DiscoveryPhotosTable) as order_photos where order_photos.row_num = 1) as photo
on a20ux1.DiscoveryTable.discoveryId = photo.discoveryIdFk
WHERE a20ux1.DiscoveryTable.discoveryId = '{$id}';";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }
}
