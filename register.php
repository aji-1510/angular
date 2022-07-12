<?php


   require_once('smarty-4.1.1/libs/Smarty.class.php');
$smarty=new Smarty;
$smarty->display('view/register.tpl');
if(isset($_POST['registerRecord']))
   {
      
      if((isset($_POST['fname']) !=" ")&&(isset($_POST['lname']) !=" ")&&(isset($_POST['emailid'])!=" ")&&(isset($_POST['pass'])!=" "))
      {
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $emailid=$_POST['emailid'];
            $pass=$_POST['pass'];
            $db=mysqli_connect("localhost","root","infiniti","login");
            $sql="INSERT INTO login_table(userName,emailId,passWord)VALUES('$fname$lname','$emailid','$pass')";
            if(mysqli_query($db,$sql))
            {
                    echo '<script>alert("Record Added")</script>';
            }
            else
            {
                    echo '<script>alert("Record Not Added")</script>';
            }
      }
      else
      {
        echo '<script>alert("Enter valid input")</script>';
      }
     
   }
   if(isset($_REQUEST['login']))
   {
        header("location:index.php");
   }


?>