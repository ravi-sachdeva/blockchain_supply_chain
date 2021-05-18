<?php
session_start();
$user=$_POST['email'];
$pass=$_POST['password'];
$pass = md5($pass);
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'Project');
$q="select * from users where email='$user' && password='$pass'";
$status=mysqli_query($con,$q);
$num=mysqli_num_rows($status);
if($num==1)
{
	$_SESSION['user']=$user;
	header('location:http://localhost/project/login.php');
}
else
{
	header("location:http://localhost/project/signlog.php? error=email or password is incorrect.");
}

?>