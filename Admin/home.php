<?php
session_start();
if (!isset($_SESSION['username']))
{
	header('location:login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="emo.css">
</head>
<body>
	<div class="head">
		<div class="first">
			   <table border="1" class="table">
      	<tr>
      		<td><h3><a href="show.php">show all itam</a></h3></td>
           </tr>
           <tr>
          <td><h3><a href="user_info.php">User Info</a></h3></td>
           </tr>
           <tr>
          <td><h3><a href="order_info.php">Order Info</a></h3></td>
           </tr>
      	<tr>	<td><h3><a href="items_table.php">Add Items</a></h3></td>
            </tr>
            <tr>
          <td><h3><a href="#">search List</a></h3></td>
           </tr>
           <tr>
      	
                  <td><h3><a href="logout.php">Log Out</a></h3></td>
            </tr>
         
      	
      </table>
	
		</div>
		<div class="snd">
	<center>
     <h1><b><i> Welcome <?php echo $_SESSION['username']; ?> </i></b></h1>
 </center>
</div>
</div>
     </body>
</html>