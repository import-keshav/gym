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
		<script type="text/javascript" src="http://localhost/gym/javascript/jquery.js"></script>
	</head>
	<body>
		<div class="container-fluid top_bar">
			<div class="row ">
				<div class="col-md-11">
					<img src="http://localhost/gym/images/logo-magic.png" class="logo">
					<input type="button" value="Products" class="top_bar_buttons" onclick="location.href='http://localhost/gym/php/product.php'">
					<input type="button" value="Ask" class="top_bar_buttons" onclick="location.href='http://localhost/gym/php/ask.php'">
					<input type="button" value="Find" class="top_bar_buttons" onclick="location.href='http://localhost/gym/php/find.php'">
					<input type="button" value="Profile" class="top_bar_buttons" onclick="location.href='http://localhost/gym/php/profile.php'">
				</div>
				<div class="col-md-1" onclick="show_arrow_things()" id="2" style="height: 500px;">
					<div class="arrow" onclick="show_arrow_things()">
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row bottom">
				<div class="col-md-3 slide_panel_1">
					<div class="col-md-3 slide_panel_1_1">
						<div>
							<img src="http://localhost/gym/images/chat.jpeg" class="chat_logo">
						</div>
						<div>
							<img src="http://localhost/gym/images/search.jpeg" class="search_logo">
						</div>
						<div>
							<img src="http://localhost/gym/images/user-image.jpg" class="user_logo">
						</div>
						<div>
							<img src="http://localhost/gym/images/community.jpg" class="community_logo">
						</div>
					</div>
					<div class="col-md-9 slide_panel_1_2">
						<div class="row" >
							<div class="col-md-12">
								<span class="all_converstaions">ALL CONVERSATIONS</span><br>
							</div>
						</div>
						<div class="row" style="margin-top: 20px;">
							<div class="col-md-12">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-7 slide_panel_2">
					<div class=template></div>
				</div>
				<div class="col-md-2" >
					<span style="">bathla</span>
					<div class="arrow_things" id="1">
						<div style="height: 20px;">
							<span class="settings">Settings</span>
						</div>
						<hr>
						<div style="height: 20px">
							<span class="logout">Logout</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			$(function(){
				$("#1").hide();
			});
		</script>
	</body>
</html>
