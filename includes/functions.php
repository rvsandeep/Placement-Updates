<?php
function redirect_to( $location = NULL ) {
	if ($location != NULL) {
		header("Location: {$location}");
		exit;
	}
}
function uauthenticate(){
	if(empty($_SESSION["uid"]))
	{
		echo "Access Denied.";
		exit();
	}
	if($_SESSION["cred"]!=0)
	{
		echo "Access Denied.";
		session_destroy();
		exit();
	}


}

function aauthenticate(){
	if(empty($_SESSION["uid"]))
	{
		echo "Access Denied.";
		exit();
	}
	if($_SESSION["cred"]!=1)
	{
		echo "Access Denied.";
		session_destroy();
		exit();
	}


}
?>