<?php
class Database{
 
    // specify your own database credentials
    //Dev or local host
    private $host = "localhost"; 
    private $username = "root";
    private $password = "";
    //Prod 
    //private $host = "ouaappserver.mysql.database.azure.com"; 
    //private $username = "OUADBAdmin@ouaappserver";
    //private $password = "787618@deped";

    private $db_name = "api_db";
    public $conn;
 


    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>