<?php
include("connection.php");
?>

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
        <?php
        if(isset($_GET['editid'])&& $_GET['editid']!="")
        {
            $e_id=$_GET['editid'];
            $query=mysqli_query($connection,"select * from employees where id='$e_id'");
            $result=mysqli_fetch_array($query);
        }
        ?>  
        <body background="image.jpg">
        <h1><u>UPDATE FORM</u></h1>
        <form method = "post" style="margin-top:25px" action = "register_update_process.php" enctype="multipart/form-data">
        
        <br> <br>
        <table>

            <tr>
                <td><b>Name :</b></td>
                <td><input type = "text" name = "name" value="<?php echo $result['name']; ?>"
                required>
                </td>
            </tr>

            <tr>
                <td>
                <b>Department :</b></td> <td> <input type = "text" name = "department" value="<?php echo
                    $result['department']; ?>" required>
                
                </td>
             </tr>

             <tr>
                 <td><b>Designation :</b></td> <td>
                    <input type = "text" name="designation" value="<?php echo $result['designation'];
                    ?>" required>
                    </td>
            </tr>
            
            <tr>
                    <td>
                    <input type= "hidden" name="edit_id" value =" <?php
                    echo $result['id'];?>">
            </td>
            
            </tr>
                    <tr>
                    <td colspan="2">
                    <input type = "submit" name = "edit" value = "Update">
                    
                    </td>
            </tr>

            </tr>
        </table>
    </form>
    </body>
</html>


