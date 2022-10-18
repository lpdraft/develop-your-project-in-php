<?php

class ClientModel extends Model
{
    function get()
    {
        $query = $this->db->connect()->prepare("SELECT c.id_client, c.name, c.surname, c.email, c.city, c.phone_number
        FROM clients c        
        ORDER BY c.id_client ASC;");

        try {
            $query->execute();
            $clients = $query->fetchAll();
            return $clients;
        } catch (PDOException $e) {
            return [];
        }
    }

<<<<<<< HEAD
    function getById($id_admin)
    {
        $query = $this->db->connect()->prepare("SELECT a.id_admin, a.name, a.surname, a.username, a.email, a.city, a.phone_number
        FROM admins a
        WHERE id_admin = $id_admin;");
=======
    function getById($id_client)
    {
        $query = $this->db->connect()->prepare("SELECT c.id_client, c.name, c.surname, c.email, c.city, c.phone_number
        FROM clients c 
        WHERE id_client = $id_client;");
>>>>>>> main

        try {
            $query->execute();
            $client = $query->fetch();
            return $client;
        } catch (PDOException $e) {
            return [];
        }
    }

    function create($client)
    {
<<<<<<< HEAD
        $query = $this->db->connect()->prepare("INSERT INTO admins (name, surname, username, email, city, phone_number)
        VALUES
        (?, ?, ?, ?, ?, ?);");

        $query->bindParam(1, $client["name"]);
        $query->bindParam(2, $client["surname"]);
        $query->bindParam(3, $client["username"]);
=======
        $query = $this->db->connect()->prepare("INSERT INTO clients (id_client, `name`, surname, email, city, phone_number)
        VALUES
        (?, ?, ?, ?, ?, ?);");

        $query->bindParam(1, $client["id_client"]);
        $query->bindParam(2, $client["name"]);
        $query->bindParam(3, $client["surname"]);
>>>>>>> main
        $query->bindParam(4, $client["email"]);
        $query->bindParam(5, $client["city"]);     
        $query->bindParam(6, $client["phone_number"]);

        try {
            $query->execute();
            return [true];
        } catch (PDOException $e) {
            return [false, $e];
        }
    }

    function update($client)
    {
<<<<<<< HEAD
        $query = $this->db->connect()->prepare("UPDATE admins
        SET name = ?, surname = ?, username = ?, email = ?, city = ?, phone_number = ? 
        WHERE id_admin = ?;");

        $query->bindParam(1, $client["name"]);
        $query->bindParam(2, $client["surname"]);
        $query->bindParam(3, $client["username"]);
        $query->bindParam(4, $client["email"]);
        $query->bindParam(5, $client["city"]);
        $query->bindParam(6, $client["phone_number"]);       
        $query->bindParam(7, $client["id_admin"]);

        try {
            $query->execute();
            return [true];
        } catch (PDOException $e) {
            return [false, $e];
        }
    }

    function delete($id_admin)
    {
        $query = $this->db->connect()->prepare("DELETE FROM admins WHERE id_admin = ?");
        $query->bindParam(1, $id_admin);

=======
        $query = $this->db->connect()->prepare("UPDATE clients
        SET `name` = ?, surname = ?, email = ?, city = ?, phone_number = ? 
        WHERE id_client = ?;");

    
        $query->bindParam(1, $client["name"]);
        $query->bindParam(2, $client["surname"]);
        $query->bindParam(3, $client["email"]);
        $query->bindParam(4, $client["city"]);     
        $query->bindParam(5, $client["phone_number"]);
        $query->bindParam(6, $client["id_client"]);
        
        try {
            $query->execute();
            return [true];
        } catch (PDOException $e) {
            return [false, $e];
        }
    }

    function delete($id_client)
    {
        $query = $this->db->connect()->prepare("DELETE FROM clients WHERE id_client = ?");
        $query->bindParam(1, $id_client);

>>>>>>> main
        try {
            $query->execute();
            return [true];
        } catch (PDOException $e) {
            return [false, $e];
        }
    }
}
