

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
			h1,
			h2 {
				color: #000;
				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}

			h4
			{

				text-align: center;
			}
			td,
			th,
			tr {
					text-align: center;
					font-size: 18px;
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
			<td><center>".$db_field2['code']."</center></td>
			<td><center>".$db_field2["visitdate"]."</center></td>
	</tr>";


	}



?>

<body>
<div class="container">

	<div class="jumbotron">
<h1>Registration History</h1>
<h2><i>USN (<?php echo $usn ?>)</i></h2>
<?php

if ($rows == "")
{

	echo "<h3> No company found. </h3></div>
 ";

}

else
echo '
</div>
<br>
<table class="table table-striped" border = "border" cellpadding="6">
	<tr>
			<th><h4>Company Name</h4></th>
			<th><h4>Visit Date</h4></th>
	</tr>
	'.$rows.'
</table>
';
?>
</div>
</body>
</html>
