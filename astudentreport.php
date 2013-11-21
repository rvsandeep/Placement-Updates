

<!DOCTYPE html>
<html>

<head>
	<title>Company Status</title>
<style type="text/css">

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
h4 {text-align: center;}

</style>
<?php

	session_start();
	require_once("includes/connection.php");
	require_once("includes/functions.php");

	aauthenticate();
	require_once("anavbar.html");

// Query the database for the username and password
	global $connection;

	$query = "SELECT * FROM companydetails";
	$result = mysqli_query($connection,$query);
	$rows = "";
	while ($db_field = mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
				$rows.= "<tr>
			<td><h4>".$db_field['code']."</h4></td>
			<td><h4>".$db_field["visitdate"]."</h4></td>
			<td><center><button class='btn btn-success' onclick= '

			window.open(\"astudentreportsubmit.php?code=".$db_field['code']."&vdate=".$db_field['visitdate']."\",\"_tab\");
		

			'>Get Report</button></center></td>
	</tr>";
	}



?>

<body>
	<div class="container">
<div class="jumbotron">
<h1>Generate Student Report</h1>
<h2>List of students registered for companies</h2>
</div>
<?php

if($rows=="")
	echo "<h3> No company found. </h3>" ;

else
	echo '
<table class="table table-striped" border = "border" cellpadding="6">
	<tr>
			<th><h4>Company Name</h4></th>
			<th><h4>Visit Date/Interview Date</h4></th>
			<th><h4>Get Report</h4></th>
	</tr>
	'.$rows.'
</table>

</div>
</body>
</html>';
