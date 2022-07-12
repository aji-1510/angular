<?php
session_start();
require_once('smarty-4.1.1/libs/Smarty.class.php');
$smarty=new Smarty;
$smarty->assign('id',$_SESSION['Id']);
$smarty->assign('name',$_SESSION['name']);
$smarty->assign('email',$_SESSION['email']);
$smarty->display('view/home.tpl');
if(isset($_POST['logout']))
{
    session_destroy();
    header("location:index.php");
}

?>