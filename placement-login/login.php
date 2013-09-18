<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Login Page</title>
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="style.css" />
		<!--style>
			@import url(http://fonts.googleapis.com/css?family=Ubuntu:400,700);
			body {
				background: #563c55 url(Wallpapers-room_com___simple_wall_glass_by_lassekongo83_1920x1200.jpg) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			.container > header h1,
			.container > header h2 {
				color: #fff;
				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
}

		</style-->
    </head>
    <body>
        <div class="container">
		
			<!-- Codrops top bar -->
            <div class="codrops-top">
                <span class="right">
			</span>
            </div><!--/ Codrops top bar -->
			
			<header>
			
				<h1><strong>Placement Registration</strong></h1>
				<h2>RVCE Placements</h2>

				<div class="support-note">
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>
				
			</header>
			
			<section class="main">
				<form method="post" action="home.php" class="form-3">
				    <p class="clearfix">
				        <label for="email">Email</label>
				        <input type="text" name="email" id="email" placeholder="Email Address">
				    </p>
				    <p class="clearfix">
				        <label for="pass">Password</label>
				        <input type="password" name="pass" id="pass" placeholder="Password"> 
				    </p>
				    <p class="clearfix">
				        <input type="checkbox" name="remember" id="remember">
				        <label for="remember">Remember me</label>
				    </p>
				    <p class="clearfix">
				        <input type="submit" name="submit" value="Sign in">
				    </p>
				     <p class="clearfix">
				        <a href="register.php">Signup</a>
				    </p>  
				</form>​          
			</section>
			
        </div>
    </body>
</html>