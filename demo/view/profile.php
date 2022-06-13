<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style> 
        ::-webkit-scrollbar-thumb{
          background-color: var(--blue);
                }
.btn,
.delete-btn{
  width: 100%;
  border-radius: 3px;
  padding:10px 30px;
  color: var(--blue);
  display: block;
  text-align: center;
  cursor: pointer;
  font-size: 20px;
}
.btn{
  background-color: rgb(97, 97, 126);
}
.btn:hover{
  background-color: rgb(146, 146, 204);
}
.delete-btn{
  background-color: rgb(228, 174, 174);
}
.delete-btn:hover{
  background-color: rgb(241, 164, 164);
}
.message{
  margin: 5px 0;
  width: 100%;
  border-radius: 5px;
  padding: 10px;
  text-align: center;
  background-color: var(--red);
  color: var(--white);
  font-size: 20px;

}

.form-container {  
    max-height:500px;
    max-width: 500px;
    background-color: white;  
    display:flex; 
    align-items: center;  
    justify-content: center;  
    padding: 30px;
    
  }  
    
  .form-container form{
    padding: 20px;
    background-color:rgb(185, 185, 245) ;
    box-shadow: var(--box-shadow);
    text-align: center;
    justify-content: center;
    width: 500px;
    border-radius:0px;
  }
  .form-container form .box{
    width:100%;
    border-radius:5px;
    padding: 12px 14px;
    font-size: 18px;
    color: var(--black);
    margin: 10px 0;
    background-color: var(--light-bg);

  }
  .container{
    max-height:500px;
    max-width: 500px;
    background-color: rgb(228, 238, 243);  
    display:flex; 
    align-items: center;  
    justify-content: center;  
    padding: 30px;
    
  }
  .container .profile{
    width:100%;
    border-radius:5px;
    padding: 12px 14px;
    font-size: 18px;
    color: var(--black);
    margin: 10px 0;
    background-color: var(--light-bg);
     
  }
  .container .profile .img{
    height: 150px;
    width: 150px;
    border-radius: 50%;
    object-fit:auto;
    margin: 5px;

  }</style>
</head>
<body>
    <div class="container">
        <div class="profile">
            <?php
            if($_SESSION['attach_file']==' '){
                echo '<img src="localhost\project\demo\image\avatar.png" alt="">';
            }
            else
            {
                echo '<img src="C:\xampp\htdocs\project\demo\image\"'.$_SESSION['attach_file'].'alt="">';
            }
         ?>
         <h3><?php echo $_SESSION['first_name'];?></h3>
         <h3><?php echo $_SESSION['last_name'];?></h3>
         <h3><?php echo $_SESSION['email_id'];?></h3>
        </div>

    </div>
    
</body>
</html>