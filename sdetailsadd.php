<?php
	session_start();
	require_once("includes/connection.php");
	require_once("includes/functions.php");uauthenticate();

	require_once("navbar.html");

// Query the database for the username and password
	global $connection;
	
	$query = "SELECT * ";
	$query .= "FROM studentdetails ";
	$query .= "WHERE uid = ".$_SESSION["uid"]." ";
	$query .= "LIMIT 1";
	$result_set = mysqli_query($connection,$query);

	$fname="";
	$usn="";
	$email="";
	$phone="";
	$tenth="";
	$twelth="";
	$diploma="";
	$sem1="";
	$sem2="";
	$sem3="";
	$sem4="";
	$sem5="";
	$sem6="";
	$sem7="";
	$cgpa="";
	$back="";

	if (mysqli_num_rows($result_set) == 1) {
		$db_field = mysqli_fetch_array($result_set,MYSQLI_ASSOC);
		$fname = $db_field["fullname"];;
		$usn = $db_field["usn"];
		$email = $db_field["email"];
		$phone = $db_field["contact"];
		$tenth = $db_field["tenth"];
		$twelth = $db_field["twelth"];
		$diploma = $db_field["diploma"];
		$sem1 = $db_field["sem1"];
		$sem2 = $db_field["sem2"];
		$sem3 = $db_field["sem3"];
		$sem4 = $db_field["sem4"];
		$sem5 = $db_field["sem5"];
		$sem6 = $db_field["sem6"];
		$sem7 = $db_field["sem7"];
		$cgpa = $db_field["cgpa"];
		$back = $db_field["backlogs"];
	}
	
?>

<html>
<head>
		<title>Update Details</title>
		<link rel="stylesheet" href="Align.css" type="text/css" />
			<style>
			@import url(http://fonts.googleapis.com/css?family=Ubuntu:400,700);
			body {
			
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			h1,
			 h3
			  {
				color: #000;
				text-shadow: 0 1px 1px rgba(0,0,0,0.7);

			
}

		</style>
</head>
<body>
	<div class="container">
	<div class="jumbotron">
<h1>Registration Form</h1>
<h3><i>Update student details</i></h3>
</div>
<form name="theForm" id="theForm" method="post" action="sdetailssubmit.php">

<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Personal Details</h3>
  </div>
  <div class="panel-body">
  
<div class="control-group">
<label for="usn"> <h4>USN: </h4></label>
<input type="text"  name="usn" id="usn"  data-rules="required|alpha_numeric" class="validate form-control" tabindex="1" value="<?php echo $usn;?>">
    <p class="help-block"></p>
</div>


<div class="control-group">
<label for="fname"><h4> Full Name: </h4></label><br>
<input type="text" name="fname" id="fname"  data-rules="required|alpha" class="validate form-control"  tabindex="1" value="<?php echo $fname;?>" >
    <p class="help-block"></p>
</div>

<div class="control-group">
<label for='email' ><h4>Email Address:</h4></label><br>
<input type='text' name='email' id='email' data-rules="required|valid_email" class="validate form-control"  maxlength="50" tabindex="2" value="<?php echo $email;?>">
    <p class="help-block"></p>
</div>

<div class="control-group">
<label for='phone' ><h4>Phone Number:</h4></label><br>
<input type='text' name='phone' id='phone'  data-rules="required" class="validate form-control" maxlength="15" tabindex="4" value="<?php echo $phone;?>" />
    <p class="help-block"></p>
</div>
</div>
</div>

<hr>


<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Previous Academics</h3>
  </div>
  <div class="panel-body">

<div class="control-group">
<label for='10' ><h4>10th percentile</h4></label>
<input type='text' name='10' id='10' data-rules="required" class="validate form-control"  maxlength="15" tabindex="6" value="<?php echo $tenth;?>" />
    <p class="help-block"></p>
</div>

<div class="control-group">
<label for='12' ><h4>12th/PUC Percentile</h4></label>
<input type='text' name='12' id='12' data-rules="required" class="validate form-control"  maxlength="15" tabindex="7" value="<?php echo $twelth;?>" />
    <p class="help-block"></p>
</div>

<div class="control-group">
<label for='dip' ><h4>Diploma Score (Type NA if not applicable)</h4></label>
<input type='text' name='dip' id='dip' data-rules="required" class="validate form-control"  maxlength="15" tabindex="8" value="<?php echo $diploma;?>" />
    <p class="help-block"></p>
</div>
</div>
</div>

<hr>

<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">RVCE Academic Details</h3>
  </div>
  <div class="panel-body">

<div class="control-group">
<label for='s1' ><h4>1st SEM</h4></label>
<input type='text' name='s1' id='s1' data-rules="required" class="validate form-control"  maxlength="15" tabindex="9" value="<?php echo $sem1;?>" />
    <p class="help-block"></p>
</div>

<div class="control-group">
<label for='s2' ><h4>2nd SEM</h4></label>
<input type='text' name='s2' id='s2' data-rules="required" class="validate form-control"  maxlength="15" tabindex="10" value="<?php echo $sem2;?>" />
    <p class="help-block"></p>
</div>

<div class="control-group">
<label for='s3' ><h4>3rd SEM</h4></label>
<input type='text' name='s3' id='s3'  data-rules="required" class="validate form-control" maxlength="15" tabindex="11" value="<?php echo $sem3;?>" />
    <p class="help-block"></p>
</div>

<div class="control-group">
<label for='s4' ><h4>4th SEM</h4></label>
<input type='text' name='s4' id='s4' data-rules="required" class="validate form-control"  maxlength="15" tabindex="12" value="<?php echo $sem4;?>" />
    <p class="help-block"></p>
</div>

<div class="control-group">
<label for='s5' ><h4>5th SEM</h4></label>
<input type='text' name='s5' id='s5' data-rules="required" class="validate form-control"  maxlength="15" tabindex="13" value="<?php echo $sem5;?>" />
    <p class="help-block"></p>
</div>

<div class="control-group">
<label for='s6' ><h4>6th SEM</h4></label>
<input type='text' name='s6' id='s6' data-rules="required" class="validate form-control" maxlength="15" tabindex="14" value="<?php echo $sem6;?>" />
    <p class="help-block"></p>
</div>

<div class="control-group">
<label for='s7' ><h4>7th SEM</h4></label>
<input type='text' name='s7' id='s7' data-rules="required" class="validate form-control"  maxlength="15" tabindex="15" value="<?php echo $sem7;?>" />
    <p class="help-block"></p>
</div>

<div class="control-group">
<label for='cgpa' ><h4>Current CGPA</h4></label>
<input type='text' name='cgpa' id='cgpa' data-rules="required" class="validate form-control"  maxlength="15" tabindex="16" value="<?php echo $cgpa;?>" />
    <p class="help-block"></p>
</div>

<div class="control-group">
<label for='back' ><h4>Backlogs</h4></label>
<input type='text' name='back' id='back' data-rules="required" class="validate form-control"  maxlength="15" tabindex="17" value="<?php echo $back;?>" />
    <p class="help-block"></p>
</div>
</div>
</div>
<center>
<input type="submit" class="btn btn-success" style="width:24%" value="Update Details" tabindex="18"> <input type="reset" class="btn btn-danger" style="width:25%" value="Reset" tabindex="18">
</center>

</form>
</div>
<p>
</body>
<script>
var $my_form =  $("#theForm")
$my_form.validate()
</script>
</html>
