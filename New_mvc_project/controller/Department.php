<?php
require_once('./index.php');
class Department extends Maincontroller
{
    public function __construct()
    {
        parent::__construct();
        $this->mod=ucwords($this->controller);
        $this->show=$this->view;
    }
    public function login()
    {
        //login page process
        include('./view/login.php');
        if(isset($_POST['login']))
        {
            $emailId=$_POST['email_id'];
            $PassWord=$_POST['password'];
            $mod=$this->mod.'Model';
            require_once('./model/'.$mod.'.php');
            $obj1=new $mod();
            $result=$obj1->Login($emailId,$PassWord);
            if($result==true)
            {
                //condition true show the home page
                header("location:http://localhost/mywebsite/new_mvc_project/index.php?model=department&view=home");
            }
            else
            {
                //condition false again we will continue login page
                header("location:http://localhost/mywebsite/new_mvc_project/index.php?model=department&view=login");
            }

        }
    }
    public function register()
    {
        //Register page processing
        include('./view/register.php');
        if(isset($_POST['Register']))
        {
            $FirstName=$_POST['FirstName'];
            $LastName=$_POST['lastName'];
            $EmailId=$_POST['Email'];
            $PassWord=$_POST['PassWord'];
            $mod=$this->mod.'Model';
            require_once('./model/'.$mod.'.php');
            $obj1=new $mod();
            $obj1->Register($FirstName,$LastName,$EmailId,$PassWord);      
          
        }
    }
    public function home()
    {
        include('./view/home.php');
    }
    public function department()
    {
       $mod=$this->mod.'Model';
       require_once('./model/'.$mod.'.php');
       $obj1=new $mod();
       $result=$obj1->department();
       include('./view/department_show.php');
        
    }
    public function departmentedit()
    {
        if(isset($_REQUEST['edit']))
        {
            $dep_editId=$_GET['edit'];
            $mod=$this->mod.'Model';
            require_once('./model/'.$mod.'.php');
            $obj1=new $mod();
            $result=$obj1->department_display($dep_editId);
            include_once('./view/department_edit.php');
        }
    }
    public function departmentdelete()
    {
        if(isset($_REQUEST['delete']))
        {
            $dep_deleteId=$_GET['delete'];
            $mod=$this->mod.'Model';
            require_once('./model/'.$mod.'.php');
            $obj1=new $mod();
            $result=$obj1->department_display($dep_deleteId);
            include_once('./view/department_delete.php');
        }
    }
    public function departmentupdate()
    {
        if(isset($_POST['Update']))
        {
             $dep_name="";
             $dep_id="";
             if(isset($_POST['departmentId']))
             {
                $dep_id=$_POST['departmentId'];
             }
            
             if(isset($_POST['departmentName']))
             {
                $dep_name=$_POST['departmentName'];
             }
             $mod=$this->mod.'Model';
             require_once('./model/'.$mod.'.php');
             $obj1=new $mod();
             $obj1->department_Updata($dep_id,$dep_name);
            include('./view/home.php');
        } 
         
       
    }
    public function department_delete()
    {

            if(isset($_POST['Delete']))
            {
                
                $dep_id="";
                if(isset($_POST['departmentId']))
                {
                   $dep_id=$_POST['departmentId'];
                }
                $mod=$this->mod.'Model';
                require_once('./model/'.$mod.'.php');
                $obj1=new $mod();
                $obj1->departmentDelete($dep_id);
               include('./view/home.php');

            }
    } 
    public function departmentAdd()
    {
        include('./view/department_add.php');
        if(isset($_POST['Add']))
        {
            if(isset($_POST['departmentName']))
            {
                $dep_name=$_POST['departmentName'];
            }
            $mod=$this->mod.'Model';
                require_once('./model/'.$mod.'.php');
                $obj1=new $mod();
                $obj1->department_Add($dep_name);
              

        }

    }
    







}
?>