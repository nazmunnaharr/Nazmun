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
			width: 65%;
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
			height: 800px;
			border: 1px solid red;
			margin-top: 50px;
			background-color: lightgreen;
		}
	
	</style>
</head>
<body>
	<center>
		<div class="center">
	<h2>Registration page</h2>
	<form action="regis.php" method="post">
     <table>
     	<tr>
	<td>Job_Id: </td>
	<td><input type="text" name="jid"></td>
</tr>
     	<tr>
	<td>First Name: </td>
	<td><input type="text" name="fname"></td>
</tr>
<tr>
	<td>Last Name: </td>
	<td><input type="text" name="lname"></td>
</tr>
<tr>
	<td>Email: </td>
	<td><input type="email" name="email"></td>
</tr>
<tr>
	<td>Password: </td>
	<td><input type="password" name="password"></td>
</tr>
<tr>
	<td>Mobile: </td>
	<td><input type="text" name="mob"></td>
</tr>
<tr>
	<td>Job Title: </td>
	<td><input type="text" name="job"></td>
</tr>
<tr>
	<td>Address: </td>
    <td><textarea cols="15" rows="10" name="adds"></textarea></td>
</tr>

<tr>
	<td colspan="2" align="center"><input type="submit" name="btn" value="Register"></td>
</tr>
<tr>
	<td colspan="2">
	<p><h2><i>If you are register member please <a href="login.php">Login Here</a></i></h2></p>
</td></tr>	
</table>
</form>
</div>
</center>

</body>
</html>