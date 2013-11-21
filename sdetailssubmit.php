<?php
	session_start();
	require_once("includes/connection.php");
	require_once("includes/functions.php");uauthenticate();

		require_once("navbar.html");

// Query the database for the username and password
	global $connection;
	echo "
<html>
<head>
	<title>
		Student Details
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
<div class='container'>
	<div class='jumbotron'>
<h1>Student Information</h1>

";
		$usn = $_POST['usn'];
		$uid = $_SESSION["uid"];
		$fname = $_POST['fname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
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
		$sem8 = 0;
		$cgpa = $_POST['cgpa'];
		$back = $_POST['back'];

		/*echo "<br>{$usn}<br>".
					$uid.'<br>'.
					$fname.'<br>'.
					$email.'<br>'.
					$phone.'<br>'.
					$tenth.'<br>'.
					$twelth.'<br>'.
					$diploma.'<br>'.
					$sem1.'<br>'.
					$sem2.'<br>'.
					$sem3.'<br>'.
					$sem4.'<br>'.
					$sem5.'<br>'.
					$sem6.'<br>'.
					$sem7.'<br>'.
					$cgpa.'<br>'.
					$back.'<br>';
*/
		$query = "SELECT uid ";
		$query .= "FROM studentdetails ";
		$query .= "WHERE uid = ".$_SESSION["uid"]." ";
		$query .= "LIMIT 1";
		$result_set = mysqli_query($connection,$query);

		if (mysqli_num_rows($result_set) == 1) {
			$db_field = mysqli_fetch_array($result_set,MYSQLI_ASSOC);
		
			$query ="UPDATE studentdetails SET 
					usn='{$usn}',
					fullname='{$fname}',
					email='{$email}',
					contact='{$phone}',
					tenth='{$tenth}',
					twelth='{$twelth}',
					diploma='{$diploma}',
					sem1={$sem1},
					sem2={$sem2},
					sem3={$sem3},
					sem4={$sem4},
					sem5={$sem5},
					sem6={$sem6},
					sem7={$sem7},
					cgpa={$cgpa},
					backlogs={$back} WHERE uid={$uid}
					";
		} else {


			$query = "INSERT INTO studentdetails VALUES ('{$usn}',{$uid},
														'{$fname}','{$email}',
														'{$phone}','{$tenth}',
														'{$twelth}','{$diploma}',
														{$sem1},{$sem2},
														{$sem3},{$sem4},
														{$sem5},{$sem6},
														{$sem7},{$cgpa},{$back})";
			
		}
		$result = mysqli_query($connection,$query);
		if ($result) {
			echo "<h3>The user details was successfully updated.</h3>";
		} else {
			echo "<h3>The details was not updated.Try Again.</h3>";
		}
echo "</div>
</body>
</html>";

?>