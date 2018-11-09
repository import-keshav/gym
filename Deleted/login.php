<?php
	session_start();
	
	if($_SESSION['check']==NULL)
		{
?>
<html>
	<head>
		<title>login</title>
		<link rel="stylesheet" href="http://localhost/gym/css/login.css">
		<script>
			function validation()
				{
					var x=document.getElementById('1');
					var y=document.getElementById('2');
					if(x.value.length==0 || y.value.length==0)
						{
							alert("Enter all fields");
							return(false);
						}
					return(true);
				}
		</script>
	</head>	
	<body>
		<div class="top" >
					<input type="submit" class="home-button" value="Home" onclick="location.href='http://localhost/gym/php/home.php'">
					<input type="submit"  class="home-button" value="About" onclick="location.href='http://localhost/gym/php/about.php'">
					<input type="submit"  class="home-button" value="Help" onclick="location.href='http://localhost/gym/php/help.php'">
		</div>
		<div>
			<form class="login-form" onsubmit="return validation()" action="http://localhost/gym/php/validation.php" method="post">
				<div class="sign">
					Sign In
				</div>
				<div>
					<input type="text" class="login-box" placeholder="username or email" id="1" name="username">
				</div>
				<div>
					<input type="password" class="login-box" placeholder="password" id="2" name="password">
				</div>
				<div>
					<button type="submit" class="submit">SIGN IN</button>
				</div>
			</form>
		</div>
	</body>
</html>

<?php
		}
	elseif($_SESSION['check']=='wrong-password')
		{
?>
<html>
	<head>
		<title>login</title>
		<link rel="stylesheet" href="http://localhost/gym/css/login.css">
		<script>
			function validation()
				{
					var x=document.getElementById('1');
					var y=document.getElementById('2');
					if(x.value.length==0 || y.value.length==0)
						{
							alert("Enter all fields");
							return(false);
						}
					return(true);
				}
		</script>
	</head>	
	
	<body>
		<div class="top" >
					<input type="submit" class="home-button" value="Home" onclick="location.href='http://localhost/gym/php/home.php'">
					<input type="submit"  class="home-button" value="About" onclick="location.href='http://localhost/gym/php/about.php'">
					<input type="submit"  class="home-button" value="Help" onclick="location.href='http://localhost/gym/php/help.php'">
		</div>
		
		<div>
			<form class="login-form" onsubmit="return validation()" action="http://localhost/gym/php/validation.php" method="post">
				<div class="invalid-sign">
					Invalid
				</div>
				<div>
					<input type="text" class="invalid-login-box" placeholder="username or email" id="1" name="username">
				</div>
				<div>
					<input type="password" class="invalid-login-box" placeholder="password" id="2" name="password">
				</div>
				<div>
					<button type="submit" class="submit">SIGN IN</button>
				</div>
			</form>
		</div>
		
	</body>
	
</html>
<?php		
		}
?>	
