<?php


class Menu_model
{
    // <a href="Link" title="title text" class="className">name</a>
    private $menu_items;

    /**
     * Menu_model constructor.
     */
    public function __construct()
    {
        $this->menu_items = array (
            array('name' => 'home', 'title' => 'home', 'link' => 'home', 'className' => 'active') ,
            array('name' => 'about', 'title' => 'about', 'link' => 'about', 'className' => 'inactive'),
            array('name' => 'contact', 'title' => 'contact', 'link' => 'contact', 'className' => 'inactive') ,
        );
    }

    private function set_active($menutitle) {
        foreach ($this->menu_items as &$item) {
            if (strcasecmp($menutitle, $item['name']) == 0) {
                $item['className'] = 'active';
            } else {
                $item['className'] = 'inactive';
            }
        }
    }

    public function get_menuitems($menutitle = 'about') {
        $this->set_active($menutitle);
        return $this->menu_items;
    }
}