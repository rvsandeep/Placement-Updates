<?php
	session_start();
	require_once("includes/connection.php");
	require_once("includes/functions.php");
// Query the database for the username and password
	global $connection;
	echo "
<html>
<head>
	<title>
		Student Details
	</title>
</head>
<body>
<h2>Student Information</h2>
<br><br>
";
		$fname = $_POST['fname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$tenth = $_POST['10'];
		$twelth = $_POST['12'];
		$diploma = $_POST['dip'];
		$sem1 = $_POST['s1'];
		$sem2 = $_POST['s2'];
		$sem3 = $_POST['s3'];
		$sem4 = $_POST['s4'];
		$sem5 = $_POST['s5'];
		$sem6 = $_POST['s6'];
		$sem7 = $_POST['s7'];
		$cgpa = $_POST['cgpa'];
		$back = $_POST['back'];

		echo '<br>'.$fname.'<br>'.
			$email.'<br>'.
			$phone.'<br>'.
			$address.'<br>'.	
			$tenth.'<br>'.
			$twelth.'<br>'.
			$diploma.'<br>'.
			$sem1.'<br>'.
			$cgpa.'<br>'.
			$back.'<br>'.
			$sem7.'<br>
		';
echo "
</body>
</html>";

?>