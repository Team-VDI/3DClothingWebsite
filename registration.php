<?php
session_start();
header('location:index2.php');
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'website');

$username=$_POST['username'];
$password=$_POST['password'];

$s = "select * from website where username = '$username'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num == 1) {
     echo"Username Already Taken";
} else {
     $reg = "insert into website(username, password) values('$username','$password')";
     mysqli_query($con,$reg);
     echo"Registration Successful";
}  
?>
