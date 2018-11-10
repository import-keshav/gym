<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://localhost/gym/css/home.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="http://localhost/gym/javascript/home.js"></script>
		<script>
			function select_gender(){
				document.getElementById("select_gender").show();
			}
		</script>
	</head>
	<body>
		<div class="container-fluid top-bar">
			<form method="post" action="http://localhost/gym/php/product.php">
				<div class="row">
					<div class="col-md-5">
						<img src="http://localhost/gym/images/logo-magic.png" class="logo">
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-2">
						<p class="login_text">username or email</p>
						<input type="text" class="login_box" name="username" placeholder="username or email" required>
					</div>
					<div class="col-md-2">
						<p class="login_text">Password</p>
						<input type="text" class="login_box" name="password" placeholder="Password" required>
					</div>
					<div class="col-md-1">
						<input type="submit" value="Login" class="login_button">
					</div>
				</div>
			</form>
		</div>
		<div class="container-fluid bottom">
			<div class="container-fluid signup_template">
				<form method="post" action="http://localhost/gym/php/validation.php">
					<div class="row">
						<div class="col-md-4" style="padding:0px; margin:0px;">
							<img src="http://localhost/gym/images/fruits.jpg" class="img-fluid" style="max-width: 100%; height: 500%;">
						</div>
						<div class="col-md-8" >
							<div class="row">
								<div class="Col-md-12">
									<p class="create_account_text">Create an account</p>
								</div>
							</div>
							<div class="row" style="height: 40px; position: relative; margin-top: 30px; left: -10px;">
								<div class="col-md-12">
									<input type="text" class="name_input_box" placeholder="Name" name="name" id='1' oninput="name_method()" required>
									<p class="error" id="11"></p>
								</div>
							</div>
							<div class="row" style="height: 40px; position: relative; left: -10px;">
								<div class="col-md-12">
									<input type="text" class="name_input_box" placeholder="email" name="email" id='3' required oninput="email_method()">
									<p class="error" id="33"></p>
								</div>
							</div>
							<div class="row" style="height: 40px; position: relative; left: -10px;">
								<div class="col-md-12">
									<input type="text" class="name_input_box" placeholder="Mobile Number" required>
								</div>
							</div>
							<div class="row" style="height: 40px; position: relative; left: -10px;">
								<div class="col-md-12" id="select_gender">
									<span class="gender_text">Gender</span>
									<select class="gender_select_box">
										<option value="male">Male</option>
										<option value="female">Female</option>
										<option value="other">Other</option>
									</select>
									<div class="select_arrow" onclick="select_gender()"></div>
								</div>
							</div>
							<div class="row" style="height: 40px; position: relative; left: -10px;">
								<div class="col-md-12">
									<input type="reset" value="Reset" class="reset_button"><input type="submit" value="Next" class="next_button" id="submit_button"> 
								</div>
							</div>
							<div class="row" style="height: 40px; position: relative; left: -10px;">
								<div class="col-md-12">
									<input type="button" class="small_dot_button" id="dot_1"><input type="button" class="small_dot_button" id="dot_2"><input type="button" class="small_dot_button" id="dot_3"> 
								</div>
							</div>
							<script>
								document.getElementById("dot_2").style.background = "#0074D9";
								document.getElementById("dot_3").style.background = "#0074D9";
							</script>
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>