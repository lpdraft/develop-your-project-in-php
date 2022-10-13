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

    function getById($id)
    {
        $query = $this->db->connect()->prepare("SELECT id, name, surname, username, email, city, phone_number
        FROM clients e
        WHERE id = $id;");

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
        $query = $this->db->connect()->prepare("INSERT INTO clients (name, surname, username, email, city, phone_number)
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
        $query = $this->db->connect()->prepare("UPDATE clients
        SET name = ?, surname = ?, username = ?, email = ?, city = ?, phone_number = ? 
        WHERE id = ?;");

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

    function delete($id)
    {
        $query = $this->db->connect()->prepare("DELETE FROM clients WHERE id = ?");
        $query->bindParam(1, $id);

        try {
            $query->execute();
            return [true];
        } catch (PDOException $e) {
            return [false, $e];
        }
    }
}
