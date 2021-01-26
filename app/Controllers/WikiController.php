<?php


namespace App\Controllers;

use App\Models\WikiModel;

class WikiController extends BaseController
{
    private $wiki_model;

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

    public function search(){
        $search = $this->request->getVar('search');
        $userId = $this->request->getVar('userId');
        $data = $this->wiki_model->get_search($search, $userId);
        return $this->response->setJSON($data);
    }

    public function getPictures(){
        $search = $this->request->getVar('search');
        $userId = $this->request->getVar('userId');
        $data = $this->wiki_model->get_pictures($search, $userId);
        return $this->response->setJSON($data);
    }

    public function getSpots(){
        $plant = $this->request->getVar('plant');
        $userId = $this->request->getVar('userId');
        $data = $this->wiki_model->get_spots($plant, $userId);
        return $this->response->setJSON($data);
    }
}