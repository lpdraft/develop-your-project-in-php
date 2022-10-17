<?php

    require_once '../models/loginModel.php';
    require_once '../Sessionhelper/admin_session.php';

    class AdminController {

        private $adminModel;
        
        public function __construct(){
            $this->adminModel = new Admin;
        }

        public function register(){
            //Process form
        
            //Init data
            $data = [
                'adminName' => trim($_POST['adminName']),
                'adminUname' => trim($_POST['adminUname']),
                'adminEmail' => trim($_POST['adminEmail']),
                'adminCity' => trim($_POST['adminCity']),
                'adminPhone' => trim($_POST['adminPhone']),
                'adminPwd' => trim($_POST['adminPwd']),
                'pwdRepeat' => trim($_POST['pwdRepeat'])
            ];

            //Validate inputs
            if(empty($data['adminName']) || empty($data['adminUname']) || empty($data['adminEmail'])  || empty($data['adminCity']) || empty($data['adminPhone']) || 
            empty($data['adminPwd']) || empty($data['pwdRepeat'])) {
                errorMsg("register", "Please fill out all inputs");
                redirect("../index.php");
            }

            if(!preg_match("/^[a-zA-Z0-9]*$/", $data['adminUname'])){
                errorMsg("register", "Invalid username");
                redirect("../index.php");
            }

            if(!filter_var($data['adminEmail'], FILTER_VALIDATE_EMAIL)){
                errorMsg("register", "Invalid email");
                redirect("../index.php");
            }

            if(strlen($data['adminPwd']) < 4){
                errorMsg("register", "Invalid password");
                redirect("../index.php");
            } else if($data['adminPwd'] !== $data['pwdRepeat']){
                errorMsg("register", "Passwords don't match");
                redirect("../index.php");
            }

            //User with the same email or password already exists
            if($this->adminModel->getEmailUsername($data['adminEmail'], $data['adminName'])){
                errorMsg("register", "Username or email already taken");
                redirect("../index.php");
            }

            //Passed all validation checks.
            //Now going to hash password
            $data['adminPwd'] = password_hash($data['adminPwd'], PASSWORD_DEFAULT);

            //Register User
            if($this->adminModel-> register($data)){
                redirect("../index.php");
            }else{
                die("Something went wrong");
            }
        }

        public function login(){

        //Init data
        $data=[
            'name/email' => trim($_POST['name/email']),
            'adminPwd' => trim($_POST['adminPwd'])
        ];

        if(empty($data['name/email']) || empty($data['adminPwd'])){
            errorMsg("login", "Please fill out all inputs");
            header("location: ../index.php");
            exit();
        }

        //Check for user/email
        if($this->adminModel->getEmailUsername($data['name/email'], $data['name/email'])){
            //User Found
            $loggedInUser = $this->adminModel->login($data['name/email'], $data['adminPwd']);
            if($loggedInUser){
                //Create session
                $this->createAdminSession($loggedInUser);
            }else{
                errorMsg("login", "Password Incorrect");
                redirect("../index.php");
            }
        }else{
            errorMsg("login", "No user found");
            redirect("../index.php");
        }
    }

    public function createAdminSession($admin){
        $_SESSION['adminId'] = $admin->id_admin;
        $_SESSION['adminName'] = $admin->adminName;
        $_SESSION['adminEmail'] = $admin->adminEmail;
        redirect("../../develop-your-project-in-php/views/main/main.php");
    }

    public function logout(){
        unset($_SESSION['adminId']);
        unset($_SESSION['adminName']);
        unset($_SESSION['adminEmail']);
        session_destroy();

        redirect("../index.php");
    }
}

    $init = new AdminController;

    //Ensure that user is sending a post request
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        switch($_POST['type']){
            case 'register':
                $init->register();
                break;
            case 'login':
                $init->login();
                break;
            default:
            redirect("../index.php");
        }
        
    }else{
        switch($_GET['end']){
            case 'logout':
                $init->logout();
                break;
            default:
            redirect("../index.php");
        }
    }