<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Discovery_model;
use App\Models\User_model;
/*use App\Models\Tags_model;
use App\Models\Badges_model;*/

class Profile extends Controller
{

    public function getOwnDiscoveries(){
        $model = new Discovery_model();
        $session = session();
        $id = $session->get('userId');

        $data = $model->get_user_discoveries($id);
        //$data = $model->where('userIdFk', '.$id.');
        echo json_encode($data);
    }
    
    public function getUserDiscoveries(){
        $model = new Discovery_model();
        $userId = $this->request->getVar('data');
        $data = $model->get_user_discoveries($userId);
        return $this->response->setJSON($data);
        
    }

    public function getTaggedDiscoveries(){
        $model = new Discovery_model();
        $session = session();
        $id = $session->get('userId');

        $data = $model->get_tagged_discoveries($id);
        echo json_encode($data);
    }

    public function getFetchedUserData(){
        $model = new User_model();

        $_POST = json_decode($_POST['data'], true);
        $userId = $_POST['userId'];

        // get user's data from database
        $data = $model->getCurrentData($userId);

        echo json_encode($data);
    }

    public function getCurrentUserData(){
        $model = new User_model();

        $session = session();
        $userId = $session->get('userId');

        // get user's data from database
        // $data = $model->find($userId);
        $data = $model->getCurrentData($userId);

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
        $model = new User_model();

        $_POST = json_decode($_POST['data'],true);
        $userId = $session->get('userId');

        $newData = [
            'userId'        => $userId,
            'userName'      => $_POST['userName'],
            'emailAddress'  => $_POST['emailAddress'],
            'avatar'        => $_POST['avatar'],
        ];
        $model->save($newData);

        return "Profile successfully updated";
    }

    public function updatePassword()
    {
        $session = session();
        $model = new User_model();

        $_POST = json_decode($_POST['data'],true);
        $userId = $session->get('userId');
        $password = $_POST['password'];

        $data = $model->where('userId', $userId)->first();

        $pass = $data['passHash'];
        $verify_pass = password_verify($password, $pass);

        if($verify_pass) {
            $newData = [
                'userId' => $userId,
                'passHash' => $_POST['newPassword'],
            ];
            $model->save($newData);

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