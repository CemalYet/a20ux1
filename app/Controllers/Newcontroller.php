<?php


namespace App\Controllers;

class Newcontroller extends \CodeIgniter\Controller
{
    private $menu_model;
    private $data;

    /**
     * Newcontroller constructor.
     */
    public function __construct() {
        $this->menu_model = new \Menu_model();
    }

    public function home() {
        $this->data['menu_items'] = $this->menu_model->get_menuitems('Home');
        return view('main', $this->data);
    }

    public function about() {
        $this->data['menu_items'] = $this->menu_model->get_menuitems('about');
        return view ('about', $this->data);
    }

    public function contact() {
        $this->data['menu_items'] = $this->menu_model->get_menuitems('contact');
        return view('contact', $this->data);
    }


}