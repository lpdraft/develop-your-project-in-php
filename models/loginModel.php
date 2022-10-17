<?php
// Need db class to make queries
require_once '../Sessionhelper/dbSession.php';

class Admin {

    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    //Find user by email or username
    public function getEmailUsername($email, $username){
        $this->db->query('SELECT * FROM admins WHERE adminUname = :adminUname OR adminEmail = :adminEmail');
        $this->db->bind(':adminUname', $username);
        $this->db->bind(':adminEmail', $email);

        // Store in obj (check db class method9
        $row = $this->db->single();

        //Check row if already exists
        if($this->db->rowCount() > 0){
            return $row;
        }else{
            return false;
        }
    }

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
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    //Login user
    public function login($name_Email, $password){
        // Lokk for the match
        $row = $this->getEmailUsername($name_Email, $name_Email);

        if($row == false) return false;

        $hashedPassword = $row -> adminPwd;
        if(password_verify($password, $hashedPassword)){
            return $row;
        }else{
            return false;
        }
    }
    
}