<?php

trait Controller
{
    public $view;
    public $model;

    function __construct()
    {
        $this->view = new View();
        $this->model = $this->loadModel(substr(__CLASS__,0,-10));

        $action = "";

        if (isset($_REQUEST["action"])) {
            $action = $_REQUEST["action"];
        }

        if (method_exists(__CLASS__, $action)) {
            call_user_func([__CLASS__, $action], $_REQUEST);
        } else {
            $this->error("Invalid user action");
        }
    }

    function loadModel($model)
    {
        $url = MODELS . '/' . $model . 'Model.php';

        if (file_exists($url)) {
            require_once $url;

            $modelName = $model . 'Model';

            return new $modelName();
        }
    }

    function error($errorMsg)
    {
        require_once VIEWS . "/error/error.php";
    }
}





// <!-- <?php 
// require_once ('Database.php');

// class User {
//     // Variable for db instanciate
//     private $db;

//     public function __construct(){
//         $this -> db = new Database;
//     }
    
//     public function register($data){
//         $this -> db -> query('INSERT INTO admins (name, surname,username, email, city, phone_number, password) VALUES (:name, :surname, :username, :email, :city, :phonenumber, :password )');

//         // Recieve and Resign data to the table
//         $this->db->bind(':name', $data['name']);
//         $this->db->bind(':surname', $data['surname']);
//         $this->db->bind(':username', $data['username']);
//         $this->db->bind(':email', $data['email']);
//         $this->db->bind(':city', $data['city']);
//         $this->db->bind(':phonenumber', $data['phonenumber']);
//         $this->db->bind(':password', $data['password']);

//         if($this -> db -> execute()){
//             return true;
//         } else {
//             return false;
//         }
//     }
  
// }
// ?>  -->