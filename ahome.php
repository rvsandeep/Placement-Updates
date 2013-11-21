<?php
	session_start();
	require_once("includes/connection.php");
	require_once("includes/functions.php");
	require_once("navbar.html");
	
// Query the database for the username and password
	global $connection;
	$uid = $_SESSION['uid'];

?>

<!DOCTYPE html>
<html>
		<head>
			<TITLE> Student Home</TITLE>
		</head>
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

<body>
	<div class="container">
	<header>
		<div class="jumbotron">
<h1>Admin Home</h1>
  <p>Manage company lists and generate student reports</p>
</div>
<br>
</header>
<div class = "container" style= "width:600px;">
<a href ="acompanyadd.php"><button type="button" class="btn btn-success btn-lg btn-block">Add Company</button></a></li>
<br>
<a href ="astudentreport.php"><button type="button" class="btn btn-primary btn-lg btn-block">Generate Student Report</button></a></li>
<br>
</div>
</body>
</html>
