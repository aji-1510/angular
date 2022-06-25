<?php
class departmentModel
{
    public $con=" ";
    public function __construct()
    {
        require_once("./config.php");
        $obj=new dbconnection();
        // iam creating a object for the dbConnection
        $this->con=$obj->dbcon();
    }
    public function Login($emailId,$PassWord)
    {
      $sql="SELECT * FROM usertable WHERE `EmailId`='$emailId' AND `PassWord`='$PassWord'";
      if(mysqli_query($this->con,$sql))
      {
        return true;
      }
      else
      {
        echo '<script type ="text/JavaScript">';  
        echo 'alert("login failed")';  
        echo '</script>';
        return false;
      }
    }

    public function department()
    {
      $sql="SELECT * FROM department_table";  
      $result=mysqli_query($this->con,$sql);
      return $result;
    }
    public function department_display($dep_Id)
    {
     $sql="SELECT * FROM department_table WHERE DepartmentId=$dep_Id";
     $result=mysqli_query($this->con,$sql);
     return $result;
    }
    public function department_Updata($dep_id,$dep_name)
    {
      $sql="UPDATE department_table SET DepartmentName='$dep_name' WHERE DepartmentId=$dep_id";
      $result=mysqli_query($this->con,$sql);
      echo '<script type ="text/JavaScript">';  
      echo 'alert("departmentname '.$dep_id.' updated")';  
      echo '</script>';
     return $result;
    }
    public function departmentDelete($dep_id)
    {
      $sql="DELETE FROM department_table WHERE DepartmentId=$dep_id ";
      $result=mysqli_query($this->con,$sql);
      echo '<script type ="text/JavaScript">';  
      echo 'alert("department '.$dep_id.' deleted")';  
      echo '</script>';
      return $result;

    }
    public function department_Add($dep_name)
    {
      $sql="INSERT INTO `department_table`(`DepartmentName`) VALUES ('$dep_name')";
      $result=mysqli_query($this->con,$sql);
      echo '<script type ="text/JavaScript">';  
      echo 'alert("department '.$dep_name.' Added")';  
      echo '</script>';
      return $result;
    }
    public function Register($FirstName,$LastName,$EmailId,$PassWord)
    {
      $sql="INSERT INTO `usertable`(`FirstName`, `LastName`, `EmailId`, `PassWord`) VALUES ('$FirstName','$LastName','$EmailId','$PassWord')";
      if(mysqli_query($this->con,$sql))
      {
      echo '<script type ="text/JavaScript">';  
      echo 'alert("Register '.$FirstName.' Added")';  
      echo '</script>';
       return true;
      }
    }
    
    

}
?>