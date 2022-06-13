
<html>    
    <head>    
        <title>Registration Form</title> 
        <!-- <link rel="stylesheet" href="./include/style.css">      -->
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
    width: 300px;
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
    object-fit: cover;
    margin: 5px;

  }</style>
    </head>    
    <body>    
       <div class="form-container">
       <form action="" method="post" enctype="multipart/form-data">
            <h1>Register now</h1>
            <?php
            
            if(isset($message)){
                echo '<div class"message">'.$message.'</div>';
                 
            }
            ?>
            <input type="text" name="first_name" placeholder="Enter your first Name" class="box" required>
            <input type="text" name="last_name" placeholder="Enter your last Name" class="box" required>
            <input type="text" name="email_id" placeholder="Enter your EmailID" class="box" required>
            <input type="text" name="password" placeholder="Enter your Password" class="box" required>
            <input type="file" name="attach_file" class="box" accepts="image/jpg, image/jpeg, image/png">
            <input type="submit" name="submit" value="Register" class="btn">
            <p>Already have an account ?<h2><a href="http://localhost/project/demo/index.php?model=user&view=login">Login now</a></h2></p>
                  
         </form>
       </div> 
    
    </body>    
</html>    