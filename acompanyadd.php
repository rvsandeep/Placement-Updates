<?php

	session_start();
	require_once("includes/connection.php");
	require_once("includes/functions.php");
aauthenticate();
  require_once("anavbar.html");

// Query the database for the username and password
	global $connection;

	?>

<html>
<head>
	
  		<title>Add Company</title>
	<script type="text/javascript">

function checkdate(input){
var validformat=/^\d{2}\/\d{2}\/\d{4}$/ //Basic check for format validity
var returnval=false
if (!validformat.test(input.value))
alert("Invalid Date Format. Please correct and submit again.")
else{ //Detailed check for valid date ranges
var monthfield=input.value.split("/")[0]
var dayfield=input.value.split("/")[1]
var yearfield=input.value.split("/")[2]
var dayobj = new Date(yearfield, monthfield-1, dayfield)
if ((dayobj.getMonth()+1!=monthfield)||(dayobj.getDate()!=dayfield)||(dayobj.getFullYear()!=yearfield))
alert("Invalid Day, Month, or Year range detected. Please correct and submit again.")
else
returnval=true
}
if (returnval==false) input.select()
return returnval
}

</script>

  	<link rel="stylesheet" href="Align.css" type="text/css" />
			<style>
			@import url(http://fonts.googleapis.com/css?family=Ubuntu:400,700);
			body {
			
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			h1,h3,
			h2 {
				color: #000;
				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
}

		</style>
</head>
<body>
<div class="container">
	
	<div class="jumbotron">
<h1>Add Company</h1>
<h3><i>Add details of a company visiting for placements</i></h3>
</div>
<hr>
<form name="theForm" id="theForm" method="post" action="acompanyaddsubmit.php">
<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Company Details</h3>
  </div>
  <div class="panel-body">
  
<div class="control-group">
<label for="cname"> Company Name: </label>
<input type="text" name="cname" id="cname"  data-rules="required" class="validate form-control" tabindex="1">
    <p class="help-block"></p>
</div>

<div class="control-group">
<label for='deadline' >Deadline:</label>
<input type='text' name='deadline' id='deadline'  maxlength="50" tabindex="1"/>
    <p class="help-block"></p>
</div>

<div class="control-group">
<label for='vdate' >Visit Date (Tests):</label>
<input type='text' name='vdate' id='vdate' class="form-control" maxlength="50" tabindex="1" />
    <p class="help-block"></p>
</div>

<div class="control-group">
<label for='idate' >Interviews Date:</label>
<input type='text' name='idate' id='idate'   class="form-control" maxlength="50" tabindex="1"/>
    <p class="help-block"></p>
</div>
</div></div>

<hr>
<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Academic Requirements</h3>
  </div>
  <div class="panel-body">
  

<div class="control-group">
<label for='10' >Minimum 10th percentile:</label>
<input type='text' name='10' id='10'  data-rules="required" class="validate form-control" maxlength="15" tabindex="2"/>
    <p class="help-block"></p>
</div>

<div class="control-group">
<label for='12' >Minimum 12th/PUC Percentile:</label>
<input type='text' name='12' id='12' data-rules="required" class="validate form-control"  maxlength="15" tabindex="3"/>
    <p class="help-block"></p>
</div>

<div class="control-group">
<label for='Dip' >Minimum Diploma Score:(NA if not applicable)<br></label>
<input type='text' name='dip' id='dip'  data-rules="required" class="validate form-control" maxlength="15" tabindex="4"/>
    <p class="help-block"></p>
</div>
</div></div>

<hr>

<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">CGPA Requirements</h3>
  </div>
  <div class="panel-body">
  

<div class="control-group">
<label for='cgpa' >CGPA:</label>
<input type='text' name='cgpa' id='cgpa' data-rules="required" class="validate form-control"  maxlength="15" tabindex="5"/>
    <p class="help-block"></p>
</div>

<div class="control-group">
<label for='back' >Max number of backlogs:<br></label>
<input type='text' name='back' id='back' data-rules="required" class="validate form-control"  maxlength="15" tabindex="6"/>
    <p class="help-block"></p>
</div>
</div></div>
<hr>

<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Other Details</h3>
  </div>
  <div class="panel-body">
  

<div class="control-group">
<label for='salary' >Salary:</label>
<input type='text' name='salary' data-rules="required" class="validate form-control" id='salary' maxlength="15" tabindex="7"/>
    <p class="help-block"></p>
</div>

<div class="control-group">
<label for='selection' >Selection Process</label><br>
<textarea rows="5" cols="20" name='selection'  data-rules="required" class="validate form-control" id='selection' tabindex="8"> </textarea>
    <p class="help-block"></p>
</div>

<div class="control-group">
<label for='docs' >Documents to carry:</label><br>
<textarea rows="5" cols="20" name='docs' data-rules="required" class="validate form-control" id='docs' tabindex="9"> </textarea>
    <p class="help-block"></p>
</div>

<div class="control-group">
<label for='note' >Other Note(s):</label><br>
<textarea rows="5" cols="20" name='note' class="validate form-control" id='note' tabindex="10"> </textarea>
    <p class="help-block"></p>
</div>
</div></div>
<input type="submit" class="btn btn-info btn-block"value="Add company" tabindex="11" onSubmit="return checkdate(this.vdate)">
</form>
</div>
</body>
</html>
