<?php

<<<<<<< HEAD
    
    require_once '../Sessionhelper/session_helper.php';

    class Users  
    { 
        
        use Controller;

        private $userModel;
        
        public function __construct(){
            $this->userModel = new User;
=======
    require_once '../models/loginModel.php';
    require_once '../Sessionhelper/admin_session.php';

    class AdminController {

        private $adminModel;
        
        public function __construct(){
            $this->adminModel = new Admin;
>>>>>>> main
        }

        public function register(){
            //Process form
<<<<<<< HEAD
            
            //Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //Init data
            $data = [
                'usersName' => trim($_POST['usersName']),
                'usersEmail' => trim($_POST['usersEmail']),
                'usersUid' => trim($_POST['usersUid']),
                'usersPwd' => trim($_POST['usersPwd']),
=======
        
            //Init data
            $data = [
                'adminName' => trim($_POST['adminName']),
                'adminUname' => trim($_POST['adminUname']),
                'adminEmail' => trim($_POST['adminEmail']),
                'adminCity' => trim($_POST['adminCity']),
                'adminPhone' => trim($_POST['adminPhone']),
                'adminPwd' => trim($_POST['adminPwd']),
>>>>>>> main
                'pwdRepeat' => trim($_POST['pwdRepeat'])
            ];

            //Validate inputs
<<<<<<< HEAD
            if(empty($data['usersName']) || empty($data['usersEmail']) || empty($data['usersUid']) || 
            empty($data['usersPwd']) || empty($data['pwdRepeat'])){
                flash("register", "Please fill out all inputs");
                redirect("../signup.php");
            }

            if(!preg_match("/^[a-zA-Z0-9]*$/", $data['usersUid'])){
                flash("register", "Invalid username");
                redirect("../signup.php");
            }

            if(!filter_var($data['usersEmail'], FILTER_VALIDATE_EMAIL)){
                flash("register", "Invalid email");
                redirect("../signup.php");
            }

            if(strlen($data['usersPwd']) < 6){
                flash("register", "Invalid password");
                redirect("../signup.php");
            } else if($data['usersPwd'] !== $data['pwdRepeat']){
                flash("register", "Passwords don't match");
                redirect("../signup.php");
            }

            //User with the same email or password already exists
            if($this->userModel->findUserByEmailOrUsername($data['usersEmail'], $data['usersName'])){
                flash("register", "Username or email already taken");
                redirect("../signup.php");
=======
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
>>>>>>> main
            }

            //Passed all validation checks.
            //Now going to hash password
<<<<<<< HEAD
            $data['usersPwd'] = password_hash($data['usersPwd'], PASSWORD_DEFAULT);

            //Register User
            if($this->userModel->register($data)){
                redirect("../login.php");
=======
            $data['adminPwd'] = password_hash($data['adminPwd'], PASSWORD_DEFAULT);

            //Register User
            if($this->adminModel-> register($data)){
                redirect("../index.php");
>>>>>>> main
            }else{
                die("Something went wrong");
            }
        }

<<<<<<< HEAD
    public function login(){
        //Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
=======
        public function login(){
>>>>>>> main

        //Init data
        $data=[
            'name/email' => trim($_POST['name/email']),
<<<<<<< HEAD
            'usersPwd' => trim($_POST['usersPwd'])
        ];

        if(empty($data['name/email']) || empty($data['usersPwd'])){
            flash("login", "Please fill out all inputs");
            header("location: ../login.php");
=======
            'adminPwd' => trim($_POST['adminPwd'])
        ];

        if(empty($data['name/email']) || empty($data['adminPwd'])){
            errorMsg("login", "Please fill out all inputs");
            header("location: ../index.php");
>>>>>>> main
            exit();
        }

        //Check for user/email
<<<<<<< HEAD
        if($this->userModel->findUserByEmailOrUsername($data['name/email'], $data['name/email'])){
            //User Found
            $loggedInUser = $this->userModel->login($data['name/email'], $data['usersPwd']);
            if($loggedInUser){
                //Create session
                $this->createUserSession($loggedInUser);
            }else{
                flash("login", "Password Incorrect");
                redirect("../login.php");
            }
        }else{
            flash("login", "No user found");
            redirect("../login.php");
        }
    }

    public function createUserSession($user){
        $_SESSION['usersId'] = $user->usersId;
        $_SESSION['usersName'] = $user->usersName;
        $_SESSION['usersEmail'] = $user->usersEmail;
        redirect("../index.php");
    }

    public function logout(){
        unset($_SESSION['usersId']);
        unset($_SESSION['usersName']);
        unset($_SESSION['usersEmail']);
        session_destroy();
=======
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

>>>>>>> main
        redirect("../index.php");
    }
}

<<<<<<< HEAD
    $init = new Users;
=======
    $init = new AdminController;
>>>>>>> main

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
<<<<<<< HEAD
        switch($_GET['q']){
=======
        switch($_GET['end']){
>>>>>>> main
            case 'logout':
                $init->logout();
                break;
            default:
            redirect("../index.php");
        }
<<<<<<< HEAD
    }

    
=======
    }
>>>>>>> main
