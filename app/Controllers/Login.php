<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\User_model;

class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('loginpage');
    }

    public function auth()
    {
        $session = session();
        $model = new User_model();

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $data = $model->where('userName', $username)->first();

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

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/public/login');
    }
}