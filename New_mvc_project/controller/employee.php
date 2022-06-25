<?php
require_once('./index.php');
class employee extends Maincontroller
{
    public function __construct()
    {
        parent::__construct();
        $this->mod=ucwords($this->controller);
        $this->show=$this->view;
    }
    public function login()
    {
        include('./view/login.php');
    }
    public function home()
    {
        include('./view/home.php');
    }
    public function employee()
    {
    $mod=$this->mod.'Model';
       require_once('./model/'.$mod.'.php');
       $obj1=new $mod();
       $result=$obj1->employee();
       include('./view/employee_show.php');
        
    }
    public function employee_Add()
    {
      include('./view/employee_add.php');
      if(isset($_POST['Emp_Add']))
      {
        $image=$_FILES['emp_image']['name'];
        $image_tmp_name=$_FILES['emp_image']['tmp_name'];
        $image_folder='./Image/'.$image;
        move_uploaded_file($image_tmp_name,$image_folder);
        
        $empName=$_POST['emp_name'];
        $departmentName=$_POST['departmentName'];
        $dateOfJoin=$_POST['date'];
        $mod=$this->mod.'Model';
        require_once('./model/'.$mod.'.php');
        $obj1=new $mod();
        $obj1->employeeAdd($empName,$departmentName,$dateOfJoin,$image);
        
      }

    }
    public function employeedelete()
    {
        if(isset($_REQUEST['delete']))
        {
            $dep_deleteId=$_GET['delete'];
            $mod=$this->mod.'Model';
            require_once('./model/'.$mod.'.php');
            $obj1=new $mod();
            $result=$obj1->employee_display($dep_deleteId);
            include_once('./view/employee_delete.php');
        }
    }
    public function employee_delete_click()
    {
      if(isset($_POST['Delete']))
            {
                
                $emp_id="";
                if(isset($_POST['emp_Id']))
                {
                   $emp_id=$_POST['emp_Id'];
                }
                $mod=$this->mod.'Model';
                require_once('./model/'.$mod.'.php');
                $obj1=new $mod();
                $obj1->department_Delete($emp_id);
               include('./view/home.php');

            }

    }
    public function employeeedit()
    {
        if(isset($_REQUEST['edit']))
        {
            $dep_deleteId=$_GET['edit'];
            $mod=$this->mod.'Model';
            require_once('./model/'.$mod.'.php');
            $obj1=new $mod();
            $result=$obj1->employee_display($dep_deleteId);
            include_once('./view/employee_edit.php');
        }

    }
    public function employee_edit_click()
    {
        if(isset($_POST['Update']))
        {
            
        $image=$_FILES['emp_image']['name'];
        $image_tmp_name=$_FILES['emp_image']['tmp_name'];
        $image_folder='./Image/'.$image;
        move_uploaded_file($image_tmp_name,$image_folder);
        $empId=$_POST['emp_Id'];
        $empName=$_POST['emp_name'];
        $departmentName=$_POST['departmentName'];
        $dateOfJoin=$_POST['date'];
        $mod=$this->mod.'Model';
        require_once('./model/'.$mod.'.php');
        $obj1=new $mod();
        $obj1->employee_edit($empId,$empName,$departmentName,$dateOfJoin,$image);
        } 

    }


}
?>