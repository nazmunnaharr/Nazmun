<?php
session_start();

$conn=mysqli_connect("localhost","root","","store");

$jid=$_POST['jid'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pass=$_POST['password'];
$mob=$_POST['mob'];
$job=$_POST['job'];
$adds=$_POST['adds'];

$s="SELECT * from admin where ad_id='$jid' && password='$pass'";
//$s="SELECT * from user where email='$email'";

$result=mysqli_query($conn,$s);

$num=mysqli_num_rows($result);

if ($num==1) 
{
	$_SESSION['username']=$fname;  
	header('location:home.php');
}
else
{
	header('location:login.php');
	
}

?>