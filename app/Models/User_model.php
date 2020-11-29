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

    public function getCurrentData($id){
        $this->db = \Config\Database::connect();
        $query_text = 'SELECT userId, userName, emailAddress, avatar FROM a20ux1.UserTable WHERE userId = ?;';
        $query = $this->db->query($query_text, $id);
        return $query->getResult();
    }
}