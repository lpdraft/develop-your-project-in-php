<h1>Hola Soy Controller</h1>

<?php
require_once('../core/classes/User.php');

class UsersController {
    private $userClass;
    
    public function __construct(){
        $this -> userClass = new User;
    }

    // Store data send via POST  
    public function register(){
        $data = [
            'name' => $_POST['name'],
            'surname' => $_POST['surname'],
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'city' => $_POST['city'],
            'phonenumber' => $_POST['phonenumber'],
            'password' => $_POST['password']
        ];

        echo '<pre>';
        print_r($data);

        if($this->userClass->register($data)){
            // header('Location: ../index.php');
        } else{
            die('Something went bad...!');
        }
    }


}

$init = new UsersController;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    switch($_POST['type']){
        case 'register': 
            $init -> register();
            break;
        case 'login': 
            // $init -> login();
            break;
        default: 
            header('Location: ./index.php');
    }
}


?>