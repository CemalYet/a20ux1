<?php

namespace App\Controllers;
use App\Models\User_model;
use App\Models\Reminder_model;

class Register extends \CodeIgniter\Controller
{
    private $user_model;
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
        $session = session();
        $ses_data = [
            'userId'       => $user_id[0]->userId,
            'userName'     => $data['my_username'],
            'emailAddress' => $data['my_email'],
            'loggedIn'     => TRUE
        ];
        $session->set($ses_data);
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
        $new_data = [
            'email'         => $this->request->getVar('my_email'),
            'password'      => $this->request->getVar('my_password')
        ];
        $db_data = $this->user_model->login($new_data);
        if(password_verify($new_data['password'], $db_data[0]->passHash)){

            //create a session
            $session = session();
            $ses_data = [
                'userId'       => $db_data[0]->userId,
                'userName'     => $db_data[0]->userName,
                'emailAddress' => $new_data['email'],
                'loggedIn'     => TRUE
            ];
            $session->set($ses_data);

            echo 'Password is valid';
        } else {
            echo 'Not valid';
        }
    }

    public function changeReminders() {
        $data = [
            'days'         => $this->JSON_DATA['my_days'],
            'id'           => $this->JSON_DATA['my_id']
        ];
        $this->user_model->delete_rem($data);
        foreach($data['days'] as $value){
            $insertData = [
                'userId'    => $data['id'],
                'day'       => $value
            ];
            $this->user_model->change_rem($insertData);
        }
    }

}