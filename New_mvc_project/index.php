<?php
class Maincontroller{
   public $model=" ";
   public $view=" ";
   public $controller=" ";
   public $request=" ";
   public $res="";
    //declaring variable to store the model,view,controller from the url
    public function __construct(){
    $url=$_SERVER['REQUEST_URI'];
    //iam storing the url in the above variable
    $path=explode("?",$url);
    //seperating the query string value in the url
    $params=explode("&",$path[1]);
    //storing the querystring values in the above variable
    $this->model=trim(str_replace("model="," ",$params[0]));
    //storing the model value in the model variable
    $this->controller=$this->model;
    //in our case model and controller are same
    $this->view=trim(str_replace("view="," ",$params[1]));
    // storing the view value in the above variable
    $res=array_slice($params,2);
    //seperating the request variable in the query string
    foreach ($res as $key=>$value){
        $this->request=$value;
    }
    // storing the request variable as an array in the above block
}
    public function render(){
        $cntrl=ucwords($this->controller);
        $view=$this->view;
        require_once('./controller/'.$cntrl.'.php');
        $cntrl_obj=new $cntrl();
        $cntrl_obj->$view();
    }



}
$obj=new Maincontroller();
$obj->render();
?>