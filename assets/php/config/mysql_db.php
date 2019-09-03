<?php
require('db_config.php');
class MySQL extends MYSQLDBCONFIG{
    
    
    private $connection;
    private $return;
    public function __construct(){
        $db = new MYSQLDBCONFIG();
        
        try{
            $this->connection = new PDO("mysql:host=$db->dbhost;dbname=$db->dbname", $db->dbuser, $db->dbpwd);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
       
        }catch(PDOException $e){
         

        }
    

    }   
   
    public function Connect(){
        return $this->connection;
    }
}




?>
