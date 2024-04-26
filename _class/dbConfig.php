<?php
class dbConfig
{
    private $host     = "localhost";
    private $dbName   = "u140335295_indecor";
    private $userName = "u140335295_indecor";
    private $password = "Indecor@123";
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
