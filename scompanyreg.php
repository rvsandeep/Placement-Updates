

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
	$tenth = $db_field["tenth"];
	$twelth = $db_field["twelth"];
	$diploma = $db_field["diploma"];
	$_SESSION["usn"] = $db_field["usn"];
	
	if ($diploma == "NA")
	 $diploma = 100;
	if ($twelth == "NA")
	 $twelth= 100;

	

	$query = "SELECT * FROM companydetails";
	$result = mysqli_query($connection,$query);
	

	while ($db_field = mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
			$mintenth = $db_field["mintenth"];
	$mintwelth = $db_field["mintwelth"];
	$mindiploma = $db_field["mindiploma"];
	if ($mindiploma == "NA")
	 $mindiploma = 0;
	if ($twelth == "NA")
	 $mintwelth= 0;
	$rows = "";
	if($tenth >= $mintenth && $twelth >= $mintwelth && $diploma >= $mindiploma)
	{


	$q2 = "SELECT * FROM registered where usn='".$_SESSION["usn"]."' and code='".$db_field['code']."'";
	$r2 = mysqli_query($connection,$q2);

if (mysqli_num_rows($r2) == 1)
	continue;
	
		$rows.= "<tr>
			<td>".$db_field['code']."</td>
			<td>".$db_field["visitdate"]."</td>
			<td><button onclick= '

			window.location.assign(\"scompanyregsubmit.php?code=".$db_field['code']."\");
		

			'>Register</button></td>
	</tr>";
	}
	}



?>

<body>
<h2>Register For Companies</h2>
<h3>Companies are displayed based on eligibility</h3>
<br>
<table border = "border" cellpadding="6">
	<tr>
			<th>Company Name</th>
			<th>Visit Date/Interview Date</th>
			<th>Register</th>
	</tr>
	<?php echo $rows; ?>
</table>	
</body>
</html>
