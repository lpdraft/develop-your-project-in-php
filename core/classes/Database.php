<?php
#PDO Connection
class Database{
    private $dbConnection;
    private $stmt;
    private $error;

    public function __construct(){
        //Domain Name    
        $domainName = 'mysql:host=localhost:3307;dbname=traveldb';

        // Possible no connection Error..
        $options = array(
            PDO::ATTR_PERSISTENT => true, 
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        // Try Catch block for possible erros that might araise
        try{
            $this->dbConnection = new PDO($domainName, 'root','', $options);
            echo "Connected";
        }catch(PDOException $e){
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    // Method to prepare queries
    public function query($sql){
        $this->stmt = $this->dbConnection->prepare($sql);
    }

    // Bind values
    // By default, inyeced data will be string
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

    // Once, the preparation is finished, we need to execute stmt
    public function execute(){
        return $this->stmt->execute();
    }
    // Array result set fetch (on multiple propose)
    public function resultSet(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // Single Obj or table row that mtch the query + for new injetion
    public function single(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    // method to count rows so that we dont add same clients again and again
     public function rowCount(){
        return $this->stmt->rowCount();
    }
}
?>