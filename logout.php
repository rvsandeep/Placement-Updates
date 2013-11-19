<?php
	session_start();
	require_once("includes/functions.php");
	require_once("includes/connection.php");
	global $connection;
	session_unset();
	session_destroy();
	redirect_to("login.php");
?>