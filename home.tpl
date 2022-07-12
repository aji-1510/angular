<body  align="center">
<form action="" method="POST" enctype="multipart/form-data" >
<h2>WELCOME {$name}     <input type="submit" name="logout" value="logout"></h2>
<table  align="center" cellspacing="15">
    <tr>
        <th>
             user Id
        </th>
        <th>
            user name
        </th>
        <th>
             user email
        </th>
    <tr>
    <tr>
        <td>
            {$id}
        </td>
   
        <td>
            {$name}
        </td>
    
        <td>
            {$email}
        </td>
    </tr>
</table>
</form>
</body>