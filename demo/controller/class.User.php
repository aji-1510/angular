<?php
require_once('./index.php');
class User extends Maincontroller{
    public $model=" ";
    public $show=" ";
    public  function  __construct(){
        parent::__construct();
        $this->mod=ucwords($this->controller);
        $this->show=$this->view;
      
    }
    public function login(){
        $mod=$this->mod.'Model';
        $method=$this->show.'Details';
        require_once('./model/user/class.'.$mod.'.php');
        $log_obj=new $mod();
        require_once('./view/login.php');
        if(isset($_REQUEST['login'])){
             $log_obj->loginDetails();
        }
    }
    public function register(){
         require_once('./view/register.php');
        require_once('./model/user/class.UserModel.php');
        $reg_obj=new UserModel();
        $reg_msg=$reg_obj->registerDetails();
        }
        }    
   
       
?>

    

















}




















?>