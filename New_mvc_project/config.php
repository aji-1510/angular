<?php
class dbconnection
    {
            public $servername="localhost";
            public $username="root";
            public $password="";
            public $dbname="employeedb";
            public $conn="";


        public function __construct()
            {
                $this->conn=mysqli_connect($this->servername,$this->username,$this->password,$this->dbname);
                if(!$this->conn)
                {
                    echo '<script type=JavaScript/text>alert "connection faild"</script>';
                    
                }
            }
        public function dbcon()
            {
                return $this->conn;
            }
    }
?>