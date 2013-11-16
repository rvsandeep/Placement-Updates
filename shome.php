
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
<body>
<h2>Student Home</h2>
<br>
<h3>
<ul>
<li><a href ="scompanyreg.php">Register for companies</a></li>
<br><br><br>
<li><a href ="scompanyregstatus.php">Registration Status</a></li>
<br><br><br>
<li><a href ="sdetailsadd.php">Update Details</a></li>
<br><br><br>
</body>
</html>
