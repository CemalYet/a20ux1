<?php

namespace App\Models;

use CodeIgniter\Model;

class User_model extends Model{
    protected $table = 'UserTable';
    protected $primaryKey = 'userId';
    protected $allowedFields = ['userName', 'emailAddress', 'passHash'];

}