<?php
function redirect_to( $location = NULL ) {
	if ($location != NULL) {
		header("Location: {$location}");
		exit;
	}
}
function authenticate(){
	if(empty($_SESSION["id"])||empty($_SESSION["username"]))
	{
		echo "Access Denied.";
		exit();
	}
	if($_SESSION["id"]!=1)
	{
		echo "Access Denied.";
		session_destroy();
		exit();
	}
}
?>