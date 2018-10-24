<?php
	session_start();
	$user_id = $_POST['username'];
	$password = $_POST['password'];
	
	$link = mysqli_connect('localhost' , 'root' ,'ihawcwit@9643');
	mysqli_select_db($link , 'gym');
	
	$q = "select * from user_primary_info where (username='$user_id' or email='$user_id') and password='$password'";
	$result = mysqli_query($link , $q);
	
	$num = mysqli_num_rows($result);
	
	
	if($num == 1)
		{
			$_SESSION['check'] = 'logged-in';
			header('location:http://localhost/gym/php/home.php');
		}
	
	else
		{
			$_SESSION['check'] = 'wrong-password';
			header('location:http://localhost/gym/php/login.php');
		}
?>
