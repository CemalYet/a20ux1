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
        $query_text = "SELECT title FROM a20ux1.DiscoveryTable  WHERE userIdFk = '{$userId}' ORDER BY title;";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }
}