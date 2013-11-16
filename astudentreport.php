

<!DOCTYPE html>
<html>

<head>
	<title>Company Status</title>

<?php

	session_start();
	require_once("includes/connection.php");
	require_once("includes/functions.php");
// Query the database for the username and password
	global $connection;

	$query = "SELECT * FROM companydetails";
	$result = mysqli_query($connection,$query);
	$rows = "";
	while ($db_field = mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
				$rows.= "<tr>
			<td>".$db_field['code']."</td>
			<td>".$db_field["visitdate"]."</td>
			<td><button onclick= '

			window.location.assign(\"astudentreportsubmit.php?code=".$db_field['code']."&vdate=".$db_field['visitdate']."\");
		

			'>Get Report</button></td>
	</tr>";
	}



?>

<body>
<h2>Company Registration Status</h2>
<?php

if($rows=="")
	echo "<h3> No company found. </h3>" ;

else
	echo '
<table border = "border" cellpadding="6">
	<tr>
			<th>Company Name</th>
			<th>Visit Date/Interview Date</th>
			<th>Get Report</th>
	</tr>
	'.$rows.'
</table>';


echo "<h3> Back to <a href=\"ahome.php\">menu</a></h3>"
?>	

</body>
</html>
