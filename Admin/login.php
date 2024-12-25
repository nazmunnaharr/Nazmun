<!DOCTYPE html>
<html>
<head>
	<title>this is a login page</title>
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
			width: 40%;
			height: 5%
			border: 1px;
			border-radius: 5px;
			padding: 8px 15px 8px 15px;
			margin: 10px 0px 15px 0px;
			box-shadow: 1px 1px 2px 1px grey;
			text-align: center;
		}
		.cen
		{
			width: 600px;
			height: 400px;
			border: 1px solid red;
			margin-top: 90px;
			background-color: lightgreen;
		}
		p
		{
			color: darkblue ;
		}
	</style>
</head>
<body>
	
	<center>
		<div class="cen">
      <h2>Login form</h2>
      <form action="valid.php" method="post">
      	<label>Enter Your Job Id:</label>
      	<input type="text" name="jid" placeholder="JOB ID"><br>
      	<label>Enter Your First Name:</label>
      	<input type="text" name="fname" placeholder="Your First name"><br>
      	<!--<label>Enter Your Email:</label>
      	<input type="text" name="email" placeholder="Enter Email"><br>  --->
      	<label>Your Password:</label>
      	<input type="password" name="password" placeholder="Email Password"><br>
      	<input type="submit" name="btn" value="Login">
      	<p><h2><i>If you are not register member please <a href="registration.php">Register Here</a></i></h2></p>
      </form>
  </div>
</center>

</body>
</html>