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
        if ($this->request->getMethod() == 'post') {
            $session = session();
            $model = new User_model();
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');
            $data = $model->where('emailAddress', $email)->first();
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
                    return redirect()->to('/profile');
                }
                else{
                    $session->setFlashdata('msg', 'Wrong Password');
                    return redirect()->to('/login');
                }
            }
            else{
                $session->setFlashdata('msg', 'Email not Found');
                return redirect()->to('/login');
            }
        }
    }

    private function setUserSession($user){
        $ses_data = [
            'userId'       => $data['userId'],
            'userName'     => $data['userName'],
            'emailAddress' => $data['emailAddress'],
            'loggedIn'     => TRUE
        ];

        $session->set($ses_data);
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}