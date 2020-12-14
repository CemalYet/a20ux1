<?php


namespace App\Controllers;

use App\Models\WikiModel;

class WikiController extends BaseController
{
    private $wiki_model;
    //private $userId = 130;

    public function __construct()
    {
        $this->wiki_model = new WikiModel();
    }

    public function map(){
        return view('index');
    }

    public function getWikiData(){
        $userId = $this->request->getVar('userId');
        $data = $this->wiki_model->get_wiki_data($userId);
        return $this->response->setJSON($data);
    }
}