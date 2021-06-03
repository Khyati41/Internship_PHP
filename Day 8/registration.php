<html>
<head>
<title> Registration </title>
<style>
    table
    {
        font-size:25px;
        text-align:center;
        background: #07A8C3;
        border:2px solid;
    }
    .link
    {
        font-size:25px;
    word-spacing:7px;
    }

    input[type=text]
    {
        text-transform:Capitalize;
    }
</style>
</head>

<body background="image.jpg">
    <h1>ADD NEW USER</h1>

    <form method = "post" style="margin-top:25px" action = "process.php" enctype="multipart/form-data">
        
        <br> <br>
        <table>
        <tr>
            <th colspan = "2"><u><b> Registration Form</b></u></th>
        </tr>

        <tr>
            <td>
                <b>Name :</b></td> 
                <td><input type = "text" name = "name" required></td>  
             
        </tr>

        <tr>
            <td>
                <b>Department :</b></td> 
                <td> <input type = "text" name = "department" required></td> 
            
        </tr>

        <tr>
            <td><b>Designation :</b></td>
            <td><input type = "text" name="designation" required></td>
        </tr>

        <tr>
            <td colspan="2">
            <input type = "submit" name = "submit" value = "Submit">
            
            </td>
        </tr>
    </table>
</form>
</body>
</html>



            
        
