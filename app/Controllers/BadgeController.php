<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Badge_model;

class BadgeController extends Controller
{
    private $badge_model;
    //private $userId = 130;

    public function __construct()
    {
        $this->badge_model = new Badge_model();
    }

    public function badges()
    {
        return view('index');
    }

    public function checkChallenges() {
        $userId = $this->request->getVar('userId');
        $this->badge_model->get_challenges($userId);
    }

    public function showBadges() {
        $userId = $this->request->getVar('userId');
        $data = $this->badge_model->show_badges($userId);
        return $this->response->setJSON($data);
    }

    public function showALLBadges() {
        $userId = $this->request->getVar('userId');
        $data = $this->badge_model->show_all_badges($userId);
        return $this->response->setJSON($data);
    }

    public function enrollUSer() {
        $userId = $this->request->getVar('userId');
        $this->badge_model->enroll($userId);
    }
}