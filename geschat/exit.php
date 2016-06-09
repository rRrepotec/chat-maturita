<?php
	session_start();
	$_SESSION['accessoadmin']="";
	$_SESSION['admin']="";
	$_SESSION['accesso']="123456789";
	header("location: http://chatmaturita.altervista.org/home.php");
?>