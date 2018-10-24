<?php
	session_start();
	
	$_SESSION['check']=NULL;
	
	session_destroy();
	
	header("location:http://localhost/gym/php/home.php");
?>
