<?php
class Maincontroller{
  public $model='';
  public $view='';
  public $controller='';
  public $request=array();
  public $text1=" ";
 
  public function __construct(){
    $url=$_SERVER['REQUEST_URI'];
    $query=explode("?",$url);
    $parameter=explode("&",$query[1]);
    // print_r($parameter);
    $this->controller=substr($parameter[0],6);
    // echo $this->controller;
    $this->model=$this->controller;
    $this->view=substr($parameter[1],5);
    $this->request=array_slice($parameter,2);
   
    
    // foreach($this->request as $key){
    //   echo $key;
  //  } 
    }
  public function render(){
    $controller=($this->controller);
    // echo $controller;
    //include_once("$controller.php");
   
    require_once("./subController/class.$controller.php");
    $studentclass= new $controller ;
    $view=$this->view;
    // echo $view;
    //  echo $view;
    $obj=$studentclass->$view();
   }

}
$obj=new Maincontroller;
$obj->render();
?>