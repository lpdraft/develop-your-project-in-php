<?php 
require_once ('../core/classes/Database.php');

class User {
    // Variable for db instanciate
    private $db;

    public function __construct(){
        $this -> db = new Database;
    }
    
    public function register($data){
        $this -> db -> query('INSERT INTO admins (name, surname,username, email, city, phone_number, password) VALUES (:name, :surname, :username, :email, :city, :phonenumber, :password )');

        // Recieve and Resign data to the table
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':surname', $data['surname']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':phonenumber', $data['phonenumber']);
        $this->db->bind(':password', $data['password']);

        if($this -> db -> execute()){
            return true;
        } else {
            return false;
        }
    }
  
}


?>