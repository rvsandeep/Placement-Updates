

<!DOCTYPE html>
<html>

<head>
	<title>Registration Lists</title>

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
<h2>Registration Lists</h2>
<h3>Company: <?php echo $_GET["code"]?> </h3>
<h3>Visitdate: <?php echo $_GET["vdate"]?> </h3>
<br>
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
	echo '
<table border = "border" cellpadding="6">
	<tr>
			<th>Student Name</th>
			<th>USN</th>
			<th>Email</th>
			<th>Contact</th>		
	</tr>
	'.$rows.'
</table>';
		
echo "<h3> Back to <a href=\"ahome.php\">menu</a></h3>";

?>

</body>
</html>
