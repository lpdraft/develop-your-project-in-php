<?php 
session_start();


if(isset($_POST['username']) && 
   isset($_POST['password'])){

   include_once "dbSession.php";
   
   $db = new DB();

    $adminUname = $_POST['username'];
    $pass = $_POST['password'];

   // $data = "username=".$adminUname;

    if(empty($adminUname)){
    	$msg = "AdminUserName is required";
    	header("Location: ../views/login/login.php?error=$msg");
	    exit;
    }else if(empty($pass)){
    	$msg = "Password is required";
    	header("Location: ../views/login/login.php?error=$msg");
	    exit;
    }else {

    	$sql = "SELECT * FROM admins WHERE username = ?";
    	$stmt = $db -> connect() ->prepare($sql);
    	$stmt->execute([$adminUname]);

      // Bring admin obj
      if($stmt->rowCount() == 1){
          $admin = $stmt->fetch();

          $adminUserName =  $admin['username'];
          $email =  $admin['email'];
          $city =  $admin['city'];
          $name =  $admin['name'];
          $phonenumber =  $admin['phonenumber'];
          $password =  $admin['password'];
          $id =  $admin['id'];

          if($adminUserName === $adminUname){
             if(password_verify($pass, $password)){
                 $_SESSION['id'] = $id;
                 $_SESSION['name'] = $name;

                 header("Location: ../views/main/main.php");
                 exit;
             }else {
               $msg = "Incorrect Comparison Username or password";
               header("Location: ../views/login/login.php?error=$msg");
               exit;
            }

          }else {
            $msg = "Incorrect User name or password";
            header("Location: ../views/login/login.php?error=$msg");
            exit;
         }

      }else {
         $msg = "Incorrect User name or password";
         header("Location: ../views/login/login.php?error=$msg");
         exit;
      }
    }


}else {
	header("Location: ../views/login/login.php?error=error");
	exit;
}
