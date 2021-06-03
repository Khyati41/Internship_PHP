<?php
        include("connection.php");
        if(isset($_POST['edit_id']))
        {
        $id=$_POST['edit_id'];
        $name=$_POST['name'];
        $department=$_POST['department'];
        $designation=$_POST['designation'];
        mysqli_query($connection,"update employees set name='$name',department='$department',designation='$designation' where id='$id'");

        header("location:display.php");
        }
        else if(isset($_GET['deleteid'])&& $_GET['deleteid']!="")
        {
            $id=$_GET['deleteid'];
            echo mysqli_error($connection);
            mysqli_query($connection,"delete from employees where id='$id'");
        }
        else
        {
            header ("location:display.php");
}

?>