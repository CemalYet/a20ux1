<?php

namespace App\Models;

use CodeIgniter\Model;

class Friends_model extends Model
{
    protected $table = 'FriendsTable';
    protected $allowedFields = ['userId_1', 'userId_2', 'state'];

    /**
     * EventModel constructor.
     */
    public function __construct() {
        $this->db = \Config\Database::connect();
    }

    public function get_friends($id) {
        $query_text = "SELECT a20ux1.UserTable.userName, a20ux1.UserTable.userId, a20ux1.UserTable.avatar FROM a20ux1.FriendsTable INNER JOIN a20ux1.UserTable ON a20ux1.FriendsTable.userId_2 = a20ux1.UserTable.userId WHERE a20ux1.FriendsTable.userId_1 = %s UNION SELECT a20ux1.UserTable.userName, a20ux1.UserTable.userId, a20ux1.UserTable.avatar FROM a20ux1.FriendsTable INNER JOIN a20ux1.UserTable ON a20ux1.FriendsTable.userId_1 = a20ux1.UserTable.userId WHERE a20ux1.FriendsTable.userId_2 = %s;";
        $sql = sprintf($query_text, $id, $id);
        $query = $this->db->query($sql);
        return $query->getResult();
    }

    public function search($userId, $search_string) {
        // first displays user's friends whose names match the search string
        // then displays other (unfriended) users whose name match the search string
        $query_text = "SELECT userName, userId, avatar 
                        FROM (SELECT a20ux1.UserTable.userName, a20ux1.UserTable.userId, a20ux1.UserTable.avatar 
                        FROM a20ux1.FriendsTable INNER JOIN a20ux1.UserTable 
                        ON a20ux1.FriendsTable.userId_2 = a20ux1.UserTable.userId 
                        WHERE a20ux1.FriendsTable.userId_1 = %s 
                        UNION 
                        SELECT a20ux1.UserTable.userName, a20ux1.UserTable.userId, a20ux1.UserTable.avatar 
                        FROM a20ux1.FriendsTable INNER JOIN a20ux1.UserTable ON a20ux1.FriendsTable.userId_1 = a20ux1.UserTable.userId 
                        WHERE a20ux1.FriendsTable.userId_2 = %s) AS friends
                        WHERE (lower(friends.userName) LIKE '%s%')
                        UNION
                        SELECT a20ux1.UserTable.userName, a20ux1.UserTable.userId, a20ux1.UserTable.avatar 
                        FROM a20ux1.UserTable 
                        WHERE lower(a20ux1.UserTable.userName) LIKE '%s%';";
        $sql = sprintf($query_text, $userId, $userId, $search_string);
        $query = $this->db->query($sql);
        return $query->getResult();
    }

    public function add_friend($uerId_1, $userId_2, $state) {
        $query_text = "INSERT INTO `a20ux1`.`FriendsTable` (`userId_1`, `userId_2`, 'state') VALUES (? , ?, ?);";
        $this->db->query($query_text, $userId_1, $userId_2, $state);
    }

    public function get_friend_request($userId_2, $state) {
        // first displays user's friends whose names match the search string
        // then displays other (unfriended) users whose name match the search string
        $query_text = "SELECT a20ux1.UserTable.userName, a20ux1.UserTable.userId, a20ux1.UserTable.avatar 
                        FROM a20ux1.FriendsTable INNER JOIN a20ux1.UserTable 
                        ON a20ux1.FriendsTable.userId_1 = a20ux1.UserTable.userId 
                        WHERE a20ux1.FriendsTable.userId_2 = %s AND a20ux1.FriendsTable.state = %s;";
        $sql = sprintf($query_text, $userId_2, $state);
        $query = $this->db->query($sql);
        return $query->getResult();
    }

    public function accept_friend_request($userId_1, $userId_2, $state) {
        $query_text = "UPDATE `a20ux1`.`FriendsTable` SET `state` = ? WHERE (`userId_1` = ?) and (`userId_2` = ?);";
        $this->db->query($query_text, $state, $userId_1, $userId_2);
    }

    public function unfriend($userA, $userB) {
        $query_text = "DELETE FROM `a20ux1`.`FriendsTable` WHERE ((`userId_1` = %s) or (`userId_1` = %s)) and ((`userId_2` = %s) or (`userId_2` = %s));";
        $sql = sprintf($query_text, $userA, $userB, $userA, $userB);
        $query = $this->db->query($sql);
        return $query->getResult();
    }

}