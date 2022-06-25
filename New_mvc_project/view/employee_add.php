<?php include('home.php') ?>
<form action="" method="post" enctype="multipart/form-data">
    <br>
    <br>
 <div class="container">   
    <div class="d-flex flex-row bd-highlight mb-3">

        <div class="form-froup row" style="width: 60%;">
  
            <label class="col-sm-2 col-form-label">Employee Name</label>
            <div class="col-sm-10">
                <input type="text" name="emp_name" class="form-control"  placeholder="Enter Employee Name">
                </div>
  
                 <label class="col-sm-2 col-form-label">Department</label>
                    <?php include("C:\wamp64\www\mywebsite\NEW_MVC_PROJECT\config.php") ?>
                 <div class="col-sm-10">
                        <select class="form-control" name="departmentName">
                            <?php
                            $obj=new dbconnection();
                            $conn=$obj->dbcon();
                            $sql=mysqli_query($conn,"SELECT DepartmentName From department_table");
                            echo "<option value=>"."--Select--"."</option>";
                            while ($row=$sql->fetch_assoc())
                            {
                                echo "<option>".$row['DepartmentName']."</option>";
                            }
                            ?>
                        </select>
                    </div>
  
                    <label class="col-sm-2 col-form-label">Date of joining</label>
                <div class="col-sm-10">
                 <input type="date"  name="date">
                </div>
            </div>
            <div class="ml-3 bd-highlight" style="width: 40%;">
                <img src="#" id="blah"  height="250px;" width="200px;" />
                <input type="file" name="emp_image" onchange="readURL(this);"  class="mt-2"/>
            </div>
        </div>
          <input type="submit" name="Emp_Add" value="Add"  class="btn btn-primary">
    </div>
                        
</form>   
  
  