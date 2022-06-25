
<html>    
    <head>    
        <title>Infiniti Register</title> 
    <link rel = "icon" href = "http://localhost/mywebsite/new_mvc_project/Image/infiniti_icon.webp" type = "image/x-icon">
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
    <div class="container">
        <form class="form-signin" action="http://localhost/mywebsite/new_mvc_project/index.php?model=department&view=register" method="post" enctype="multipart/form-data">
            <h4 class="alert alert-success">Register now</h4>
            <label for="inputText" class="sr-only">FirstName</label>
            <input type="text" name="FirstName" class="form-control" placeholder="FirstName" 
                required autofocus />
            <label for="inputText" class="sr-only">LastName</label>
            <input type="text"  name="lastName" class="form-control" placeholder="LastName"
                required />
            <label for="inputText" class="sr-only">Email</label>
            <input type="email"  name="Email" class="form-control" placeholder="Email"
                required /> 
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password"  name="PassWord" class="form-control" placeholder="Password"
                required />
            <input type="submit" name="Register" value="Register" class="form-control">
            <h6  style="color:yellow;">Already have an account ?</h6><a href="http://localhost/mywebsite/new_mvc_project/index.php?model=department&view=login">Login now</a>

            
        </form>

    </div>
</body>   
</html>    