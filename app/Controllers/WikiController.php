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
        $data = $this->wiki_model->get_wiki_data();
        return $this->response->setJSON($data);
    }

    public function search(){
        $search = $this->request->getVar('search');
        $data = $this->wiki_model->get_search($search);
        return $this->response->setJSON($data);
    }

    public function getPictures(){
        $search = $this->request->getVar('search');
        $data = $this->wiki_model->get_pictures($search);
        return $this->response->setJSON($data);
    }
}