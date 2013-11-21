<?php
	session_start();
	require_once("includes/connection.php");
	require_once("includes/functions.php");
aauthenticate();
	require_once("anavbar.html");

// Query the database for the username and password
	global $connection;
	echo "
<html>
<head>
	<title>
		Admin Details
	</title>

	<link rel='stylesheet' href='Align.css' type='text/css' />
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
}
		</style>

</head>
<body>
<div class=\"container\">
	<div class='jumbotron'>
<h1>Company Information</h1>
<br>
";
		$cname = $_POST['cname'];
		$deadline = $_POST['deadline'];
		$vdate = $_POST['vdate'];
		$idate = $_POST['idate'];
		
		$tenth = $_POST['10'];
		$twelth = $_POST['12'];
		$diploma = $_POST['dip'];

		$cgpa = $_POST['cgpa'];
		$back = $_POST['back'];

		$salary = $_POST['salary'];
		$selection = $_POST['selection'];
		$docs = $_POST['docs'];
		$note = $_POST['note'];
		

		/*echo '<br>'.$cname.'<br>'.
			$deadline.'<br>'.
			$vdate.'<br>'.
			$idate.'<br>'.	
			$tenth.'<br>'.
			$twelth.'<br>'.
			$diploma.'<br>'.
			$cgpa.'<br>'.
			$back.'<br>'.
			$salary.'<br>'.
			$selection.'<br>'.
			$docs.'<br>'.
			$note.'<br>
		';*/


		$query = "INSERT INTO  companydetails VALUES ('$cname','$vdate','$idate','$deadline','$tenth','$twelth','$diploma',$cgpa,$back,'$salary','$selection','$docs','$note')";
		$result = mysqli_query($connection,$query);
				if ($result) {
			echo "<h3>The company details was successfully updated.</h3>";
		} else {
			echo "<h3>The details was not updated.Try Again.</h3>";
		}
echo "</div></div>

</body>
</html>";

?>