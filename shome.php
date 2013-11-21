
<?php
	session_start();
	require_once("includes/connection.php");
	require_once("includes/functions.php");uauthenticate();

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
		
				<style>
			@import url(http://fonts.googleapis.com/css?family=Ubuntu:400,700);
			body {
			
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			h1,
			h2 {
				color: #000;
				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
				
			}
</style>

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
