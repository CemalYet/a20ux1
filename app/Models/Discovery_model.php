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

    public function get_feed_data($id) {

        //get friends
        $session = \Config\Services::session();
        $session->get('ses_data');

        //populate friends info

        //get discoveries
        $query_text = "SELECT photo.photoPath, a20ux1.DiscoveryTable.takenDate, a20ux1.DiscoveryTable.title, a20ux1.DiscoveryTable.leafId, a20ux1.DiscoveryTable.discoveryId, a20ux1.UserTable.userName, a20ux1.UserTable.avatar 
FROM a20ux1.DiscoveryTable
INNER JOIN (SELECT a20ux1.FriendsTable.sender as userId FROM a20ux1.FriendsTable WHERE (a20ux1.FriendsTable.receiver = '{$id}') AND (a20ux1.FriendsTable.state = 1)
									UNION
									SELECT a20ux1.FriendsTable.receiver FROM a20ux1.FriendsTable WHERE (a20ux1.FriendsTable.sender = '{$id}') AND (a20ux1.FriendsTable.state = 1) ) users
ON a20ux1.DiscoveryTable.userIdFk = users.userId
INNER JOIN a20ux1.UserTable 
ON a20ux1.UserTable.userId = a20ux1.DiscoveryTable.userIdFk
INNER JOIN
(SELECT photoId, discoveryIdFk, photoPath FROM (SELECT a20ux1.DiscoveryPhotosTable.photoId, a20ux1.DiscoveryPhotosTable.discoveryIdFk, a20ux1.DiscoveryPhotosTable.photoPath, row_number() over(
partition by discoveryIdFk order by photoId) as row_num from a20ux1.DiscoveryPhotosTable) AS order_photos WHERE order_photos.row_num = 1) as photo
on a20ux1.DiscoveryTable.discoveryId = photo.discoveryIdFk ORDER BY takenDate desc;";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    public function get_user_discoveries($id) {
        $query_text = "SELECT photo.photoPath, a20ux1.DiscoveryTable.discoveryId 
FROM a20ux1.DiscoveryTable
INNER JOIN
(select * from (select*, row_number() over(
partition by discoveryIdFk order by photoId) as row_num from a20ux1.DiscoveryPhotosTable) as order_photos where order_photos.row_num = 1) as photo
on a20ux1.DiscoveryTable.discoveryId = photo.discoveryIdFk
WHERE a20ux1.DiscoveryTable.userIdFk = '{$id}'  ORDER BY takenDate desc;";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    public function get_tagged_discoveries($id)
    {
        $query_text = "SELECT photo.photoPath, a20ux1.DiscoveryTable.discoveryId
FROM a20ux1.DiscoveryTable
INNER JOIN (SELECT * FROM a20ux1.TaggedTable WHERE a20ux1.TaggedTable.taggedByUserIdFk = '{$id}') as taggedDiscoveries
ON a20ux1.DiscoveryTable.discoveryId = taggedDiscoveries.discoveryIdFk
INNER JOIN
(select * from (select*, row_number() over(
partition by discoveryIdFk order by photoId) as row_num from a20ux1.DiscoveryPhotosTable) as order_photos where order_photos.row_num = 1) as photo
on a20ux1.DiscoveryTable.discoveryId = photo.discoveryIdFk  ORDER BY takenDate desc;";
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
        $query_text = "SELECT a20ux1.CommentsTable.commentedByUserIdFk, a20ux1.UserTable.avatar, a20ux1.UserTable.userName,  a20ux1.CommentsTable.comment FROM a20ux1.CommentsTable, a20ux1.UserTable WHERE a20ux1.CommentsTable.commentedByUserIdFk = a20ux1.UserTable.userId AND a20ux1.CommentsTable.discoveryIdFk = '{$discoId}';";
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

    public function get_nr_of_likes($discoId){
        $query_text = "SELECT COUNT(a20ux1.LikedTable.discoveryIdFk) AS NrOfLikes
FROM a20ux1.LikedTable
WHERE a20ux1.LikedTable.discoveryIdFk = '{$discoId}';";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    public function upload_comment($data){
        $session = \Config\Services::session();
        $session->get('ses_data');
        $query_text = "INSERT INTO a20ux1.CommentsTable (commentedByUserIdFk, discoveryIdFk, comment) VALUES ('{$data['userId']}', '{$data['discoId']}', '{$data['comment']}');";
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

    public function delete_post($id){
        $query_text = "DELETE FROM a20ux1.DiscoveryTable WHERE a20ux1.DiscoveryTable.discoveryId = '{$id}';";
        $this->db->query($query_text);
    }

    public function get_heart_button($ids){
        $query_text = "SELECT a20ux1.LikedTable.likedByUserIdFk
FROM a20ux1.LikedTable
WHERE a20ux1.LikedTable.discoveryIdFk = '{$ids['discoId']}' AND a20ux1.LikedTable.likedByUserIdFk = '{$ids['userId']}';";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }


}