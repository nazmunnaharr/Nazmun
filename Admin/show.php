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
$query="SELECT * FROM items";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if ($total != 0)
{
    ?>
    <table border="1" align="center" style="width: 800px; line-height: 25px;">
        <tr>
            <th colspan="8" bgcolor="blue"><h2>Product Information</h2></th>
        </tr>
        <tr>
            <th bgcolor="green">pro_id</th>
            <th bgcolor="orange">pro_name</th>
            <th bgcolor="lightgreen">pro_prize</th>
            <th bgcolor="orange">Brand</th>
            <th bgcolor="grey">pro_quantity</th>
            <th bgcolor="lightblue">Delete</th>
        </tr>

        <?php 

        while($result=mysqli_fetch_assoc($data))
        {
            echo "<tr>
            <td>".$result['id']."</td>
            <td>".$result['name']."</td>
            <td>".$result['price']."</td>
            <td>".$result['brand']."</td>
            <td>".$result['quantity']."</td>
             <td><a href=dlt.php?id=".$row['id'].">Delete</a></td>
        </tr>";
        }
}
else
{
    echo "No record found";
}

?>
</table>