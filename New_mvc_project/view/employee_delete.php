<?php include('home.php') ?>
<form action="http://localhost/mywebsite/new_mvc_project/index.php?model=employee&view=employee_delete_click" method="post" enctype="multipart/form-data">
    <br>
    <br>
 <div class="container">   
    <div class="d-flex flex-row bd-highlight mb-3">
    <?php 
            while($row=mysqli_fetch_assoc($result))
            {
            ?>

        <div class="form-froup row" style="width: 60%;">
             
            <label class="col-sm-2 col-form-label">Employee Name</label>
                <div class="col-sm-10">
                    <input type="text" name="emp_Id"  class="form-control" value="<?php echo $row['EmployeeId'] ?>"  placeholder="Enter Employee Name" required>
                </div>

  
            <label class="col-sm-2 col-form-label">Employee Name</label>
                <div class="col-sm-10">
                    <input type="text" name="emp_name" class="form-control" value="<?php echo $row['EmployeeName'] ?>"  placeholder="Enter Employee Name" required>
                </div>
  
            <label class="col-sm-2 col-form-label">Department</label>  
                <div class="col-sm-10">
                    <input type="text" name="department" class="form-control" value="<?php echo $row['Department'] ?>"  placeholder="Enter Employee Name" required>
                </div>
  
            <label class="col-sm-2 col-form-label">Date of joining</label>
                <div class="col-sm-10">
                    <input type="date"  name="date"  value="<?php echo $row['DateOfJoining'] ?>" required>
                </div>
            </div>

            <div class="ml-3 bd-highlight" style="width: 40%;">
                <img  id="blah"  height="250px;" width="200px;" src="http://localhost/mywebsite/new_mvc_project/Image/<?php echo $row['PhotoFileName'] ?>" />
                <input type="file" name="emp_image" onchange="readURL(this);" class="mt-2"/>
            </div>
        </div>
        <input type="submit" name="Delete" value="Delete"  class="btn btn-primary">
        <button type="button" class="btn btn-light mr-1"><a href="http://localhost/mywebsite/new_mvc_project/index.php?model=employee&view=employee">Cancel</button>
    </div>
    <?php } ?>
                        
</form>   
  
  