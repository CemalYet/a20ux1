<?php


namespace App\Models;


use CodeIgniter\Model;

class WikiModel extends Model
{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function get_wiki_data()
    {
        $query_text = "SELECT DISTINCT a20ux1.DiscoveryTable.title FROM a20ux1.DiscoveryTable ORDER BY a20ux1.DiscoveryTable.title;";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    public function get_search($search)
    {
        $query_text = "SELECT DISTINCT a20ux1.DiscoveryTable.title FROM a20ux1.DiscoveryTable WHERE a20ux1.DiscoveryTable.title LIKE '%{$search}%' ORDER BY a20ux1.DiscoveryTable.title;";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    public function get_pictures($search)
    {
        $query_text = "SELECT a20ux1.DiscoveryPhotosTable.photoPath FROM a20ux1.DiscoveryPhotosTable INNER JOIN a20ux1.DiscoveryTable ON  a20ux1.DiscoveryTable.discoveryId = a20ux1.DiscoveryPhotosTable.discoveryIdFk WHERE a20ux1.DiscoveryTable.title LIKE '%{$search}%';";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    public function get_spots($plant_name)
    {
        $query_text = "SELECT count(*) AS number FROM a20ux1.DiscoveryTable WHERE a20ux1.DiscoveryTable.title LIKE '%{$plant_name}%';";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }
}