<?php include_once('home.php') ?>
<form action="http://localhost/mywebsite/new_mvc_project/index.php?model=department&view=department_delete" method="post" enctype="multipart/form-data">
    <br>
        <table align="center"> 
            <?php 
            while($row=mysqli_fetch_assoc($result))
            {
            ?>
            <tr>
                <td class="col-sm-2>    
                    <div class="form-froup row">

                        <label class="col-sm-4 col-form-label">Department Id</label>
                </td>
                <td class="col-sm-8">
                        <div class="col-sm-10">
                            <input type="text" name="departmentId" class="form-control" value="<?php echo $row['DepartmentId'] ?>" required> 
                                
                        </div>
                    </div>
                </td>
            </tr> 
            <tr> 
                <td class="col-sm-2>    
                   <div class="form-froup row">

                     <label class="col-sm-4 col-form-label">Department Name</label>
                </td>
                <td class="col-sm-8">
                    <div class="col-sm-10">
                      <input type="text" name="departmentName" class="form-control" value="<?php echo $row['DepartmentName'] ?>" placeholder="Enter Department Name" required>
                    </div>
                    </div>
                </td>
            <tr>
                <td> 
                    <input type="submit" value="Delete" name="Delete" class="btn btn-light mr-1">  
                 </td>
                 <td>
                    <button type="button" class="btn btn-light mr-1"><a href="http://localhost/mywebsite/new_mvc_project/index.php?model=department&view=department">Cancel</button>
                 </td>
            </tr>
            <?php } ?>
        </table>
</form>
