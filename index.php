<?php
session_start();
   require_once('smarty-4.1.1/libs/Smarty.class.php');
$smarty=new Smarty;
$smarty->display('view/login.tpl');
//print_r($_REQUEST);
if(isset($_POST['login']))
  {
    if((isset($_POST['email_id']))&&(isset($_POST['password'])))
    {
        $email_id=$_POST['email_id'];
        $password=$_POST['password'];
        $db=mysqli_connect("localhost","root","infiniti","login");
        $sql="SELECT * from login_table where emailId='$email_id' AND passWord= '$password'";
        $con=mysqli_query($db,$sql);
        $value=mysqli_fetch_assoc($con);
        if(mysqli_num_rows($con)>0)
        {
            $_SESSION['email']=$value['emailId'];
            $_SESSION['name']=$value['userName'];
            $_SESSION['Id']=$value['userId'];
            header("location:home.php");

        }
    }
    
    else{
        echo '<script> alert("username or password is wrong")</script>';
    }
    
   }
   if(isset($_REQUEST['register']))
   {
    header("location:register.php");
   }
   
?>
