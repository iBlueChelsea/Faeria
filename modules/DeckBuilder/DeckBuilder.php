<?php

require_once "modules/Module.php";

class DeckBuilder extends Module
{
    public function getContent()
    {
        if ($_POST['back'] ?? null){
            header('Location: index.php?module=Home');
            return;
        }
        $this->smarty->assign('user',$_SESSION['user']);
    }
}