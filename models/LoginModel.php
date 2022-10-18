<?php
<<<<<<< HEAD


class User extends Model {
=======
// Need db class to make queries
require_once '../Sessionhelper/dbSession.php';

class Admin{
>>>>>>> main

    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    //Find user by email or username
<<<<<<< HEAD
    public function findUserByEmailOrUsername($email, $username){
        $this->db->query('SELECT * FROM users WHERE usersUid = :username OR usersEmail = :email');
        $this->db->bind(':username', $username);
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        //Check row
=======
    public function getEmailUsername($email, $username){
        $this->db->query('SELECT * FROM admins WHERE adminUname = :adminUname OR adminEmail = :adminEmail');
        $this->db->bind(':adminUname', $username);
        $this->db->bind(':adminEmail', $email);

        // Store in obj (check db class method9
        $row = $this->db->single();

        //Check row if already exists
>>>>>>> main
        if($this->db->rowCount() > 0){
            return $row;
        }else{
            return false;
        }
    }

<<<<<<< HEAD
    //Register User
    public function register($data){
        $this->db->query('INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) 
        VALUES (:name, :email, :Uid, :password)');
        //Bind values
        $this->db->bind(':name', $data['usersName']);
        $this->db->bind(':email', $data['usersEmail']);
        $this->db->bind(':Uid', $data['usersUid']);
        $this->db->bind(':password', $data['usersPwd']);

        //Execute
=======
    //Register ADD as new User
    public function register($data){
        $this->db->query('INSERT INTO admins (adminName, adminUname, adminEmail, adminCity, adminPhone, adminPwd, pwdRepeat) 
        VALUES (:adminName, :adminUname, :adminEmail, :adminCity, :adminPhone, :adminPwd, :pwdRepeat)');
        //Bind those values
        $this->db->bind(':adminName', $data['adminName']);
        $this->db->bind(':adminUname', $data['adminUname']);
        $this->db->bind(':adminEmail', $data['adminEmail']);
        $this->db->bind(':adminCity', $data['adminCity']);
        $this->db->bind(':adminPhone', $data['adminPhone']);
        $this->db->bind(':adminPwd', $data['adminPwd']);
        $this->db->bind(':pwdRepeat', $data['pwdRepeat']);

        //Welther the Execute was successfull o not
>>>>>>> main
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    //Login user
<<<<<<< HEAD
    public function login($nameOrEmail, $password){
        $row = $this->findUserByEmailOrUsername($nameOrEmail, $nameOrEmail);

        if($row == false) return false;

        $hashedPassword = $row->usersPwd;
=======
    public function login($name_Email, $password){
        // Lokk for the match
        $row = $this->getEmailUsername($name_Email, $name_Email);

        if($row == false) return false;

        $hashedPassword = $row -> adminPwd;
>>>>>>> main
        if(password_verify($password, $hashedPassword)){
            return $row;
        }else{
            return false;
        }
    }
<<<<<<< HEAD

    //Reset Password
    public function resetPassword($newPwdHash, $tokenEmail){
        $this->db->query('UPDATE users SET usersPwd=:pwd WHERE usersEmail=:email');
        $this->db->bind(':pwd', $newPwdHash);
        $this->db->bind(':email', $tokenEmail);

        //Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
=======
    
>>>>>>> main
}