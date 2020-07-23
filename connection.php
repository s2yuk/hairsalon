<?php

session_start();

class Connection{

    private $servername="mysql1027.db.sakura.ne.jp";
    private $username ="yukamatsumoto";
    private $password ="kredo1912";
    private $db_name ="yukamatsumoto_hairsalon";

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