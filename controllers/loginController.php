<?php

include_once './Sessionhelper/dbSession.php';

class Admin extends DB{

    private $name;
    private $username;

    public function adminExists($admin, $password){
        $md5pass = md5($password);

        $query = $this->connect()->prepare('SELECT * FROM admins WHERE username = :admin AND password = :pass');
        $query->execute(['admin' => $admin, 'pass' => $md5pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setAdmin($admin){
        $query = $this->connect()->prepare('SELECT * FROM admins WHERE username = :admin');
        $query->execute(['admin' => $admin]);

        foreach ($query as $currentUser) {
            $this->name = $currentUser['name'];
            $this->username = $currentUser['username'];
        }
    }

    public function getName(){
        return $this->name;
    }
}


?>