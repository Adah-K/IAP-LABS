<?php

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'iaplabs');

class DBConnector{
    public $conn;

    function __construct(){
        $this->conn = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME)
            or die("Connection Error:". $conn-> error);
    }

    public function closeDatabase(){
        mysqli_close($this->conn);
    }
}

?>