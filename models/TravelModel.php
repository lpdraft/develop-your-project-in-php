<?php

class TravelModel extends Model
{
    function get()
    {
<<<<<<< HEAD
        $query = $this->db->connect()->prepare("SELECT id_dest, origin, destination, entrance, departure, price
        FROM destination;");
=======
        $query = $this->db->connect()->prepare("SELECT id_dest, origin, destination, departure, arrival, price
        FROM travel;");
>>>>>>> main

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
<<<<<<< HEAD
        $query = $this->db->connect()->prepare("SELECT id_dest, origin, destination, entrance, departure, price
        FROM destination
=======
        $query = $this->db->connect()->prepare("SELECT id_dest, origin, destination, departure, arrival, price
        FROM travel
>>>>>>> main
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
<<<<<<< HEAD
        $query = $this->db->connect()->prepare("INSERT INTO destination (origin, destination, entrance, departure, price)
=======
        $query = $this->db->connect()->prepare("INSERT INTO travel (origin, destination, departure, arrival, price)
>>>>>>> main
        VALUES
        (?, ?, ?, ?, ?);");

        $query->bindParam(1, $travel["origin"]);
        $query->bindParam(2, $travel["destination"]);
<<<<<<< HEAD
        $query->bindParam(3, $travel["entrance"]);
        $query->bindParam(4, $travel["departure"]);
=======
        $query->bindParam(3, $travel["departure"]);
        $query->bindParam(4, $travel["arrival"]);
>>>>>>> main
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
<<<<<<< HEAD
        $query = $this->db->connect()->prepare("UPDATE destination
        SET origin = ?, destination = ?, entrance = ?, departure = ?, price = ?
=======
        $query = $this->db->connect()->prepare("UPDATE travel
        SET origin = ?, destination = ?, departure = ?, arrival = ?, price = ?
>>>>>>> main
        WHERE id_dest = ?;");

        $query->bindParam(1, $travel["origin"]);
        $query->bindParam(2, $travel["destination"]);
<<<<<<< HEAD
        $query->bindParam(3, $travel["entrance"]);
        $query->bindParam(4, $travel["departure"]);
=======
        $query->bindParam(3, $travel["departure"]);
        $query->bindParam(4, $travel["arrival"]);
>>>>>>> main
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
<<<<<<< HEAD
        $query = $this->db->connect()->prepare("DELETE FROM destiantion WHERE id_dest = ?");
=======
        $query = $this->db->connect()->prepare("DELETE FROM travel WHERE id_dest = ?");
>>>>>>> main
        $query->bindParam(1, $id);

        try {
            $query->execute();
            return [true];
        } catch (PDOException $e) {
            return [false, $e];
        }
    }
}