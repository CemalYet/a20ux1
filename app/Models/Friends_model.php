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

    public function get_friends() {
        $session = session();
        $session->get('ses_data');
        $query_text = "SELECT a20ux1.UserTable.userName, a20ux1.UserTable.avatar FROM a20ux1.FriendsTable INNER JOIN a20ux1.UserTable ON a20ux1.FriendsTable.userId_2 = a20ux1.UserTable.userId WHERE a20ux1.FriendsTable.userId_1 = ?;";
        $query = $this->db->query($query_text, $session->get('userId'));
        return $query->getResult();
    }

    public function add_friend($uerId_1, $userId_2, $state) {
        $query_text = "INSERT INTO `a20ux1`.`FriendsTable` (`userId_1`, `userId_2`, 'state') VALUES (? , ?, ?);";
        $query = $this->db->query($query_text, $userId_1, $userId_2, $state);
    }

    public function accept_friend_request($userId_1, $userId_2, $state) {
        $query_text = "UPDATE `a20ux1`.`FriendsTable` SET `state` = ? WHERE (`userId_1` = ?) and (`userId_2` = ?);";
        $query = $this->db->query($query_text, $state, $userId_1, $userId_2);
    }

    public function unfriend($userA, $userB) {
        $query_text = "DELETE FROM `a20ux1`.`FriendsTable` WHERE ((`userId_1` = '.$userA.') or (`userId_1` = '.$userB.')) and ((`userId_2` = '.$userA.') or (`userId_2` = '.$userB.'));";
        $query = $this->db->query($query_text);
    }

}