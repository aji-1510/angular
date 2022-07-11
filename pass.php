<head>
    <title>email validaiton</title>
    <script>
        function validation()
        {
                var email_id=document.getElementById('name').value;
                var pass=document.getElementById('pass').value;
                var at_position=email_id.indexOf("@");
                var dot_position=email_id.lastIndexOf(".");
                var len=email_id.length;
                
                if((at_position>1) && (at_position+4<dot_position) && (dot_position+4==len))
                {
                // alert("Your Email Id  Valid");
                
                }
                else
                {
                    alert("------Your Email Id Not Valid");
                
                }
                var upper=lower=special=number=0;
            if((pass.length>=8)&&(pass.length<=15))
            {
                for(i=0;i<pass.length;i++)
                {
                    var  ch=pass[i];
                    var i=ch.charCodeAt(0);
                    
                    if((i>=65)&&(i<=90))
                    {

                    upper+=1;
                    console.log(upper);
                    }
                    if((i>=97)&&(i<=122))
                    {
                        lower+=1;
                        console.log(lower);
                    }
                    if((i>=48)&&(i<=57))
                    {
                        number+=1;
                        console.log(number);
                    }
                    if((i>=33)&&(i<=47)||(i>=58)&&(i<=64)||(i>=91)&&(i<=96)||(i>=123)&&(i<=126))
                    {
                        special+=1;
                        console.log(special);
                    }
                }
                if((number>0)&&(special>0)&&(lower>0)&&(upper>0))
                {
                    alert("your password valid")
                }
                else
                {
                    alert("your password not valid")
                }
            }
            else
            {
                alert("your password 00 not valid") 
            }
        }

    </script>
</head>
<body>
<form name="validationForm" action="" method="post" enctype="multipart/form-data" onsubmit="return validation();">
    <table align="center">
       
        
        <tr>
        <td>
                <label>Enter your name</label>
            </td>
            <td>
                <input type="text" id="name" name="name" >

            </td>
        </tr>
        <tr>
        <td>
                <label>Enter your password </label>
            </td>
            <td>
                <input type="password" id="pass" name="passWord">

            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit2" value="login" >
            </td>
            
        </tr>
    </table>
</form>
</body>