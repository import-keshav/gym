<?php
	session_start();
	$name = $_POST['name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$date = $_POST['date'];
	$gender = $_POST['gender'];
	$bmi = $_POST['bmi'];
	$password = $_POST['password'];
	
	$link = mysqli_connect('localhost' , 'root' ,'ihawcwit@9643');
	mysqli_select_db($link , 'gym');
	$q = "insert into user_primary_info values('$name' , '$username' , '$email' , '$date' , '$gender' , '$bmi' , '$password')";
	mysqli_query($link , $q);
	
	header('location:http://localhost/gym/php/login.php');
?>	
