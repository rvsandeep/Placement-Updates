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
		Admin Details
	</title>
</head>
<body>
<h2>Student Information</h2>
<br><br>
";
		$cname = $_POST['cname'];
		$deadline = $_POST['deadline'];
		$vdate = $_POST['vdate'];
		$idate = $_POST['idate'];
		
		$tenth = $_POST['10'];
		$twelth = $_POST['12'];
		$diploma = $_POST['dip'];

		$cgpa = $_POST['cgpa'];
		$back = $_POST['back'];

		$salary = $_POST['salary'];
		$selection = $_POST['selection'];
		$docs = $_POST['docs'];
		$note = $_POST['note'];
		

		/*echo '<br>'.$cname.'<br>'.
			$deadline.'<br>'.
			$vdate.'<br>'.
			$idate.'<br>'.	
			$tenth.'<br>'.
			$twelth.'<br>'.
			$diploma.'<br>'.
			$cgpa.'<br>'.
			$back.'<br>'.
			$salary.'<br>'.
			$selection.'<br>'.
			$docs.'<br>'.
			$note.'<br>
		';*/


		$query = "INSERT INTO  companydetails VALUES ('$cname','$vdate','$idate','$deadline','$tenth','$twelth','$diploma',$cgpa,$back,'$salary','$selection','$docs','$note')";
		$result = mysqli_query($connection,$query);
			if ($result) {
				echo "<p>The company was successfully added.<br><br> <a href='ahome.php'>Back to Menu</a></br><p>";
			} else {
				echo "<p>The company could not be added.<br><br>  Try Again.<br><br>  <a href='ahome.php'>Back to Menu</a></br></p>";
				
			}
echo "
</body>
</html>";

?>