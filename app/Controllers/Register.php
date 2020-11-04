<?php

namespace App\Controllers;
use App\Models\User_model;

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
            'username' => 'required|min_length[3]|max_length[20]',
            'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[UserTable.emailAddress]',
            'password' => 'required|min_length[8]|max_length[255]',
            'password_confirm' => 'matches[password]'
        ];

        if($this->validate($rules)){
            $model = new User_model();
            $data = [
                'userName'      => $this->request->getVar('name'),
                'emailAddress'  => $this->request->getVar('email'),
                'passHash'      => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];

            $model->save($data);

            //$session = session();
            //$session->setFlashdata('success', 'Successful Registration');

            return redirect()->to('/registrationsteptwo');
        }

        else{
            $data['validation'] = $this->validator;
            return redirect()->to('/registrationstepone');
        }
    }

    public function registrationsteptwo() {
        return view('registrationsteptwo');
    }

    public function registrationstepthree() {
        return view('registrationstepthree');
    }

    public function registrationdone() {
        return view('registrationdone');
    }
}