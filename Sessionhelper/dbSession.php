<?php
/*
    * PDO Database Class
    * Connect to database
    * Create prepared statements
    * Bind values
    * Return rows and results
*/

class Database {
    // Will be the PDO object variables
    private $dbh;
    private $stmt;
    private $error;

    public function __construct(){
        // Set DSN-> Data Source Name
        $dsn = 'mysql:host=localhost;dbname=traveldb';

        // Possible no connection Error..
        $options = array(
            #Always check for an existing pdo connection before creating the new one
            PDO::ATTR_PERSISTENT => true,
            #Elegant way of handeling errors in pdo
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        //Create PDO instance + try catch block for secure inyections of sql stms

        # ¿¿Why try catch block when using sql?? --> Any data from the client that we want to use our sql quiries, won't be added directly to the sql query since doing that would be a huge security liability and will leave us vulnerable to things like classic sql injection attacks. Insted our query which will be prepared by PDO will have placeholders in the areas which we want to use data submitted from the user in our sql query and since the statement has been prepared with pdo we will be able to bind the actual data from the user to these placeholders. Binding the data format stumps that they won't harm our sql query
        
        try{
            $this->dbh = new PDO($dsn, 'root','', $options);
        }catch(PDOException $e){
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    // //Method to prepare sql queries
    public function query($sql){
        $this->stmt = $this->dbh->prepare($sql);
    }

    // //Bind values, to prepared statement using named parameters
    // // Type (= null by default, so that you can introduce any data) of data user introduces, by default would be string
    public function bind($param, $value, $type = null){
        if(is_null($type)){
            switch(true){
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        // Add those values to stmt
        $this->stmt->bindValue($param, $value, $type);
    }
    
    // Once the prepare stmt has finished being prepared, we will be able to run the query..
    //Execute the prepared statement
    public function execute(){
        return $this->stmt->execute();
    }

    //  // But if we are quering for a set of data then it is likely that we want the results returned so that we can work with the query data in php..
    //  # These 2 methos will be called insted of the execute method bc they call the execute method themselves and the both return data as php object

    //  //Return multiple objects. An array objs that should be used for fecthing multiples rows
    public function resultSet(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    //Return a single object. First row found that matched the query
    public function single(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    //Get row count
    // Will tell us how many rows match the query that we just executed with pdo
    public function rowCount(){
        return $this->stmt->rowCount();
    }
}