
<html>
<head></head>
    <body>
<table border="1" >
<tr>
<th>Roll no</th>
<th>name</th>
<th>age</th>
<th>location</th>
</tr>
   <?php
   if(mysqli_num_rows($result)> 0){
    while($row=mysqli_fetch_assoc($result))
    { ?>
    <tr>
        <td> <?php echo $row['student_id'] ?> </td>
        <td> <?php echo $row['stud_name'] ?> </td>
        <td> <?php echo $row['stud_age'] ?> </td>
        <td> <?php echo $row['stud_add'] ?> </td> 
  </tr>  
    <?php }
        }    ?>
    
    </table>
     </body>
    </html>  