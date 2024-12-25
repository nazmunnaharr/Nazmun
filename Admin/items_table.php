<!DOCTYPE html>
<html>
<head>
	<title>this is a registration page</title>
	<style type="text/css">
		body
		{
			background-color: whitesmoke;
			background-image: url(image.jpg);
			background-size: cover;
	background-position: center;
		}
		input
		{
			width: 80%;
			height: 5%
			border: 1px;
			border-radius: 5px;
			padding: 8px 15px 8px 15px;
			margin: 10px 0px 15px 0px;
			box-shadow: 1px 1px 2px 1px grey;
		}
		.center
		{
			width: 600px;
			height: 450px;
			border: 1px solid red;
			margin-top: 50px;
			background-color: lightgreen;
		}
	
	</style>
</head>
<body>
	
    <a href="home.php">Back</a>

	<center>
		<div class="center">
	<h2>Add item page</h2>
	<form action="add_item.php" method="post">
     <table>
     	<tr>
	<td>Pro_Id: </td>
	<td><input type="text" name="pid"></td>
</tr>
     	<tr>
	<td>Product Name: </td>
	<td><input type="text" name="pname"></td>
</tr>
<tr>
	<td>Product Price: </td>
	<td><input type="text" name="ppri"></td>
</tr>
<tr>
	<td>Brand : </td>
	<td><input type="text" name="pbrand"></td>
</tr>
<tr>
	<td>Product Quantity: </td>
	<td><input type="text" name="pquan"></td>
</tr>
<tr>
	<td colspan="2" align="center"><input type="submit" name="btn" value="Add to Items"></td>
</tr>
<!--<tr>
	<td colspan="2">
	<p><h2><i>If you are register member please <a href="login.php">Login Here</a></i></h2></p>
</td></tr>	-->
</table>
</form>
</div>
</center>

</body>
</html>