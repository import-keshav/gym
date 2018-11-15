<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://localhost/gym/css/login.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="http://localhost/gym/javascript/login.js"></script>
	</head>
	<body>
		<div class="container-fluid top-bar">
			<form method="post" action="#">
				<div class="row">
					<div class="col-md-5">
						<img src="http://localhost/gym/images/logo-magic.png" class="logo">
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-2">
						<p class="login_text">username or email</p>
						<input type="text" class="login_box" name="username" placeholder="username or email">
					</div>
					<div class="col-md-2">
						<p class="login_text">Password</p>
						<input type="text" class="login_box" name="password" placeholder="Password">
					</div>
					<div class="col-md-1">
						<input type="submit" value="Login" class="login_button">
					</div>
				</div>
			</form>
		</div>
		<div class="container-fluid bottom">
			<div class="container-fluid signup_template" id="signup_template_1">
				<form method="post" action="#">
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
									<input type="text" class="name_input_box" placeholder="Name" name="name" id='1' oninput="name_method()" onfocusout="confirm_name()">
									<p class="error" id="11"></p>
								</div>
							</div>
							<div class="row" style="height: 40px; position: relative; left: -10px;">
								<div class="col-md-12">
									<input type="text" class="name_input_box" placeholder="email" name="email" id='3' oninput="email_method()">
									<p class="error" id="33"></p>
								</div>
							</div>
							<div class="row" style="height: 40px; position: relative; left: -10px;">
								<div class="col-md-12">
									<input type="text" class="name_input_box" placeholder="Mobile Number" id="7" oninput="mobile_method()">
									<p class="error" id="mobile_no"></p>
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
									<div class="select_arrow  drop down-arrow"></div>
									<p class="error" id="not_fill_1"></p>
								</div>
							</div>
							<div class="row" style="height: 40px; position: relative; left: -10px;">
								<div class="col-md-12">
									<input type="reset" value="Reset" class="reset_button"><input type="button" value="Next" class="next_button" id="next_button_1" onclick="go_template_2()"> 
								</div>
							</div>
							<div class="row" style="height: 40px; position: relative; left: -10px;">
								<div class="col-md-12">
									<input type="button" class="small_dot_button" id="dot_1_1"><input type="button" class="small_dot_button" id="dot_2_1"><input type="button" class="small_dot_button" id="dot_3_1"> 
								</div>
							</div>
						</div>
					</div>
			</div>
			<div class="container-fluid signup_template" id="signup_template_2">
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
								<input type="text" class="name_input_box" placeholder="Date Of Birth (YYYY / MM / DD) " name="date" id='4' oninput="date_method()" style="margin-top: 10px;">
								<p class="error" id="44"></p>
							</div>
						</div>
						<div class="row" style="height: 40px; position: relative; left: -10px;">
							<div class="col-md-12">
								<input type="text" class="name_input_box" placeholder="Body Mass Index ( BMI )" name="bmi" id='5' oninput="bmi_method()" style="margin-top: 10px;">
								<p class="error" id="55"></p>
							</div>
						</div>
						<div class="row" style="height: 40px; position: relative; left: -10px;">
							<div class="col-md-12">
								<input type="text" class="name_input_box" placeholder="Address" id="6" style="margin-top: 10px;">
								<p class="error" id="not_fill_2"></p>
							</div>
						</div>
						<div class="row" style="height: 40px; position: relative; left: -10px; margin-top: 30px;">
							<div class="col-md-12">
								<input type="reset" value="Reset" class="reset_button"><input type="button" value="Next" class="next_button" id="next_button_2" onclick="go_template_3()"> 
							</div>
						</div>
						<div class="row" style="height: 40px; position: relative; left: -10px;">
							<div class="col-md-12">
								<input type="button" class="small_dot_button" id="dot_1_2"><input type="button" class="small_dot_button" id="dot_2_2"><input type="button" class="small_dot_button" id="dot_3_2"> 
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid signup_template" id="signup_template_3">
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
									<input type="text" class="name_input_box" placeholder="Username " style="margin-top: 20px;" oninput="username_method()" id="username_box" required>
									<p class="error" id="username_error"></p>
								</div>
							</div>
							<div class="row" style="height: 40px; position: relative; left: -10px; margin-top: 30px;">
								<div class="col-md-12">
									<input type="password" class="name_input_box" placeholder="Password" name="bmi" id='password_box' oninput="password_method()" required>
									<p class="error" id="password"></p>
								</div>
							</div>
							<div class="row" style="height: 40px; position: relative; left: -10px; margin-top: 30px;">
								<div class="col-md-12">
									<input type="reset" value="Reset" class="reset_button"><input type="submit" value="Next" class="next_button" id="submit_button"> 
								</div>
							</div>
							<div class="row" style="height: 40px; position: relative; left: -10px;">
								<div class="col-md-12">
									<input type="button" class="small_dot_button" id="dot_1_3"><input type="button" class="small_dot_button" id="dot_2_3"><input type="button" class="small_dot_button" id="dot_3_3"> 
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<script>
					document.getElementById("dot_2_1").style.background = "#0074D9";
					document.getElementById("dot_3_1").style.background = "#0074D9";
					//document.getElementById("signup_template_2").style.visibility = "hidden";
					//document.getElementById("signup_template_3").style.visibility = "hidden";
			</script>
		</div>
	</body>
</html>
