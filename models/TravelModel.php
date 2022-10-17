<?php

class TravelModel extends Model
{
    function get()
    {
        $query = $this->db->connect()->prepare("SELECT id_dest, origin, destination, entrance, departure, price
<<<<<<< HEAD
        FROM destination;");
=======
        FROM travel;");
>>>>>>> b7a271ccf0ba2c23013237d64d3c53f7a550529f

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
<<<<<<< HEAD
        FROM destination
=======
        FROM travel
>>>>>>> b7a271ccf0ba2c23013237d64d3c53f7a550529f
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
        VALUES
        (?, ?, ?, ?, ?);");

        $query->bindParam(1, $travel["origin"]);
        $query->bindParam(2, $travel["destination"]);
        $query->bindParam(3, $travel["entrance"]);
        $query->bindParam(4, $travel["departure"]);
        $query->bindParam(5, $travel["price"]);
=======
        $query = $this->db->connect()->prepare("INSERT INTO travel (origin, destination, entrance, departure, price)
        VALUES
        (?, ?, ?, ?, ?);");
>>>>>>> b7a271ccf0ba2c23013237d64d3c53f7a550529f

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
<<<<<<< HEAD
        echo "update model";
        $query = $this->db->connect()->prepare("UPDATE destination
=======
        // echo "update model";
        $query = $this->db->connect()->prepare("UPDATE travel
>>>>>>> b7a271ccf0ba2c23013237d64d3c53f7a550529f
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
<<<<<<< HEAD
        $query = $this->db->connect()->prepare("DELETE FROM destination WHERE id_dest = ?");
=======
        $query = $this->db->connect()->prepare("DELETE FROM travel WHERE id_dest = ?");
>>>>>>> b7a271ccf0ba2c23013237d64d3c53f7a550529f
        $query->bindParam(1, $id);

        try {
            $query->execute();
            return [true];
        } catch (PDOException $e) {
            return [false, $e];
        }
    }
<<<<<<< HEAD
 }
=======
}
>>>>>>> b7a271ccf0ba2c23013237d64d3c53f7a550529f
