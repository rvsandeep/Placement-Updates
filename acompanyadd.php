<?php

	session_start();
	require_once("includes/connection.php");
	require_once("includes/functions.php");
	require_once("navbar.html");

// Query the database for the username and password
	global $connection;

	?>

<html>
<head>
	<script type="text/javascript" src="http://www.code.jquery.com/jquery-latest.js">
	</script>
			<title>Add Company</title>
		<link rel="stylesheet" href="Align.css" type="text/css" />
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
	<div class="jumbotron">
<h2>Add Company</h2>
</div>
<hr>
<form name="theForm" id="theForm" method="post" action="acompanyaddsubmit.php">

<h2>Company Details: </h2><br>

<div class="control-group">
<label for="cname"> Company Name: </label>
<input type="text" name="cname" id="cname"  data-rules="required" class="validate" tabindex="1">
    <p class="help-block"></p>
</div>

<div class="control-group">
<label for='deadline' >Deadline:</label>
<input type='text' name='deadline' id='deadline' data-rules="required" class="validate"  maxlength="50" tabindex="1"/>
    <p class="help-block"></p>
</div>

<div class="control-group">
<label for='vdate' >Visit Date (Tests):</label>
<input type='text' name='vdate' id='vdate' maxlength="50" tabindex="1"/>
    <p class="help-block"></p>
</div>

<div class="control-group">
<label for='idate' >Interviews Date:</label>
<input type='text' name='idate' id='idate' maxlength="50" tabindex="1"/>
    <p class="help-block"></p>
</div>


<hr>
<h2>Acedemic Requirements:</h2><br>

<div class="control-group">
<label for='10' >Minimum 10th percentile:</label>
<input type='text' name='10' id='10'  data-rules="required" class="validate" maxlength="15" tabindex="7"/>
    <p class="help-block"></p>
</div>

<div class="control-group">
<label for='12' >Minimum 12th/PUC Percentile:</label>
<input type='text' name='12' id='12' data-rules="required" class="validate"  maxlength="15" tabindex="8"/>
    <p class="help-block"></p>
</div>

<div class="control-group">
<label for='Dip' >Minimum Diploma Score:<br>(Type NA if not applicable)</label>
<input type='text' name='dip' id='dip'  data-rules="required" class="validate" maxlength="15" tabindex="9"/>
    <p class="help-block"></p>
</div>

<hr>
<h2>CGPA Requirements:</h2><br>

<div class="control-group">
<label for='cgpa' >CGPA:</label>
<input type='text' name='cgpa' id='cgpa' data-rules="required" class="validate"  maxlength="15" tabindex="17"/>
    <p class="help-block"></p>
</div>

<div class="control-group">
<label for='back' >Max number of backlogs:<br></label>
<input type='text' name='back' id='back' data-rules="required" class="validate"  maxlength="15" tabindex="9"/>
    <p class="help-block"></p>
</div>

<hr>
<h2>Other Details:</h2><br>

<div class="control-group">
<label for='salary' >Salary:</label>
<input type='text' name='salary' id='salary' maxlength="15" tabindex="17"/>
    <p class="help-block"></p>
</div>

<div class="control-group">
<label for='selection' >Selection Process</label><br>
<textarea rows="5" cols="20" name='selection' id='selection' tabindex="6"> </textarea>
    <p class="help-block"></p>
</div>

<div class="control-group">
<label for='docs' >Documents to carry:</label><br>
<textarea rows="5" cols="20" name='docs' id='docs' tabindex="6"> </textarea>
    <p class="help-block"></p>
</div>

<div class="control-group">
<label for='note' >Other Note(s):</label><br>
<textarea rows="5" cols="20" name='note' id='note' tabindex="6"> </textarea>
    <p class="help-block"></p>
</div>

<input type="submit" value="Register" tabindex="7">
</form>
</div>

<p>
</body>
<script>
var $my_form =  $("#theForm")
$my_form.validate()
</script>
</html>
