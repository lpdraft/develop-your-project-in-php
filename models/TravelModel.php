<?php

class TravelModel extends Model
{
    function get()
    {
        $query = $this->db->connect()->prepare("SELECT id, name, type
        FROM travels;");

        try {
            $query->execute();
            $travels = $query->fetchAll();
            return $travels;
        } catch (PDOException $e) {
            return [];
        }
    }

    function getById($id)
    {
        $query = $this->db->connect()->prepare("SELECT id, name, type
        FROM travels
        WHERE id = $id;");

        try {
            $query->execute();
            $travel = $query->fetch();
            return $travel;
        } catch (PDOException $e) {
            return [];
        }
    }

    function create($travel)
    {
        $query = $this->db->connect()->prepare("INSERT INTO travels (name, type)
        VALUES
        (?, ?);");

        $query->bindParam(1, $travel["name"]);
        $query->bindParam(2, $travel["type"]);

        try {
            $query->execute();
            return [true];
        } catch (PDOException $e) {
            return [false, $e];
        }
    }

    function update($travel)
    {
        echo "update model";
        $query = $this->db->connect()->prepare("UPDATE travels
        SET name = ?, type = ?
        WHERE id = ?;");

        $query->bindParam(1, $travel["name"]);
        $query->bindParam(2, $travel["type"]);
        $query->bindParam(3, $travel["id"]);

        try {
            $query->execute();
            return [true];
        } catch (PDOException $e) {
            return [false, $e];
        }
    }

    function delete($id)
    {
        $query = $this->db->connect()->prepare("DELETE FROM travels WHERE id = ?");
        $query->bindParam(1, $id);

        try {
            $query->execute();
            return [true];
        } catch (PDOException $e) {
            return [false, $e];
        }
    }
}
