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
			$_SESSION["cred"]=0;
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
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
        <script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        
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
        <div class="container">
        	<br>
        	<div class="jumbotron">
				<h1><strong>Placement Registration System</strong></h1>
				<h2>RVCE Placements</h2>
		</div>
			
			
				<?php if($invalid!="")		
				echo'
				<div class="alert alert-danger alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <p style=\'font-size:20px;\'><strong>Oops!</strong> Invalid details entered</p></div>
			';?>
					<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Login</h3>
  </div>
  <div class="panel-body">


				<form method="post" action="index.php" class="form-3">
				    
				        <p style="font-size:22px;">Email</p>
				        <input type="text" name="username" id="username" class="form-control" placeholder="Email Address">
				    	<br>
				        <p style="font-size:22px;">Password</p>
				        <input type="password" name="password" class="form-control" id="password" placeholder="Password"> 
	</div> 
				    <center><br>
<input type="submit" style="width:24.5%"class="btn btn-success"></form> 
<a href="register.php"><button style="width:25%" class="btn btn-danger">Sign Up</button>
				      <br><br>
			</center>
       
    </body>
</html>