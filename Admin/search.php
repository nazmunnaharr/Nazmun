<!DOCTYPE html>
<html>
<head>
	<title>Search page</title>
	<style type="text/css">
		body
		{
			background-color: whitesmoke;
		}
		input
		{
			width: 40%;
			height: 5%;
			border: 1px;
			border-radius: 5px;
			padding: 8px 15px 8px 15px;
			margin: 10px 0px 15px 0px;
			box-shadow: 1px 1px 2px 1px grey;
			text-align: center;
		}
	</style>
</head>
<body>
      <center>
      	<h1>Search Data In Database</h1>
      	<form action="" method="POST">
      		<input type="text" name="pid" placeholder="Enter Product Code"><br>
      		<input type="submit" name="search" value="Search Data">      		
      	</form>
             <?php
             $conn=mysqli_connect("localhost","root","","store");
             
             if (isset($_POST['search']))
             {
             	$pid=$_POST['pid'];

             	$query="SELECT * FROM items WHERE id='$pid'";
             	$result=mysqli_query($conn,$query);

             	while($row=mysqli_fetch_array($result))
             	{
             		?>
             		<h1>Product Information Data</h1>
             		<form action="" method="POST">
             			<input type="text" name="pid" value="<?php echo $row['id'] ?>"/><br>
             			<input type="text" name="pname" value="<?php echo $row['name'] ?>"/><br>
             			<input type="text" name="ppri" value="<?php echo $row['price'] ?>"/><br>

                              <input type="text" name="pbrand" value="<?php echo $row['brand'] ?>"/><br>

                              <input type="text" name="pquan" value="<?php echo $row['quantity'] ?>"/><br>
             		</form>
             		<?php
             	}
             }
            ?>

      </center>
</body>
</html>