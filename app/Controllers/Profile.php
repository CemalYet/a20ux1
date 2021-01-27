<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Discovery_model;
use App\Models\User_model;
/*use App\Models\Tags_model;
use App\Models\Badges_model;*/

class Profile extends BaseController
{
    private $discovery_model;
    private $user_model;

    public function __construct()
    {
        $this->discovery_model = new Discovery_model();
        $this->user_model = new User_model();
    }

    public function getOwnDiscoveries(){

        $session = session();
        $id = $session->get('userId');

        $data = $discovery_model->get_user_discoveries($id);
        echo json_encode($data);
    }
    
    public function getUserDiscoveries(){
        $userId = $this->request->getVar('data');
        $data = $discovery_model->get_user_discoveries($userId);
        return $this->response->setJSON($data);
        
    }

    public function getTaggedDiscoveries(){
        $session = session();
        $id = $session->get('userId');

        $data = $discovery_model->get_tagged_discoveries($id);
        echo json_encode($data);
    }

    public function getFetchedUserData(){
        $_POST = json_decode($_POST['data'], true);
        $userId = $_POST['userId'];

        // get user's data from database
        $data = $user_model->getCurrentData($userId);

        echo json_encode($data);
    }

    public function getCurrentUserData(){
        $session = session();
        $userId = $session->get('userId');

        $data = $user_model->getCurrentData($userId);

        echo json_encode($data);
    }

    public function settings()
    {
        // $session = session();
        // echo "Welcome back, ".$session->get('userName');
        return view('settings');
        //$this->getOwnDiscoveries();
    }

    public function updateProfile()
    {
        $session = session();

        $_POST = json_decode($_POST['data'],true);
        $userId = $session->get('userId');

        $newData = [
            'userId'        => $userId,
            'userName'      => $_POST['userName'],
            'emailAddress'  => $_POST['emailAddress'],
            'avatar'        => $_POST['avatar'],
        ];
        $user_model->save($newData);

        return "Profile successfully updated";
    }

    public function updatePassword()
    {
        $session = session();

        $_POST = json_decode($_POST['data'],true);
        $userId = $session->get('userId');
        $password = $_POST['password'];

        $data = $user_model->where('userId', $userId)->first();

        $pass = $data['passHash'];
        $verify_pass = password_verify($password, $pass);

        if($verify_pass) {
            $newData = [
                'userId' => $userId,
                'passHash' => $_POST['newPassword'],
            ];
            $user_model->save($newData);

            return "Password successfully updated";
        }
        else{
            return "Wrong password";
        }
    }

    /*

    public function getTaggedDiscoveries(){
        $model = new Discovery_model();
        $session = session();
        $id = $session->get('userId');
        $data = $model->get_tagged_discoveries($id);
        echo json_encode($data);
    }


    public function getBadges(){
        $model = new Badges_model();
        $session = session();
        $id = $session->get('userId');
        $data = $model->get_user_badges($id);
        echo json_encode($data);
    }*/

}