<?php

require_once "config/constants.php";
require_once "config/db.php";
require_once "core/classes/Database.php";
require_once "core/classes/Model.php";
require_once "core/classes/View.php";
require_once "core/classes/Controller.php";

require_once "core/Router.php";

$router = new Router();


// ----------------------------------------------------------------------------- //

// include_once './controllers/loginController.php';
// include_once './Sessionhelper/admin_session.php';

// $userSession = new AdminSession();
// $user = new Admin();

// if(isset($_SESSION['admin'])){
//     echo "Hay sesión";
//     $user->setAdmin($adminSession->getCurrentUser());

//     header('Location: ./views/main/main.php');
// }else if(isset($_POST['username']) && isset($_POST['password'])){
//     //echo "Validación de login";

//     $adminForm = $_POST['username'];
//     $passForm = $_POST['password'];

//     if($user->adminExists($adminForm, $passForm)){
//         //echo "usuario validado";
//         $adminSession->setCurrentUser($adminForm);
//         $user->setAdmin($adminForm);

//         header('Location: ./views/main/main.php');
//     }else{
//         //echo "nombre de usuario y/o password incorrecto";
//         $errorLogin = "Nombre de usuario y/o password es incorrecto";
//         include_once './index.php';
//     }

// }else{
//     //echo "Login";
//     include_once './index.php';
// }


?>

