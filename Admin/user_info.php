<!DOCTYPE html>
<html>
<head>
    <title>this is a view page</title>
</head>
<body>
    <a href="home.php">Back</a>
   </body>
</html>





<?php
$conn=mysqli_connect("localhost","root","","store");
error_reporting(0);
$query="SELECT * FROM users";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if ($total != 0)
{
    ?>
    <table border="1" align="center" style="width: 800px; line-height: 50px;">
        <tr>
            <th colspan="8" bgcolor="blue"><h2>User Information</h2></th>
        </tr>
        <tr>
            <th bgcolor="green">User_id</th>
            <th bgcolor="orange">User_name</th>
            <th bgcolor="lightgreen">User_Email</th>
            <th bgcolor="orange">Password</th>
            <th bgcolor="grey">Contact</th>
            <th bgcolor="lightblue">City</th>
             <th bgcolor="lightblue">Address</th>
        </tr>

        <?php 

        while($result=mysqli_fetch_assoc($data))
        {
            echo "<tr>
            <td>".$result['id']."</td>
            <td>".$result['name']."</td>
            <td>".$result['email']."</td>
             <td>".$result['password']."</td>
            <td>".$result['contact']."</td>
            <td>".$result['city']."</td>
             <td>".$result['address']."</td>
        </tr>";
        }
}
else
{
    echo "No record found";
}

?>
</table>