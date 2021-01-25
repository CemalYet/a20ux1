<?php


namespace App\Models;


use CodeIgniter\Model;

class WikiModel extends Model
{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function get_wiki_data($userId)
    {
        $query_text = "SELECT DISTINCT a20ux1.DiscoveryTable.title FROM a20ux1.DiscoveryTable INNER JOIN a20ux1.UserTable ON a20ux1.UserTable.userId = a20ux1.DiscoveryTable.userIdFk WHERE a20ux1.UserTable.userId = '{$userId}' ORDER BY a20ux1.DiscoveryTable.title;";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    public function get_search($search, $userId)
    {
        $query_text = "SELECT DISTINCT a20ux1.DiscoveryTable.title FROM a20ux1.DiscoveryTable INNER JOIN a20ux1.UserTable ON a20ux1.UserTable.userId = a20ux1.DiscoveryTable.userIdFk  WHERE a20ux1.UserTable.userId = '{$userId}' AND a20ux1.DiscoveryTable.title LIKE '%{$search}%' ORDER BY a20ux1.DiscoveryTable.title;";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    public function get_pictures($search, $userId)
    {
        $query_text = "SELECT a20ux1.DiscoveryPhotosTable.photoPath FROM a20ux1.DiscoveryPhotosTable INNER JOIN a20ux1.DiscoveryTable ON a20ux1.DiscoveryTable.discoveryId = a20ux1.DiscoveryPhotosTable.discoveryIdFk INNER JOIN a20ux1.UserTable ON a20ux1.UserTable.userId = a20ux1.DiscoveryTable.userIdFk  WHERE a20ux1.UserTable.userId = '{$userId}' AND a20ux1.DiscoveryTable.title LIKE '%{$search}%';";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    public function get_spots($plant_name, $userId)
    {
        $query_text = "SELECT count(*) AS number FROM a20ux1.DiscoveryTable INNER JOIN a20ux1.UserTable ON a20ux1.UserTable.userId = a20ux1.DiscoveryTable.userIdFk WHERE a20ux1.UserTable.userId = '{$userId}' AND a20ux1.DiscoveryTable.title LIKE '%{$plant_name}%';";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }
}