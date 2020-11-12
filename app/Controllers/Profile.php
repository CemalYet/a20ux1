<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Discovery_model;
use App\Models\User_model;
/*use App\Models\Tags_model;
use App\Models\Badges_model;*/

class Profile extends Controller
{
    public function index()
    {
        $session = session();
        // echo "Welcome back, ".$session->get('userName');
        return view('profile');
        //$this->getOwnDiscoveries();
    }

    public function getOwnDiscoveries(){
        $model = new Discovery_model();
        $session = session();
        $id = $session->get('userId');

        $data = $model->get_user_discoveries($id);
        //$data = $model->where('userIdFk', '.$id.');
        echo json_encode($data);
    }

    public function getUserData(){
        $model = new User_model();
        $session = session();
        $id = $session->get('userId');
        $data = $model->find($id);
        echo json_encode($data);
    }

/*    public function getTags(){
        $model = new Tags_model();
        $session = session();
        $id = $session->get('userId');
        $data = $model->get_user_tags($id);
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