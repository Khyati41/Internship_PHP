<?php
include("connection.php");
session_start();
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$department=$_POST['department'];
$designation=$_POST['designation'];
mysqli_query($connection,"insert into employees (name, department,designation) values
('$name','$department','$designation')");

header("location:display.php");
}