<?php

namespace App\Models;

use CodeIgniter\Model;

class User_model extends Model{
    protected $table = 'UserTable';
    protected $primaryKey = 'userId';
    protected $allowedFields = ['userName', 'emailAddress', 'passHash', 'creationDate', 'lastLogin', 'useLocation', 'avatar'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    protected function beforeInsert(array $data){
        $data = $this->passwordHash($data);
        $data['data']['creationDate'] = date('Y-m-d H:i:s');
        $data['data']['lastLogin'] = date('Y-m-d H:i:s');

        return $data;
    }

    protected function beforeUpdate(array $data){
        $data = $this->passwordHash($data);
        $data['data']['lastLogin'] = date('Y-m-d H:i:s');
        return $data;
    }

    protected function passwordHash(array $data){
        if(isset($data['data']['passHash']))
        {
            $data['data']['passHash'] = password_hash($data['data']['passHash'], PASSWORD_DEFAULT);
        }
        return $data;
    }
    

    public function check_email($data){
        $query_text = "SELECT a20ux1.UserTable.emailAddress FROM a20ux1.UserTable WHERE a20ux1.UserTable.emailAddress = '{$data}';";
        $query = $this->db->query($query_text);
        return $query->getResult();

    }

    public function saveDaysToDb($data){
        $query_text = "INSERT INTO a20ux1.ReminderTable (userIdFk, day) VALUES ('{$data['userId']}', '{$data['day']}');";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    public function saveToDb($data){
        $query_text = "INSERT INTO a20ux1.UserTable (userName, emailAddress, passHash, useLocation, creationDate) VALUES ('{$data['userName']}', '{$data['emailAddress']}', '{$data['password']}', {$data['location']}, now());";
        $this->db->query($query_text);
    }

    public function getUserId($data){
        $query_text = "SELECT a20ux1.UserTable.userId FROM a20ux1.UserTable WHERE a20ux1.UserTable.emailAddress = '{$data['emailAddress']}';";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    public function login($data) {
        $query_text = "SELECT a20ux1.UserTable.userId, a20ux1.UserTable.userName, a20ux1.UserTable.passHash FROM a20ux1.UserTable WHERE a20ux1.UserTable.emailAddress = '{$data['email']}';";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    public function getCurrentData($id){
        $query_text = "SELECT a20ux1.UserTable.userId, a20ux1.UserTable.userName, a20ux1.UserTable.emailAddress, a20ux1.UserTable.avatar FROM a20ux1.UserTable WHERE userId = '{$id}';";
        $query = $this->db->query($query_text);
        return $query->getResult();
    }
    
    public function change_rem($data){
        $session = \Config\Services::session();
        $session->get('ses_data');
        $query_text = "INSERT INTO a20ux1.ReminderTable (userIdFk, day) VALUES ('{$data['userId']}', '{$data['day']}');";
        $this->db->query($query_text);
    }

    public function delete_rem($data){
        $session = \Config\Services::session();
        $session->get('ses_data');
        $query_text = "DELETE FROM a20ux1.ReminderTable WHERE (userIdFk = '{$data['id']}')";
        $this->db->query($query_text);
    }
}