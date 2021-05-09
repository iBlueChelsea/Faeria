<?php

class Controller
{
    public function redirect()
    {
        if (!$this->isLoggedIn()) {
            $class = 'Login';
        } else {
            $class = $_REQUEST['module'] ?? 'Home';
        }
        require_once "modules/$class/$class.php";
        new $class();
    }

    private function isLoggedIn()
    {
        if (!isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }
}
