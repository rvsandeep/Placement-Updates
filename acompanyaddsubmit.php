<?php
	session_start();
	require_once("includes/connection.php");
	require_once("includes/functions.php");
	global $connection;
		echo "
<html>
<head>
	<title>
		Company Details
	</title>
</head>
<body>
<h2>Company Information</h2>
<br><br>
";	
	$code=$_POST['cname'];
	$visitdate=$_POST['vdate'];
	$interviewsdate=$_POST['idate'];
	$deadline=$_POST['deadline'];
	$mintenth=$_POST['10'];
	$mintwelth=$_POST['12'];
	$mindiploma=$_POST['dip'];
	$mincgpa=$_POST['cgpa'];
	$maxbacklogs=$_POST['back'];
	$ctc=$_POST['salary'];
	$procedur=$_POST['selection'];
	$documents=$_POST['docs'];
	$others=$_POST['note'];
	
	echo "<br>{$code}<br>".
			$visitdate.'<br>'.
			$interviewsdate.'<br>'.
			$deadline.'<br>'.
			$mintenth.'<br>'.
			$mintwelth.'<br>'.
			$mindiploma.'<br>'.
			$mincgpa.'<br>'.
			$maxbacklogs.'<br>';
			$ctc.'<br>'.
			$procedur.'<br>'.
			$documents.'<br>'.
			$others.'<br>'.
			
	$query = "SELECT * ";
	$query .= "FROM companydetails ";
	$query .= "WHERE code = '{$code}' ";
	$query .= "LIMIT 1";
	$result_set = mysqli_query($connection,$query);



	if (mysqli_num_rows($result_set) == 1) {
		$db_field = mysqli_fetch_array($result_set,MYSQLI_ASSOC);
		$query ="UPDATE companydetails SET 
				code='{$code}',
				visitdate='{$visitdate}',
				interviewsdate='{$interviewsdate}',
				deadline='{$deadline}',
				mintenth='{$mintenth}',
				mintwelth='{$mintwelth}',
				mindiploma='{$mindiploma}',
				mincgpa={$mincgpa},
				maxbacklogs={$maxbacklogs},
				ctc={$ctc},
				procedur={$procedur},
				documents={$documents},
				others={$others},
				";
	}else {
	
	$query = "INSERT INTO companydetails VALUES ('{$code}',{$visitdate},
												'{$interviewsdate}','{$deadline}',
												'{$mintenth}','{$mintwelth}',
												'{$mindiploma}','{$mincgpa}',
												'{$maxbacklogs}',{$ctc},
												{$procedur},
												{$documents},{$others},
			";
		}
		$result = mysqli_query($connection,$query);
		if ($result) {
			echo "<p>The details was successfully updated.<br><p>";
		} else {
			echo "<p>The details was not updated.Try Again.<br></p>";
		}
echo "
</body>
</html>";
	
?>