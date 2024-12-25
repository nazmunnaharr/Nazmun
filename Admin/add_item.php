<?php
session_start();
header('location:items_table.php');
$conn=mysqli_connect("localhost","root","","store");
$pid=$_POST['pid'];
$pname=$_POST['pname'];
$ppri=$_POST['ppri'];
$pbrand=$_POST['pbrand'];
$pquan=$_POST['pquan'];



$s="SELECT * from items where id='$pid'";

$result=mysqli_query($conn,$s);

$num=mysqli_num_rows($result);

if ($num == 1) 
{
	echo "Product Already Taken";

}
else
{
	$reg="INSERT into items(id,name,price,brand,quantity) VALUES('$pid','$pname','$ppri','$pbrand','$pquan')";
	mysqli_query($conn,$reg);
	echo "Item Add Successfully";
	

}

?>
