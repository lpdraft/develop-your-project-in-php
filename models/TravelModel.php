<?php

class TravelModel extends Model
{
    function get()
    {
        $query = $this->db->connect()->prepare("SELECT id_dest, origin, destination, entrance, departure, price
        FROM travel;");

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
        $query = $this->db->connect()->prepare("SELECT id_dest, origin, destination, entrance, departure, price
        FROM travel
        WHERE id_dest = $id;");

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
        $query = $this->db->connect()->prepare("INSERT INTO travel (origin, destination, entrance, departure, price)
        VALUES
        (?, ?, ?, ?, ?);");

        $query->bindParam(1, $travel["origin"]);
        $query->bindParam(2, $travel["destination"]);
        $query->bindParam(3, $travel["entrance"]);
        $query->bindParam(4, $travel["departure"]);
        $query->bindParam(5, $travel["price"]);
        try {
            $query->execute();
            return [true];
        } catch (PDOException $e) {
            return [false, $e];
        }
    }

    function update($travel)
    {
        // echo "update model";
        $query = $this->db->connect()->prepare("UPDATE travel
        SET origin = ?, destination = ?, entrance = ?, departure = ?, price = ?
        WHERE id_dest = ?;");

        $query->bindParam(1, $travel["origin"]);
        $query->bindParam(2, $travel["destination"]);
        $query->bindParam(3, $travel["entrance"]);
        $query->bindParam(4, $travel["departure"]);
        $query->bindParam(5, $travel["price"]);
        $query->bindParam(6, $travel["id_dest"]);

        try {
            $query->execute();
            return [true];
        } catch (PDOException $e) {
            return [false, $e];
        }
    }

    function delete($id)
    {
        $query = $this->db->connect()->prepare("DELETE FROM travel WHERE id_dest = ?");
        $query->bindParam(1, $id);

        try {
            $query->execute();
            return [true];
        } catch (PDOException $e) {
            return [false, $e];
        }
    }
}