<?php
$conn=mysqli_connect("localhost","root","","store");
if (!$conn)
{
	echo "not connect";
}
$sql="CREATE TABLE admin(ad_id int(30) primary key,F_Name varchar(30),L_Name varchar(30),email varchar(40),password varchar(30),mob int(20),job_title varchar(50),address varchar(100),reg_date TIMESTAMP)";
if (mysqli_query($conn,$sql))
{
	echo "create";
}
else
{
	echo "not create";
}

mysqli_close($conn);
?>