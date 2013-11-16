<?php

	session_start();
	require_once("includes/connection.php");
	require_once("includes/functions.php");
// Query the database for the username and password
	global $connection;

	?>

<html>
<head>
	<script type="text/javascript" src="http://www.code.jquery.com/jquery-latest.js">
	</script>
</head>
<body>
<h2>Add Company</h2>
<hr>
<form method="post" action="acompanyaddsubmit.php">
<h2>Company Details: </h2><br>
<label for="cname"> Company Name: </label>
<input type="text" name="cname" id="cname" tabindex="1"> <br><br>

<label for='deadline' >Deadline:</label>
<input type='text' name='deadline' id='deadline' maxlength="50" tabindex="1"/><br><br>

<label for='vdate' >Visit Date (Tests):</label>
<input type='text' name='vdate' id='vdate' maxlength="50" tabindex="1"/><br><br>

<label for='idate' >Interviews Date:</label>
<input type='text' name='idate' id='idate' maxlength="50" tabindex="1"/><br><br>


<hr>
<h2>Acedemic Requirements:</h2><br>

<label for='10' >Minimum 10th percentile:</label>
<input type='text' name='10' id='10' maxlength="15" tabindex="7"/><br><br>

<label for='12' >Minimum 12th/PUC Percentile:</label>
<input type='text' name='12' id='12' maxlength="15" tabindex="8"/><br><br>

<label for='Dip' >Minimum Diploma Score:<br>(Type NA if not applicable)</label>
<input type='text' name='dip' id='dip' maxlength="15" tabindex="9"/><br><br>

<hr>
<h2>CGPA Requirements:</h2><br>

<label for='cgpa' >CGPA:</label>
<input type='text' name='cgpa' id='cgpa' maxlength="15" tabindex="17"/><br><br>

<label for='back' >Max number of backlogs:<br></label>
<input type='text' name='back' id='back' maxlength="15" tabindex="9"/><br><br>

<hr>
<h2>Other Details:</h2><br>

<label for='salary' >Salary:</label>
<input type='text' name='salary' id='salary' maxlength="15" tabindex="17"/><br><br>

<label for='selection' >Selection Process</label><br>
<textarea rows="5" cols="20" name='selection' id='selection' tabindex="6"> </textarea><br><br>

<label for='docs' >Documents to carry:</label><br>
<textarea rows="5" cols="20" name='docs' id='docs' tabindex="6"> </textarea><br><br>

<label for='note' >Other Note(s):</label><br>
<textarea rows="5" cols="20" name='note' id='note' tabindex="6"> </textarea><br><br>

<input type="submit" value="Register" tabindex="7">
</form>


<p>
</body>
</html>
