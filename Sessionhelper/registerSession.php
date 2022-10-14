<?php 
session_start();

include_once "dbSession.php";

$db = new DB();

if(isset($_POST['name']) && 
   isset($_POST['username']) && 
   isset($_POST['email']) && 
   isset($_POST['city']) && 
   isset($_POST['phonenumber']) &&
   isset($_POST['password'])){


    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $phonenumber = $_POST['phonenumber'];
    $password = $_POST['password'];

    if (empty($name)) {
    	$msg = "Full name is required";
    	header("Location: ../views/login/register.php?error=$msg");
	    exit;
    }else if(empty($username)){
    	$msg = "User name is required";
    	header("Location: views/login/register.php?error=$msg");
	    exit;
    }else if(empty($email)){
    	$msg = "Email is required";
    	header("Location: ../views/login/register.php?error=$msg");
	    exit;
	}else if(empty($city)){
		$msg = "City is required";
    	header("Location: ../views/login/register.php?error=$msg");
	    exit;
	}else if(empty($phonenumber)){
		$msg = "Phonenumber is required";
    	header("Location: ../views/login/register.php?error=$msg");
	    exit;
	}else if(empty($password)){
		$msg = "Passsword is required";
    	header("Location: ../views/login/register.php?error=$msg");
	    exit;
    }else {

    	// Hashing the password
    	$password = password_hash($password, PASSWORD_DEFAULT);

    	$sql = "INSERT INTO admins(name, username, email, city, phone_number, password) 
    	        VALUES(?,?,?,?,?,?)";
    	$stmt = $db -> connect() -> prepare($sql);
    	$stmt->execute([$name, $username, $email, $city, $phonenumber, $password]);

    	header("Location: ../views/login/login.php");
	    exit;
    }


}
