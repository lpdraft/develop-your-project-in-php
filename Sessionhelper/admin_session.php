<?php

class AdminSession{

    public function __construct(){
        session_start();
    }

    public function setCurrentUser($admin){
        $_SESSION['admin'] = $admin;
    }

    public function getCurrentUser(){
        return $_SESSION['admin'];
    }

    public function closeSession(){
        session_unset();
        session_destroy();
    }
}


?>