<?php
	session_start();
	if($_SESSION['check']==NULL)
			{
?>

<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" href="http://localhost/gym/css/home.css">
	</head>
	<body>
			<div class="top">
					<!-- <div class="notice">
					</div> -->
					<img src="http://localhost/gym/images/logo-magic.png" class="logo-image">
					<input type="submit"  class="button" value="Help">
					<input type="submit"  class="button" value="About" onclick="location.href='http://localhost/gym/php/about.php'">
					<input type="submit" class="button" value="SignUp" onclick="location.href='http://localhost/gym/php/signup.php'">
					<input type="submit" class="button" value="Login" onclick="location.href='http://localhost/gym/php/login.php'">
					<input type="submit"  class="button" value="Products" onclick="location.href='http://localhost/gym/php/product.php'">
			</div> <!-- top -->
			<div class="bottom" >
				<div class="box-3">
					<div class="box-3-txt">
						<center><p>BE ADDICTED TO CRUSHING YOUR GOALS</p><center>
					</div> <!-- box-3-txt -->
				</div>	<!-- box-3 -->
				<div class="box-2">
					<div class="box-2-txt">
						<center><p>CHANGE YOURSELF AND TRY YOUR WORKPUT AT OUR GYM !</p><center>
					</div> <!-- box-2-txt -->
				</div> <!-- box-2 -->
				<div class="box-1">
					<div class="box-1-txt">
						<center><p>ARE YOU READY TO CHANGE YOURSELF ?</p><center>
					</div> <!-- box-2-txt -->
				</div>  <!-- box-2 -->
			</div> <!-- bottom -->
	<body>
</html>

<?php
		}
	elseif($_SESSION['check']=='logged-in')
		{
			$username = $_SESSION['username'];
?>

<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" href="http://localhost/gym/css/home.css">
	</head>
	<body bgcolor="001f3f">
		<div class="top-login">
			<img src="http://localhost/gym/images/logo-magic.png" class="logo-image-2" onclick="location.href='http://localhost/gym/php/home.php'">
			<input type="submit"  class="home-button" value="Products" onclick="location.href='http://localhost/gym/php/product.php'">
			<input type="submit"  class="home-button" value="Blogs" onclick="location.href='http://localhost/gym/php/help.php'">
			<input type="submit"  class="home-button" value="DietPlan" onclick="location.href='http://localhost/gym/php/help.php'">
			<input type="submit"  class="home-button" value="About" onclick="location.href='http://localhost/gym/php/about.php'">
			<input type="submit"  class="home-button" value="Help" onclick="location.href='http://localhost/gym/php/help.php'">
			<div class="username-box">
			
				<p><span class="username">Keshav</span></p>
			</div>
		</div>
		<div class="bottom" >
				<div class="box-3">
					<div class="box-3-txt">
						<center><p>BE ADDICTED TO CRUSHING YOUR GOALS</p><center>
					</div> <!-- box-3-txt -->
				</div>	<!-- box-3 -->
				<div class="box-2">
					<div class="box-2-txt">
						<center><p>CHANGE YOURSELF AND TRY YOUR WORKPUT AT OUR GYM !</p><center>
					</div> <!-- box-2-txt -->
				</div> <!-- box-2 -->
				<div class="box-1">
					<div class="box-1-txt">
						<center><p>ARE YOU READY TO CHANGE YOURSELF ?</p><center>
					</div> <!-- box-2-txt -->
				</div>  <!-- box-2 -->
			</div> <!-- bottom -->
	<body>
</html>
<?php
	}
?>
