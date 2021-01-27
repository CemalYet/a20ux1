<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\User_model;

class Login extends BaseController
{

    private $user_model;

    public function __construct()
    {
        $this->user_model = new User_model();
    }

    public function index()
    {
        helper(['form']);
        echo view('loginpage');
    }

    public function auth2()
    {
        $session = session();

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $data = $this->user_model->where('userName', $username)->first();

        if($data){
            $pass = $data['passHash'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'userId'       => $data['userId'],
                    'userName'     => $data['userName'],
                    'emailAddress' => $data['emailAddress'],
                    'loggedIn'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/public/feed.html');
            }
            else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/public/login');
            }
        }
        else{
            $session->setFlashdata('msg', 'Username not Found');
            return redirect()->to('/public/login');
        }
    }

    public function auth()
    {
        $data = [
            'username' => $this->JSON_DATA['my_username'],
            'emailaddress' => $this->JSON_DATA['my_email'],
            'password' => $this->JSON_DATA['my_password']
        ];
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        echo "Logged out successfully";
    }
}