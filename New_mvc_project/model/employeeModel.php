<?php
class employeeModel
{
    public $con=" ";
    public function __construct()
    {
        require_once("./config.php");
        $obj=new dbconnection();
        // iam creating a object for the dbConnection
        $this->con=$obj->dbcon();
    }

    public function employee()
    {
      $sql="SELECT * FROM employee_table";  
      $result=mysqli_query($this->con,$sql);
      return $result;
    }
    public function employeeAdd($empName,$departmentName,$dateOfJoin,$name)
    {
      $sql="INSERT INTO `employee_table`(`EmployeeName`, `Department`, `DateOfJoining`, `PhotoFileName`) VALUES ('$empName','$departmentName','$dateOfJoin','$name')";
      if(mysqli_query($this->con,$sql))
      {
        echo '<script type ="text/JavaScript">';  
        echo 'alert("employee '.$empName.' record added")';  
        echo '</script>';
        
       }
      else
      {
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Employee '.$empName.' Not Record Added")';  
        echo '</script>'; 
      }
    }
    public function employee_display($dep_showId)
    {
      $sql="SELECT * FROM employee_table WHERE EmployeeId=$dep_showId";
      $result=mysqli_query($this->con,$sql);
      return $result;

    }
    public function department_Delete($emp_id)
    {
      $sql="DELETE FROM employee_table WHERE EmployeeId=$emp_id ";
      $result=mysqli_query($this->con,$sql);
      echo '<script type ="text/JavaScript">';  
      echo 'alert("employee '.$emp_id.' data deleted")';  
      echo '</script>';
      return $result;

    }
    public function employee_edit($empId,$empName,$departmentName,$dateOfJoin,$image)
    {
      $sql="UPDATE `employee_table` SET `EmployeeName`='$empName',`Department`='$departmentName',`DateOfJoining`='$dateOfJoin',`PhotoFileName`='$image' WHERE `EmployeeId`='$empId'";
      if(mysqli_query($this->con,$sql))
      {
        echo '<script type ="text/JavaScript">';  
        echo 'alert("employee '.$empName.' record Updated")';  
        echo '</script>';
        
       }
      else
      {
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Employee '.$empName.' Not Record Updated")';  
        echo '</script>'; 
      }
    }

}
?>