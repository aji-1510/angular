<?php
session_start();
class UserModel{
      public $con=" ";

      public function __construct(){
          require_once("./include/class.dbConnection.php");
          $obj=new dbConnect();
          // iam creating a object for the dbConnection
          $this->con=$obj->connect();
          //iam calling the method which is in the dbConnection class and storing final value in the above variable
      }
      
    public function loginDetails(){
            $email_id=mysqli_real_escape_string($this->con,$_POST['email_id']);
            $password=mysqli_real_escape_string($this->con,$_POST['password']);
            // acquirng the username and password from the login form and storing it in the above variable
            $select_query="SELECT * FROM user WHERE email_id='$email_id' AND password='$password'";
            // query to get the username and password details from the database
            $result=mysqli_query($this->con,$select_query);
            // storing the details that i get from the database in the result variable
             $mes="username or password is incorrect";
             //storing an alert variable in the above variable
            if(mysqli_num_rows($result)>0){
                $row=mysqli_fetch_assoc($result);
                $_SESSION['attach_file']=$row['attach_file'];
                $_SESSION['first_name']=$row['first_name'];
                $_SESSION['last_name']=$row['last_name'];
                $_SESSION['email_id']=$row['email_id'];
                header("location:./view/profile.php");
            }
            else{
              return $mes;
            }
        }
        public function registerDetails(){
            if(isset($_REQUEST['submit'])){
                $first_name=mysqli_real_escape_string($this->con,$_REQUEST['first_name']);
                $last_name=mysqli_real_escape_string($this->con,$_REQUEST['last_name']);
                $email_id=mysqli_real_escape_string($this->con,$_REQUEST['email_id']);
                $password=mysqli_real_escape_string($this->con,$_REQUEST['password']);
                // storing the value that i get in the register form in the above variable
                $attach_file=$_FILES['attach_file']['name'];
                // acuquiring the respective name of the image
                $attach_file_size=$_FILES['attach_file']['size'];
                //acquiring the size  of the image
                $attach_file_tmp_name=$_FILES['attach_file']['tmp_name'];
                // acquiring the tmp_name of an image
                $attach_file_folder='./image/'.$attach_file;
                //acquring the image from the user and storing it in our image folder
                $select_query="SELECT * FROM user WHERE email_id='$email_id' AND password='$password'";
                $select=mysqli_query($this->con,$select_query);
                // this $select variable is to check wheather the user is existed user or not
                $insert_query="INSERT INTO user (first_name,last_name,email_id,password,attach_file) VALUES ('$first_name','$last_name','$email_id','$password','$attach_file');";
                // this $insert_Query contains the query to perform the insert operation.
                $message=array("user already exist","password is not to defined length","image size is too large!!","register sucessfull!","registration failed");
                if(mysqli_num_rows($select)>0){
                    $mes=$message[0];
                }
                // the above block is used to check wheather the user is a existed user
                else{
                    if(strlen($password)<=6){
                        $mes=$message[1];
                    }
                    if($attach_file_size >2000000){
                        $mes=$message[2];
                    }
                    // the above block is to deliverd the different alert message
                    else{
                        $insert=mysqli_query($this->con,$insert_query);
                        if($insert_query){
                            move_uploaded_file($attach_file_tmp_name,$attach_file_folder);
                            $mes=$message[3];
                            header('location:http://localhost/project/demo/index.php?model=user&view=login');
                        }
                        else{
                            $mes=$message[4];
                        }
                    }
                }
            return $mes;
            }
        }
    }
      
    

   


?>
            
         
      



