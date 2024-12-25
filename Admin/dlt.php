<?php
$conn=mysqli_connect("localhost","root","","store");

$sql="DELETE FROM men where id='$_GET[id]'";

if (mysqli_query($conn,$sql))
{

header('location:show.php');
}
else
{
	echo "Not Delete";
}

?>