<?php
class studentModel {
  public $con="";
  
    public function __construct (){
      
   }
   public function Student_disply(){
     
    require_once("./dbconnection/class.connection.php");
    
    $obj= new Connection();
    $con=$obj->conn();
   
    $sql="select * from students";
    $result=mysqli_query($con,$sql);
    // echo "ajithmmm";
    
    return ($result);
   }
}
?>