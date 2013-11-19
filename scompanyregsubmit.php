

<!DOCTYPE html>
<html>

<head>
	<title>Register for companies </title>

				<style>
			@import url(http://fonts.googleapis.com/css?family=Ubuntu:400,700);
			body {
			
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			.container > header h1,
			.container > header h2 {
				color: #000;
				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
}

		</style>

<?php

	session_start();
	require_once("includes/connection.php");
	require_once("includes/functions.php");
	require_once("navbar.html");
	
// Query the database for the username and password
	global $connection;

	$uid = $_SESSION["uid"];
	$usn = $_SESSION["usn"];



?>

<body>
	<div class="container">
	<div class="jumbotron">
<h1>Registeration Process</h1>

<br>
<?php 
$query = "INSERT INTO registered VALUES ('".$_GET['code']."','$usn')";

			$result = mysqli_query($connection,$query);
			if ($result) {
				echo "<p>Registration Completed<p>";
			} else {
				echo "<p>Registration could not be completed.<p>";
			}

?>
</div>
</div>
</body>
</html>
