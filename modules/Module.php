<?php

require_once "smarty/libs/Smarty.class.php";
require_once "config/db.php";

class Module
{
    protected $db;
    protected $smarty;

    public function __construct()
    {
        $pdo = new DB();
        $this->db = $pdo->connectToDB();
        $this->smarty = new Smarty;
        $this->getContent();
        $this->display();
    }

    protected function display()
    {
        $this->smarty->display('modules/' . get_class($this) . '/display.tpl');
    }

    protected function getContent()
    {
    }
}