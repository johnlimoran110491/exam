<?php


class MYSQLDBCONFIG{
    protected $dbhost;
    protected $dbuser;
    protected $dbpwd;
    protected $dbname;
    
    public function __construct(){

        $this->dbhost = "localhost";
        $this->dbuser = "root";
        $this->dbpwd = "";
        $this->dbname = "mydb";
    }
}
?>
