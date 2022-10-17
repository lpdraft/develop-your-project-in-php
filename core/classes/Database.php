<?php
// Create connection
class Database
{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;
    private $error;

    public function __construct()
    {
        $this->host = HOST;
        $this->db = DB;
        $this->user = USER;
        $this->password = PASSWORD;
        $this->charset = CHARSET;
    }
    function connect()
    {
        try {
            $connection = "mysql:host=" . HOST . ";"
                . "dbname=" . DB . ";"
                . "user=" . USER . ";"
                . "password=" . PASSWORD . ";"
                . "charset=" . CHARSET;

            $options = [
                PDO::ATTR_ERRMODE           =>  PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES  => FALSE,
            ];

            $pdo = new PDO($connection, USER, PASSWORD, $options);

            return $pdo;
            echo "<h1>conected</h1>";
        } catch (PDOException $e) {
            require_once(VIEWS . "/error/error.php");
        }
    }

     //Method to prepare sql queries
    public function query($sql){
        $this->stmt = $this->dbh->prepare($sql);
    }

    //Bind values, to prepared statement using named parameters
    // Type (= null by default, so that you can introduce any data) of data user introduces, by default would be string
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

     // But if we are quering for a set of data then it is likely that we want the results returned so that we can work with the query data in php..
     # These 2 methos will be called insted of the execute method bc they call the execute method themselves and the both return data as php object

     //Return multiple objects. An array objs that should be used for fecthing multiples rows
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

?>