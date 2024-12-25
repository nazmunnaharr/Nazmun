<?php
session_start();
header('location:login.php');
$conn=mysqli_connect("localhost","root","","store");
$jid=$_POST['jid'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pass=$_POST['password'];
$mob=$_POST['mob'];
$job=$_POST['job'];
$adds=$_POST['adds'];



$s="SELECT * from admin where email='$email'";

$result=mysqli_query($conn,$s);

$num=mysqli_num_rows($result);

if ($num == 1) 
{
	echo "Email Already Taken";

}
else
{
	$reg="INSERT into admin(ad_id,F_Name,L_Name,email,password,mob,job_title,address) VALUES('$jid','$fname','$lname','$email','$pass','$mob','$job','$adds')";
	mysqli_query($conn,$reg);
	echo "Registration Successfully";
	

}

?>
