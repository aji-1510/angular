<?php
class Connection
{
    public $servername="localhost";
    public $username="root";
    public $password="";
    public $dbname="api";
    public $conn=" ";

    public function __construct()
    {
        

        
     
      
    }
    public function conn()
    {
        
// create connection 


        $conn=mysqli_connect($this->servername,$this->username,$this->password,$this->dbname);
        if(!$conn)
           {
               die("connection failed".mysqli_connect_error());
             }


       return $conn;
    }
}

?>