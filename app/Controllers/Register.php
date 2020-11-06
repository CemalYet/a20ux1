<?php

namespace App\Controllers;
use App\Models\User_model;
use App\Models\Reminder_model;

class Register extends \CodeIgniter\Controller
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('registrationstepone', $data);
    }

    public function save()
    {
        //include helper form
        helper(['form']);

        //set rules validation form
        $rules = [
            'username' => 'required|min_length[3]|max_length[20]|is_unique[UserTable.userName]',
            'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[UserTable.emailAddress]',
            'password' => 'required|min_length[8]|max_length[255]',
            'password_confirm' => 'matches[password]'
        ];

        if($this->validate($rules)){
            $session = session();
            $model = new User_model();
            $data = [
                'userName'      => $this->request->getVar('username'),
                'emailAddress'  => $this->request->getVar('email'),
                'passHash'      => $this->request->getVar('password')
            ];
            $model->save($data);

            $newData = $model->where('userName', $data['userName'])->first();
            $ses_data = [
                'userId'       => $newData['userId'],
                'userName'     => $newData['userName'],
                'emailAddress' => $newData['emailAddress'],
                'loggedIn'     => TRUE
            ];
            $session->set($ses_data);

            //$session->setFlashdata('success', 'Successful Registration');

            return redirect()->to('/public/registrationsteptwo');
        }
        else{
            $data['validation'] = $this->validator;
        }

        echo view('registrationstepone', $data);
    }

    public function registrationsteptwo() {
        return view('registrationsteptwo');
    }

    public function getUseLocation() {
        $model = new User_model();
        $session = session();

        if(isset($_POST['locationCheckbox'])){
            $locationCheck = 1;
        }
        else {
            $locationCheck = 0;
        }

        $data = [
            'userId'      => $session->get('userId'),
            'useLocation' => $locationCheck
        ];

        $model->save($data);

        return redirect()->to('/public/registrationstepthree');
    }

    public function registrationstepthree() {
        return view('registrationstepthree');
    }

    public function getDays() {
        $model = new Reminder_model();
        $session = session();

        if(isset($_POST['days'])){
            $reminders = $_POST['days'];
            foreach ($reminders as $value) {
                $data = [
                    'userIdFk'    => $session->get('userId'),
                    'day'         => "$value"
                ];
                $model->save($data);
            }
        }

        return redirect()->to('/public/registrationdone');
    }

    public function registrationdone() {
        return view('registrationdone');
    }
}