<?php

namespace App\Models;

use CodeIgniter\Model;

class Reminder_model extends Model{
    protected $table = 'ReminderTable';
    protected $primaryKey = 'reminderId';
    protected $allowedFields = ['userIdFk', 'day'];

}