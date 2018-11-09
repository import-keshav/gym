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
		<script src="http://localhost/gym/javascript/product.js"></script>
		<script>

		</script>
	</head>
	<body>
		<div class="container-fluid top-bar">
			<form method="post" action="http://localhost/gym/php/validation.php">
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
				<div class="row">
					<div class="col-md-4">
					</div>
					<div class="col-md-8">
						<div class="row">
							<div class="Col-md-12">
								<p class="create_account_text">Create an account</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="text" class="name_input_box" placeholder="Name">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="text" class="name_input_box" placeholder="email">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="text" class="name_input_box" placeholder="username">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="text" class="name_input_box" placeholder="Mobile Number">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="password" class="name_input_box" placeholder="Password">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>