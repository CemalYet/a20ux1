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
        $query_text = "SELECT a20ux1.DiscoveryPhotosTable.photoPath, a20ux1.DiscoveryTable.discoveryId FROM a20ux1.DiscoveryTable, a20ux1.DiscoveryPhotosTable WHERE (a20ux1.DiscoveryTable.discoveryId = a20ux1.DiscoveryPhotosTable.discoveryIdFk) AND (a20ux1.DiscoveryTable.userIdFk = '{$id}') AND (a20ux1.DiscoveryPhotosTable.photoOrder = 1);";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    public function get_tagged_discoveries($id)
    {
        $query_text = "SELECT a20ux1.DiscoveryPhotosTable.photoPath, a20ux1.DiscoveryTable.discoveryId
                            FROM a20ux1.DiscoveryTable
                            INNER JOIN a20ux1.DiscoveryPhotosTable 
	                            RIGHT JOIN a20ux1.TaggedTable 
		                            ON a20ux1.DiscoveryPhotosTable.discoveryIdFk = a20ux1.DiscoveryTable.discoveryId AND a20ux1.TaggedTable.discoveryIdFk = a20ux1.DiscoveryTable.discoveryId 
                                    WHERE a20ux1.DiscoveryPhotosTable.photoOrder = '1' AND a20ux1.TaggedTable.taggedByUserIdFk = '{$id}';";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    public function get_user_info($emailAddress) {
        $query_text = "SELECT userName, avatar, userId, emailAddress FROM a20ux1.UserTable WHERE emailAddress = '{$emailAddress}';";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    public function get_disco_info($discoId) {
        $query_text = "SELECT a20ux1.DiscoveryTable.takenDate, a20ux1.DiscoveryTable.title, a20ux1.DiscoveryTable.description, a20ux1.DiscoveryTable.location, a20ux1.UserTable.userId, a20ux1.UserTable.userName, a20ux1.UserTable.avatar 
                        FROM a20ux1.DiscoveryTable
                            INNER JOIN a20ux1.UserTable ON a20ux1.DiscoveryTable.userIdFk = a20ux1.UserTable.userId
                            WHERE a20ux1.DiscoveryTable.discoveryId = '{$discoId}';";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    public function get_comments($discoId){
        $session = \Config\Services::session();
        $session->get('ses_data');
        $query_text = "SELECT a20ux1.CommentsTable.commentedByUserIdFk, a20ux1.UserTable.avatar, a20ux1.CommentsTable.comment FROM a20ux1.CommentsTable, a20ux1.UserTable WHERE a20ux1.CommentsTable.commentedByUserIdFk = a20ux1.UserTable.userId AND a20ux1.CommentsTable.discoveryIdFk = '{$discoId}';";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    public function get_tags($discoveryId){
        $session = \Config\Services::session();
        $session->get('ses_data');
        $query_text = "SELECT a20ux1.TaggedTable.taggedByUserIdFk, a20ux1.UserTable.userName FROM a20ux1.TaggedTable, a20ux1.UserTable WHERE a20ux1.TaggedTable.taggedByUserIdFk = a20ux1.UserTable.userId AND a20ux1.TaggedTable.discoveryIdFk ={$discoveryId} ;";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    public function upload_data($data){
        $session = \Config\Services::session();
        $session->get('ses_data');
        $query_text = "INSERT INTO a20ux1.CommentsTable (commentedByUserIdFk, discoveryIdFk, comment) VALUES ('11', '2', '{$data['newComment']}');";
        $this->db->query($query_text);
    }

    public function send_like($data){
        $session = \Config\Services::session();
        $session->get('ses_data');
        $query_text = "INSERT INTO a20ux1.LikedTable (likedByUserIdFk, discoveryIdFk) VALUES ('{$data['likedByUserIdFk']}', '{$data['discoveryIdFk']}');";
        $this->db->query($query_text);
    }

    public function remove_like($data){
        $session = \Config\Services::session();
        $session->get('ses_data');
        $query_text = "DELETE FROM a20ux1.LikedTable WHERE a20ux1.LikedTable.likedByUserIdFk = {$data['likedByUserIdFk']} AND a20ux1.LikedTable.discoveryIdFk = {$data['discoveryIdFk']};";
        $this->db->query($query_text);
    }


}