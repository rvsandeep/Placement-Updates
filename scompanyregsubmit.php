

<!DOCTYPE html>
<html>

<head>
	<title>Register for companies </title>

<?php

	session_start();
	require_once("includes/connection.php");
	require_once("includes/functions.php");
// Query the database for the username and password
	global $connection;

	$uid = $_SESSION["uid"];
	$usn = $_SESSION["usn"];



?>

<body>
<h2>Register For Companies</h2>
<br>
<?php 
$query = "INSERT INTO registered VALUES ('".$_GET['code']."','$usn')";

			$result = mysqli_query($connection,$query);
			if ($result) {
				echo "<p>Registration Completed.<a href='shome.php'>Go back</a></br><p>";
			} else {
				
				echo "<p>Registration Could not be Completed.<a href='shome.php'>Go back</a></br><p>";
			}

?>

</body>
</html>
