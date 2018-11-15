<?php
	session_start();
?>
<html>
	<head>
		<title>signup</title>
		<link rel="stylesheet" href="http://localhost/gym/css/signup.css">
		<script type="text/javascript" src="http://localhost/gym/javascript/signup.js"></script>
	</head>
	<body>
		<div class="top">
					<input type="submit"  class="home-button" value="Help" onclick="location.href='http://localhost/gym/php/help.php'">
					<input type="submit"  class="home-button" value="About" onclick="location.href='http://localhost/gym/php/about.php'">
					<input type="submit" class="home-button" value="Home" onclick="location.href='http://localhost/gym/php/home.php'">
		</div>
		<div >
			<form method="post" action="location.href='create.php">

				<center>
					<div class="block" align="center" id="signup_template">
						<div class="signup-text">
							Sign Up
						</div>
						<div>
							<input type="text" class="entry" placeholder="name" name="name" id='1' oninput="name_method()" required>
							<input type="text" class="entry" placeholder="username" name="username" required><br>
							<p class="error" id="11"></p>
						</div>
						<div>
							<input type="email" class="entry" placeholder="email" name="email" id='3' required oninput="email_method()">
							<input type="text" class="entry" placeholder="Mobile No." name="password" id="7" required oninput="check_mobile_num()" onfocusout="checked_mobile_num()"><br>
							<p class="error" id="33"></p>
							<p id="mobile_no" class="error"></p>
						</div>
						<div>
							<input type="password" class="entry" placeholder="Address" name="password" id="8" required oninput="" onfocusout="confirm_password()">
							<input type="text" class="entry" placeholder="Birth Date YYYY/MM/DD" name="date" id='4' oninput="date_method()" required><br>
								<p id="Address" class="error"></p>
								<p class="error" id="44"></p>
						</div>
						<div class="select" required>
								Gender
								<select class="select-box" name="gender">
									<option value="Male" selected>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Male</option>
									<option value="Female">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Female</option>
									<option value="Other">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Other</option>
								</select>
						</div>
						<div>
							<input type="password" class="entry" placeholder="password" name="password" id="6" required oninput="password_method()" onfocusout="confirm_password()">
							<input type="text" class="entry" placeholder="Body-Mass-Index" name="bmi" id='5' oninput="bmi_method()" required><br>
							<p id="password" class="error"></p>
							<p class="error" id="55"></p>
						</div>
						<div>
							<input type="reset"  class="submit"  value="Reset">&nbsp;&nbsp;<input type="submit"  id="submit_button" class="submit"  value="SIGN UP">
						</div>
					</div>
				</center>
			</form>
		</div>
	</body>
</html>
