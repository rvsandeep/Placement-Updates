<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Login Page</title>
    </head>
    <body>
	
			<header>
			
				<h1><strong>Placement Registration</strong></h1>
				<h2>RVCE Placements</h2>
				
			</header>

				<form method="post" action="home.php">
				    <p>
				        <label for="email">Email</label>
				        <input type="text" name="email" id="email" placeholder="Email Address">
				    </p>
				    <p>
				        <label for="pass">Password</label>
				        <input type="password" name="pass" id="pass" placeholder="Password"> 
				    </p>
				    <p>
				        <input type="checkbox" name="remember" id="remember">
				        <label for="remember">Remember me</label>
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
