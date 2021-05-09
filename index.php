<?php
//error_reporting(E_ALL & ~E_NOTICE);
require_once 'header.tpl';
require_once 'modules/Controller.php';
session_start();
$controller = new Controller();
$controller->redirect();