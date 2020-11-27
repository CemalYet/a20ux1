<?php


namespace App\Controllers;

use App\Models\Discovery_model;

class Home extends \CodeIgniter\Controller
{
    private $menu_model;
    private $database_model;
    private $data;

    /**
     * Home constructor.
     */
    public function __construct() {
        $this->menu_model = new \Menu_model();
        $this->database_model = new Discovery_model();
    }

    public function home() {
        $this->data['menu_items'] = $this->menu_model->get_menuitems('Home');
        return view('index.php');
    }

    public function about() {
        $items = $this->database_model->get_data();
        $data2['items'] = $items;
        $this->data['content'] = view('list', $data2);

        $this->data['menu_items'] = $this->menu_model->get_menuitems('about');
        return view ('about', $this->data);
    }

    public function contact() {
        $this->data['menu_items'] = $this->menu_model->get_menuitems('contact');
        return view('contact', $this->data);
    }

    public function vue() {
        $this->data['menu_items'] = $this->menu_model->get_menuitems('vue');
        return view('vue.html', $this->data);
    }
}