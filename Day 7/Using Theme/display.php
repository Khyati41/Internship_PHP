<?php 

    $connection=mysqli_connect("localhost","root","","student");


    if($connection)
    {

    $query=mysqli_query($connection,"select * from student");

    echo "
    <h3 style='margin-left:18%;'>Student Details</h2>
    <table border='1px solid black'>
    <tr style='border:'none';>
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
                    <td>".$row["name"]."</td><td>".$row["gender"]."</td><td>".$row["dob"]."</td><td>".$row["email"]."</td><td>".$row["mobile"]."</td><td>".$row["city"]."</td><td>".$row["pincode"]."</td><td>".$row["state"]."</td></tr>";
    }

    echo "</table>";
}

else
{
    die(mysqli_connect_error($connection));
}

?>