<?php
	session_start();
	require_once("includes/functions.php");
	require_once("includes/connection.php");

// Query the database for the username and password
	global $connection;
	$invalid = "";
	if (isset($_POST['username']) && isset($_POST['password'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$hashed_password = sha1($password);

		$query = "SELECT uid, username ";
		$query .= "FROM userlogin ";
		$query .= "WHERE username = '{$username}' ";
		$query .= "AND password = '{$hashed_password}' ";
		$query .= "LIMIT 1";

		$result_set = mysqli_query($connection,$query);
		if (mysqli_num_rows($result_set) == 1) {
			$db_field = mysqli_fetch_array($result_set,MYSQLI_ASSOC);
			$_SESSION["cred"]="0";
			$_SESSION["username"]=$username;
			$_SESSION["uid"] = $db_field["uid"];
			redirect_to("shome.php");
		}
	 else {
		$username = "";
		$password = "" ;
		$invalid = "<br> Invalid account details entered <br><br>";
	}
	}else{
		$invalid="";}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Login Page</title>
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
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
    </head>
    <body>
        <div class="container">
			<header>
			
				<h1><strong>Placement Registration</strong></h1>
				<h1>RVCE Placements</h1>
				<h1 style="color:red;"><?php echo "<br>".$invalid;?></h1>
				<div class="support-note">
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>
				
			</header>
			
			<section class="main">
				<form method="post" action="index.php" class="form-3">
				    <p class="clearfix">
				        <label for="username">Email</label>
				        <input type="text" name="username" id="username" placeholder="Email Address">
				    </p>
				    <p class="clearfix">
				        <label for="password">Password</label>
				        <input type="password" name="password" id="password" placeholder="Password"> 
				    </p><center>
				    <p class="clearfix">
				        <input type="submit" name="submit" value="Sign in">
				    </p><br>
				      <a href="register.php">To signup with email, click here</a></center>
				</form>​          
			</section>
			
        </div>
    </body>
</html>