

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
	$query = "SELECT * FROM studentdetails where uid = $uid";
	$result = mysqli_query($connection,$query);
	$db_field = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$_SESSION["usn"] = $db_field["usn"];
	$usn = $_SESSION["usn"];
	$query = "SELECT * FROM registered where usn='$usn'";
	$result = mysqli_query($connection,$query);
	
$rows="";
	while ($db_field = mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
	
	$q2 = "SELECT * FROM companydetails where code='".$db_field['code']."'";
	$r2 = mysqli_query($connection,$q2);
$db_field2 = mysqli_fetch_array($r2,MYSQLI_ASSOC);
		$rows.= "<tr>";
		$rows.="
			<td>".$db_field2['code']."</td>
			<td>".$db_field2["visitdate"]."</td>
	</tr>";


	}



?>

<body>
<h2>Registration History for USN (<?php echo $usn ?>)</h2>
<?php

if ($rows == "")
{

	echo "<h3> No company found. </h3> ";

}

else
echo '

<br>
<table border = "border" cellpadding="6">
	<tr>
			<th>Company Name</th>
			<th>Visit Date/Interview Date</th>
	</tr>
	'.$rows.'
</table>
';
?>
<h3> Back to <a href="shome.php">menu</a></h3>	
</body>
</html>
