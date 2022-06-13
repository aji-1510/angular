<?php
class dbConnect{
    public function connect(){
        $Servername="localhost";
        //the above variable consist my servername
        $Username="root";
        //this the username my database have
        $Password="";
        //password is have an default value which means i dont set password for this database
        $Db_Name="userdetails";
        // the above variable consist of the databasename
        $conn=mysqli_connect($Servername,$Username,$Password,$Db_Name);
        // iam establishing the connection in $conn variable
        if(!$conn){
         echo "Database is not connected";
        }
        // the above conditional statement for the checking wheather the data base is connected  or not
        return $conn;
    }
}
?>