
<?php
	session_start();
	require_once("includes/connection.php");
	require_once("includes/functions.php");
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
			<link rel="stylesheet" type="text/css" href="assets\css\bootstrap.css" />
		</head>
<body>
<h2>Student Home</h2>
<br>
<h3>

<a href ="scompanyreg.php"><button type="button" class="btn btn-primary">Register For Companies</button></a></li>
<br><br><br>
<a href ="scompanyregstatus.php"><button type="button" class="btn btn-primary">Registration Status</button></a></li>
<br><br><br>
<a href ="sdetailsadd.php"><button type="button" class="btn btn-primary">Update Details</button></a></li>
<br><br><br>
</body>
</html>
