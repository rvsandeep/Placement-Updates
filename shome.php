
<?php
	session_start();
	require_once("includes/connection.php");
	require_once("includes/functions.php");
	require_once("navbar.html");
	
// Query the database for the username and password
	global $connection;
	$uid = $_SESSION['uid'];

	$query = "SELECT * FROM studentdetails where uid = $uid";
	$result = mysqli_query($connection,$query);
if (mysqli_num_rows($result) ==0)
	redirect_to("sdetailsadd.php");

?>

<!DOCTYPE html>
<html>
		<head>
			<TITLE> Student Home</TITLE>
		</head>

<body>
	<div class="container">
	<header>
		<div class="jumbotron">
<h1>Student Home</h1>
  <p>Register yourself for campus placements</p>
</div>
<br>
</header>
<div class = "container" style= "width:600px;">
<a href ="scompanyreg.php"><button type="button" class="btn btn-primary btn-lg btn-block">Register For Companies</button></a></li>
<br>
<a href ="scompanyregstatus.php"><button type="button" class="btn btn-success btn-lg btn-block">Registration Status</button></a></li>
<br>
<a href ="sdetailsadd.php"><button type="button" class="btn btn-primary btn-lg btn-block">Update Details</button></a></li>
<br>
</div>
</body>
</html>
