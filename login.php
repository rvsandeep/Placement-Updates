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
			$_SESSION["cred"]="0";
			$_SESSION["username"]=$username;
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
        <title>LOGIN | Placement-Updates</title>
    </head>
    <body>
	
				<h1><strong>Placement Login</strong></h1>
				<h2>RVCE Placements</h2>
				
				<p><?php echo $invalid;?></p>
				<form method="post" action="login.php">
				    <p>
				        <label for="username">Email Address</label>
				        <input type="text" name="username" id="username" placeholder="Email Address">
				    </p>
				    <p>
				        <label for="pass">Password</label>
				        <input type="password" name="password" id="password" placeholder="Password"> 
				    </p>
				    <p>
				        <input type="submit" name="submit" value="Sign in">
				    </p>
				     <p>
				        <a href="register.php">Signup</a>
				    </p>  
				</form>​          
    </body>
</html>
