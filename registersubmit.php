<html>
<head>
<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        
<link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
		
	<title>
		REGISTER | Placement-Updates
	</title>

		<style>
			@import url(http://fonts.googleapis.com/css?family=Ubuntu:400,700);
			body {
			
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			.container > header h1,
			.container > header h3 {
				color: #000;
				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
}

		</style>

</head>
<body>
	<div class="container">
	<header>
<h1>Registration Process:</h1>

<br><br>
<h1>
<?php
	session_start();
	require_once("includes/connection.php");
	require_once("includes/functions.php");
// Query the database for the username and password
	global $connection;
	


		$username = $_POST['username'];
		$password = $_POST['password'];
		$query = "SELECT uid, username ";
		$query .= "FROM userlogin ";
		$query .= "WHERE username = '{$username}' ";
		$query .= "LIMIT 1";
		$result_set = mysqli_query($connection,$query);

		if (mysqli_num_rows($result_set) == 1) {
			echo "User already exist</br>Enter a different username";
			//redirect_to("register.php");
			echo " and try Again.<br><br>  <a href='register.php'>Register</a></br></p>";
				
		} else {
			$hashed_password = sha1($password);
			$cred = 0;
			$query = "INSERT INTO userlogin VALUES (0,'{$username}', '{$hashed_password}' , {$cred})";
			$result = mysqli_query($connection,$query);
			if ($result) {
				echo "<p>The user was successfully created.<br><br> You can login now.<br><br> <a href='login.php'>Login</a></br><p>";
			} else {
				echo "<p>The user could not be created.<br><br> Please Try Again.<br><br>  <a href='register.php'>Register</a></br></p>";
				
			}
		}
echo "</h1>
</header>
</div>
</body>
</html>";

?>