<?php

session_start();

class Connection{

    private $servername="localhost";
    private $username ="root";
    private $password ="root";
    private $db_name ="hairsalon";

    public $conn;

    function __construct(){
        $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->db_name);

        if($this->conn->connect_error){
            die('error connection to database'.$this->conn->connect_error);
        }else{
            return $this->conn;
            
        }

    }


}
?>