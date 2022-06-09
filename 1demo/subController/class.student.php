<?php
 require_once('index.php');
 
class student extends Maincontroller{
    public function studentdetails (){
      
       $mod=__CLASS__."Model";
    //    echo $mod;
       require_once("./model/class.$mod.php");
       $model=new $mod;
       
       $con=__CLASS__."_disply";
       $result=$model->$con();
       $view=__CLASS__."view";
    include_once("./view/$view.php");
  
    }



        

 }
?>