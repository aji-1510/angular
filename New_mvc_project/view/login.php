 
<!DOCTYPE html>

<html >
<head>
     <link rel = "icon" href = "http://localhost/mywebsite/new_mvc_project/Image/infiniti_icon.webp" type = "image/x-icon">
    <title>Infiniti Login</title>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://localhost/mywebsite/coffee_project/style/bootstrap.css" type="text/css" rel="stylesheet" />
    <link href="http://localhost/mywebsite/coffee_project/style/signin.css" type="text/css" rel="stylesheet" />
    <style>
       
       body
        {
                    background-image: url('http://localhost/mywebsite/new_mvc_project/image/bg.jpg') ;
                    
                    background-size: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <form class="form-signin" action="" method="post" enctype="multipart/form-data">
            <h4 class="alert alert-success">Employee management</h4>
            <label for="inputEmail" class="sr-only">User Name</label>
            <input type="email" name="email_id" class="form-control" placeholder="User Name" 
                required autofocus />
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password"  name="password" class="form-control" placeholder="Password"
                required />
                <input type="submit" name="login" value="login" class="form-control">
               <h6>Dont have a account ?</h6><a href="http://localhost/mywebsite/new_mvc_project/index.php?model=department&view=Register">Register now</a>

            
        </form>

    </div>
</body>
</html> 




