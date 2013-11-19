

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
	$query = "SELECT * FROM studentdetails where uid = $uid";
	$result = mysqli_query($connection,$query);
	$db_field = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$tenth = $db_field["tenth"];
	$twelth = $db_field["twelth"];
	$diploma = $db_field["diploma"];
	$cgpa = $db_field["cgpa"];
	
	$back = $db_field["backlogs"];
	
	$_SESSION["usn"] = $db_field["usn"];
	
	if ($diploma == "NA")
	 $diploma = 100;
	if ($twelth == "NA")
	 $twelth= 100;

	$rows = "";
	

	$query = "SELECT * FROM companydetails";
	$result = mysqli_query($connection,$query);
	$i =0;

	while ($db_field = mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
			$mintenth = $db_field["mintenth"];
	$mintwelth = $db_field["mintwelth"];
	$mindiploma = $db_field["mindiploma"];
	$mincgpa = $db_field["mincgpa"];
	$maxbacklogs = $db_field["maxbacklogs"];

	if ($mindiploma == "NA")
	 $mindiploma = 0;
	if ($twelth == "NA")
	 $mintwelth= 0;
	if($cgpa >= $mincgpa && $tenth >= $mintenth && $twelth >= $mintwelth && $diploma >= $mindiploma && $back <= $maxbacklogs)
	{


	$q2 = "SELECT * FROM registered where usn='".$_SESSION["usn"]."' and code='".$db_field['code']."'";
	$r2 = mysqli_query($connection,$q2);
if (mysqli_num_rows($r2) == 1)
	{
	continue;}
		$i=1;
		$rows.= "<tr>
			<td><h4>".$db_field['code']."</h4></td>
			<td><h4>".$db_field["visitdate"]."</h4></td>
			<td><h4><button class='btn btn-success' onclick= '

			window.location.assign(\"scompanyregsubmit.php?code=".$db_field['code']."\");
		

			'>Click to Register</button></h4></td>
	</tr>";
	}
	}


?>

<body>
	<div class="container">
	<div class="jumbotron">
<h1>Register For Companies</h1>
<i><h3>Companies are displayed based on eligibility</h3></i>

<?php

if($i==0)
	echo "<i><h3> No company found meeting the criteria</h3></i> </div></div>";

else
	echo '</div>
<br>
<table class="table table-striped" style="text-align:center;" border = "border">
	<tr>
			<td><h4>Company Name</h4></td>
			<td><h4>Visit Date/Interview Date</h4></td>
			<td><h4>Register</h4></td>
	</tr>
	'.$rows.'
</table></div>';
?>	
</body>
</html>
