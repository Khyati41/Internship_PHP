<?php 

    $connection=mysqli_connect("localhost","root","","student");


    if($connection)
    {

    $name=$_POST['name'];
    $email=$_POST['email'];
    $dob=$_POST['date'];
    $pass=$_POST['password'];
    $gen=$_POST['gender'];
    $mobile=$_POST['mobile'];
    $city=$_POST['city'];
    $pincode=$_POST['pincode'];
    $state=$_POST['state'];

    $query=mysqli_query($connection,"insert into student(name,gender,dob,email,mobile,password,city,pincode,state) values('$name','$gen','$dob','$email','$mobile','$pass','$city','$pincode','$state')");

    if($query)
    {
        echo "<script>alert('Account Created');</script>";
    }
    else
    {
        echo "<script>alert('Account not created');</script>";
    }


    $query=mysqli_query($connection,"select * from student");

    echo "
    <h3 style='margin-left:18%;'>Student Details</h2>
    <table>
    <tr>
        <th>Name</th>
        <th>Gender</th>
        <th>Date of Birth</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>City</th>
        <th>Pincode</th>
        <th>State</th>
    </tr>";

    while($row=mysqli_fetch_array($query))
    {
        echo " <tr>
                    <td>$name</td>
                    <td>$gen</td>
                    <td>$dob</td>
                    <td>$email</td>
                    <td>$mobile</td>
                    <td>$city</td>
                    <td>$pincode</td>
                    <td>$state</td>
                </tr>
                ";
    }

    echo "</table>";


    header("location: display.php");
}

else
{
    die(mysqli_connect_error($connection));
}

?>