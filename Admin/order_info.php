<!DOCTYPE html>
<html>
<head>
    <title>Oder_info</title>
</head>
<body>
    <a href="home.php">Back</a>
   </body>
</html>





<?php
$conn=mysqli_connect("localhost","root","","store");
error_reporting(0);
$query="SELECT * FROM users_items";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if ($total != 0)
{
    ?>
    <table border="1" align="center" style="width: 800px; line-height: 50px;">
        <tr>
            <th colspan="8" bgcolor="blue"><h2>Product Information</h2></th>
        </tr>
        <tr>
            <th bgcolor="green">Order_Id</th>
            <th bgcolor="orange">User Id</th>
            <th bgcolor="lightgreen">Items Id</th>
            <th bgcolor="orange">Status</th>
        </tr>

        <?php 

        while($result=mysqli_fetch_assoc($data))
        {
            echo "<tr>
            <td>".$result['id']."</td>
            <td>".$result['user_id']."</td>
            <td>".$result['item_id']."</td>
            <td>".$result['status']."</td>
        </tr>";
        }
}
else
{
    echo "No record found";
}

?>
</table>