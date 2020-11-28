<?php

namespace App\Controllers;
use App\Models\User_model;
use App\Models\Reminder_model;

class Register extends \CodeIgniter\Controller
{
    private $JSON_DATA;

    public function __construct()
    {
        $this->user_model = new User_model();
        $this->JSON_DATA = (array)json_decode(file_get_contents("php://input"));
    }


    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('registrationstepone', $data);
    }

    public function save()
    {
        $session = session();
        $data = [
            'userName'      => $this->JSON_DATA['my_username'],
            'emailAddress'  => $this->JSON_DATA['my_email'],
            'password'      => $this->JSON_DATA['my_password'],
            'location'      => $this->JSON_DATA['my_location'],
            'days'          => $this->JSON_DATA['my_days']
        ];
        $data['password'] = $this->hash_password($data['password']);
        $this->user_model->saveToDb($data);
        
        $user_id = $this->user_model->getUserId($data);
        
        foreach($data['days'] as $value){
            $insertData = [
                'userId'    => $user_id[0]->userId,
                'day'       => $value
            ];
            $this->user_model->saveDaysToDb($insertData);
        }
    }

    private function hash_password($password){
        return password_hash($password, PASSWORD_BCRYPT);
    }

    public function checkemail() {
        $req = $this->request->getVar('data');
        $data = $this->user_model->check_email($req);
        return $this->response->setJSON($data);
    }

    public function checklogin() {
        $data = [
            'email'         => $this->JSON_DATA['my_email'],
            'password'      => $this->JSON_DATA['my_password']
        ];
        $data['password'] = $this->hash_password($data['password']);
        $this->user_model->login($data);
        //return $this->response->setJSON($data);
    }

}