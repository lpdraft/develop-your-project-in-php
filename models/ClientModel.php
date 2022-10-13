<?php

class ClientModel extends Model
{
    function get()
    {
        $query = $this->db->connect()->prepare("SELECT a.id_admin, a.name, a.surname, a.username, a.email, a.city, a.phone_number
        FROM admins a        
        ORDER BY a.id_admin ASC;");

        try {
            $query->execute();
            $clients = $query->fetchAll();
            return $clients;
        } catch (PDOException $e) {
            return [];
        }
    }

    function getById($id_admin)
    {
        $query = $this->db->connect()->prepare("SELECT a.id_admin, a.name, a.surname, a.username, a.email, a.city, a.phone_number
        FROM admins a
        WHERE id_admin = $id_admin;");

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
        $query = $this->db->connect()->prepare("INSERT INTO admins (name, surname, username, email, city, phone_number)
        VALUES
        (?, ?, ?, ?, ?, ?);");

        $query->bindParam(1, $client["name"]);
        $query->bindParam(2, $client["surname"]);
        $query->bindParam(3, $client["username"]);
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
        $query = $this->db->connect()->prepare("UPDATE admins
        SET name = ?, surname = ?, username = ?, email = ?, city = ?, phone_number = ? 
        WHERE id_admin = ?;");

        $query->bindParam(1, $client["name"]);
        $query->bindParam(2, $client["surname"]);
        $query->bindParam(3, $client["username"]);
        $query->bindParam(4, $client["email"]);
        $query->bindParam(5, $client["city"]);
        $query->bindParam(6, $client["phone_number"]);       
        $query->bindParam(7, $client["id"]);

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

        try {
            $query->execute();
            return [true];
        } catch (PDOException $e) {
            return [false, $e];
        }
    }
}
