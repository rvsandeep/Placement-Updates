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
		REGISTER | Placement-Updates
	</title>
</head>
<body>
<h2>Registration Form</h2>
<br><br>
";

		$username = $_POST['username'];
		$password = $_POST['password'];
		$query = "SELECT uid, username ";
		$query .= "FROM userlogin ";
		$query .= "WHERE username = '{$username}' ";
		$query .= "LIMIT 1";
		$result_set = mysqli_query($connection,$query);

		if (mysqli_num_rows($result_set) == 1) {
			echo "User already exist</br>Enter a different username";
			redirect_to("register.php");
		} else {
			$hashed_password = sha1($password);
			$cred = 0;
			$query = "INSERT INTO userlogin VALUES (0,'{$username}', '{$hashed_password}' , {$cred})";
			$result = mysqli_query($connection,$query);
			if ($result) {
				echo "<p>The user was successfully created.<br><br> You can login now.<br><br> <a href='login.php'>Login</a></br><p>";
			} else {
				echo "<p>The user could not be created.<br><br>  Try Again.<br><br>  <a href='register.php'>Register</a></br></p>";
				
			}
		}
echo "
</body>
</html>";

?>