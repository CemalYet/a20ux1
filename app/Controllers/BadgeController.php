<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Badge_model;

class BadgeController extends Controller
{
    private $badge_model;

    public function __construct()
    {
        $this->badge_model = new Badge_model();
    }

    public function badges()
    {
        return view('index');
    }

    public function checkChallenges() {
        //$userId = $this->request->getVar('userId');
        $userId = 130;
        $this->badge_model->get_challenges($userId);
    }

    public function showBadges() {
        //$userId = $this->request->getVar('userId');
        $userId = 130;
        $data = $this->badge_model->show_badges($userId);
        return $this->response->setJSON($data);
    }
}