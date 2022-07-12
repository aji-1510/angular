<head>
    <title>email validaiton</title>
    <script src="./view/validation.js"></script>
   </head>
<body align="center">
<br><br><br>

<!--  -->
<form name="validationForm" action="" method="post" enctype="multipart/form-data" >
<!-- <div style="background-color:#ABBAEA;width:500px; height:400px;"> -->
    <table align="center" cellspacing="15">
       
        <tr>
            <td colspan="2">LOGIN PAGE</td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="text" id="name" name="email_id" placeholder="Email Id" >   
            </td>
        </tr>
        <tr>
            <td colspan="2">
               <input type="password" id="pass" name="password" placeholder="password" >
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="login" value="login" onclick="loginvalid();">
            </td>
            <td>

                <input type="submit" name="register" value="Register" >
            </td>
        </tr>
    </table>
</form>
</body>
