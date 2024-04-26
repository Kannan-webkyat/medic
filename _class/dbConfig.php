<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class dbConfig
{
    private $host     = "localhost";
    private $dbName   = "college";
    private $userName = "root";
    private $password = "";
    // private $host     = "localhost";
    // private $dbName   = "indecor_final";
    // private $userName = "root";
    // private $password = "";
    public $con;
    public function getConnection()
    {
        $this->con = "null";
        $this->con = mysqli_connect($this->host, $this->userName, $this->password, $this->dbName);
        if ($this->con) {
            return $this->con;
        } else {
            echo "connection error!";
        }
    }
}
