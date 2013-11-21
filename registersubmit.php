<html>
<head>
<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        
<link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
		
	<title>
		REGISTER | Placement-Updates
	</title>

		<style>
			@import url(http://fonts.googleapis.com/css?family=Ubuntu:400,700);
			body {
			
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}h1,h3 {
				color: #000;
				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
}

		</style>

</head>
<body>
	<br>
	<div class="container">
	<div class="jumbotron">
<h1>Registration Process:</h1>
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
			echo "<h3>User already exists</h3><a href='register.php' width=\"70%\"class='btn btn-danger btn-block btn-lg'>Click here to Retry";
			//redirect_to("register.php");
			echo "</a>";
				
		} else {
			$hashed_password = sha1($password);
			$cred = 0;
			$query = "INSERT INTO userlogin VALUES (0,'{$username}', '{$hashed_password}' , {$cred})";
			$result = mysqli_query($connection,$query);
			if ($result) {
			echo "<h3>User created</h3><a href='index.php' width=\"70%\"class='btn btn-success btn-block btn-lg'>Click here to login";
			//redirect_to("register.php");
			echo "</a>";
		
			} else {
			echo "<h3>User creation failed</h3><a href='register.php' width=\"70%\"class='btn btn-danger btn-block btn-lg'>Click here to Retry";
			//redirect_to("register.php");
			echo "</a>";
				
			}
		}
echo "
</div>
</div>
</body>
</html>";

?>