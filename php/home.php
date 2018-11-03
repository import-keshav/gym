<?php
	session_start();
	if($_SESSION['check']==NULL)
			{
?>

<html>
	<head>
		<title>Home</title>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://localhost/gym/css/home.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<!-- Logo -->
				<div class="navbar-header">
					<img src="http://localhost/gym/images/logo-magic.png" class="logo">
				</div>
				<!-- Menu Items -->
				<div>
					<ul class="nav navbar-nav">
						<li class="active-2"><a herf="#"><span class="navbar-items">Home</span></a></li>
						<li><a herf="#"><span class="navbar-items">Products</span></a></li>
					</ul>
					<!-- profile drop down -->
						<li class="dropdown">
							
						<li><a herf="#"><span class="navbar-items">Profile</span></a></li>
				</div>
				<!-- 
			</div>
		</nav>
	</body>
</html>

<?php
		}
	elseif($_SESSION['check']=='logged-in')
		{
			$username = $_SESSION['username'];
?>

<?php
	}
?>
