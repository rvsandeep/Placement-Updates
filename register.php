
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
				<h2><i>Register yourself</i></h2>
		</div>
			
			
					<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Registration information</h3>
  </div>
  <div class="panel-body">


				<form method="post" action="registersubmit.php">
				    
				        <p style="font-size:22px;">Email</p>
				        <input type="text" name="username" id="username" class="form-control" placeholder="Email Address">
				    	<br>
				        <p style="font-size:22px;">Password</p>
				        <input type="password" name="password" class="form-control" id="password" placeholder="Password"> 
	</div> 
				    <center><br>
<input type="submit" style="width:24.5%"class="btn btn-success" value="Register"> <input type="reset" style="width:25%"class="btn btn-danger" value="Reset">

</form> 
				      <br><br>
			</center>
       
    </body>
</html>