<?php
if(isset($_POST['submit']))
{
	
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$contact=$_POST['contact'];
$profile=$_POST['profile'];
$pass = md5($pass);
$user=$_POST['email'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'Project');

 
$q="INSERT INTO users(name,email,password,contact,profile) VALUES('$name', '$email', '$pass', '$contact', '$profile')";
$status=mysqli_query($con,$q)
or die('Email id has already registered');

if($status==1)
{
	$_SESSION['user']=$user;
	header('location:http://localhost/project/login.php');
}
mysqli_close($con);
		        


}


?>
