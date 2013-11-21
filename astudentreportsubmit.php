

<!DOCTYPE html>
<html>

<head>
	<title>Registration Lists</title>

<?php

	session_start();
	require_once("includes/connection.php");
	
	require_once("includes/functions.php");
	aauthenticate();

// Query the database for the username and password
	global $connection;

	$uid = $_SESSION["uid"];



?>

<body>
<?php 
$rows = "";
$query = "SELECT * from registered,studentdetails where registered.usn = studentdetails.usn and registered.code='".$_GET['code']."'";
$result = mysqli_query($connection,$query);
	while ($db_field = mysqli_fetch_array($result,MYSQLI_ASSOC))
{

			$rows.= "<tr>
			<td>".$db_field['fullname']."</td>
			<td>".$db_field['usn']."</td>
			<td>".$db_field["email"]."</td>
			<td>".$db_field["contact"]."</td>
			</tr>";			

}


	if($rows=="")
	echo "<h3> No student found. </h3> ";

else
	echo '<center>
	<table border=2 width=75%>
	<tr>
		<th colspan=2 width=100%><center>
			<h1>R.V.COLLEGE OF ENGINEERING</h1>
			<h3>
			(Autonomous Institution Affiliated to VTU)<br>
			Bangalore-59</h3></center>
		</th>
	</tr>

	<tr>
		<th colspan=2><h2> Company Registration List</h2></th>
	</tr>
	<tr>
		<th><h3>Company: '.$_GET["code"].'</h3></th>
		<th><h3>Visitdate: '.$_GET["vdate"].'</h3></th>
	</tr>
	</table>

<br>
<table border = "border" cellpadding="8" width="75%" style="text-align:center;">
	<tr>
			<th>Student Name</th>
			<th>USN</th>
			<th>Email</th>
			<th>Contact</th>		
	</tr>
	'.$rows.'
</table></center>';

?>

</body>
</html>
