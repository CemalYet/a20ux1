<?php

namespace App\Models;

use CodeIgniter\Model;

class Friends_model extends Model
{
    protected $table = 'FriendsTable';
    protected $allowedFields = ['sender', 'receiver', 'state'];

    // Possible states are:
    // pending: awaiting userId_2's' confirmation (this function is always triggered by userId_1)
    // friends: mutual friendship between both users

    /**
     * EventModel constructor.
     */
    public function __construct() {
        $this->db = \Config\Database::connect();
    }

    public function get_friends($id) {
        $query_text = "SELECT friends.userName, friends.userId, friends.avatar 
                        FROM (SELECT a20ux1.UserTable.userName, a20ux1.UserTable.userId, a20ux1.UserTable.avatar 
                        FROM a20ux1.FriendsTable INNER JOIN a20ux1.UserTable 
                        ON a20ux1.FriendsTable.receiver = a20ux1.UserTable.userId 
                        WHERE a20ux1.FriendsTable.sender = %s AND a20ux1.FriendsTable.state = 1
                        UNION 
                        SELECT a20ux1.UserTable.userName, a20ux1.UserTable.userId, a20ux1.UserTable.avatar 
                        FROM a20ux1.FriendsTable INNER JOIN a20ux1.UserTable 
                        ON a20ux1.FriendsTable.sender = a20ux1.UserTable.userId 
                        WHERE a20ux1.FriendsTable.receiver = %s AND a20ux1.FriendsTable.state = 1 ) 
                        AS friends;";
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
                        ON a20ux1.FriendsTable.receiver = a20ux1.UserTable.userId 
                        WHERE a20ux1.FriendsTable.sender = %s AND lower(a20ux1.UserTable.userName) LIKE '%s%%'
                        UNION ALL
                        SELECT a20ux1.UserTable.userName, a20ux1.UserTable.userId, a20ux1.UserTable.avatar 
                        FROM a20ux1.FriendsTable INNER JOIN a20ux1.UserTable 
                        ON a20ux1.FriendsTable.sender = a20ux1.UserTable.userId 
                        WHERE a20ux1.FriendsTable.receiver = %s AND lower(a20ux1.UserTable.userName) LIKE '%s%%' 
                        UNION 
                        SELECT a20ux1.UserTable.userName, a20ux1.UserTable.userId, a20ux1.UserTable.avatar 
                        FROM a20ux1.UserTable 
                        WHERE lower(a20ux1.UserTable.userName) LIKE '%s%%') AS result;";
        $sql = sprintf($query_text, $userId, $search_string, $userId, $search_string, $search_string);
        $query = $this->db->query($sql);
        return $query->getResult();
    }

    public function add_friend($userId_1, $userId_2) {
        $query_text = "INSERT INTO `a20ux1`.`FriendsTable` (`sender`, `receiver`, `state`) VALUES (%s, %s, b'0');";
        $sql = sprintf($query_text, $userId_1, $userId_2);
        $this->db->query($sql);
    }

    public function get_friend_request($userId_2) {
        // first displays user's friends whose names match the search string
        // then displays other (unfriended) users whose name match the search string
        $query_text = "SELECT a20ux1.UserTable.userName, a20ux1.UserTable.userId, a20ux1.UserTable.avatar 
                        FROM a20ux1.FriendsTable INNER JOIN a20ux1.UserTable 
                        ON a20ux1.FriendsTable.sender = a20ux1.UserTable.userId 
                        WHERE a20ux1.FriendsTable.receiver = %s AND a20ux1.FriendsTable.state = 0;";
        $sql = sprintf($query_text, $userId_2);
        $query = $this->db->query($sql);
        return $query->getResult();
    }

    public function accept_friend_request($userId_1, $userId_2) {
        $query_text = "UPDATE `a20ux1`.`FriendsTable` SET `state` = 1 WHERE (`sender` = %s) and (`receiver` = %s);";
        $sql = sprintf($query_text, $userId_1, $userId_2);
        $this->db->query($sql);
    }

    public function unfriend($userA, $userB) {
        $query_text = "DELETE FROM `a20ux1`.`FriendsTable` WHERE ((`sender` = %s) or (`sender` = %s)) and ((`receiver` = %s) or (`receiver` = %s));";
        $sql = sprintf($query_text, $userA, $userB, $userA, $userB);
        $query = $this->db->query($sql);
        return $query->getResult();
    }

}