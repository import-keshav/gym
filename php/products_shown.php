<!DOCTYPE html>
<html>
	<head>
		<title>Products</title>
		
		<!-- Bootstrap Files-->
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<!-- My files -->
		<script src="http://localhost/gym/javascript/product_shown.js"></script>
		<link rel="stylesheet" href="http://localhost/gym/css/product_shown.css">

		<!-- Jquery File -->
		<script type="text/javascript" src="http://localhost/gym/javascript/jquery.js"></script>

	</head>
	<body>
		<div class="container-fluid">

			<!-- Top NavBar -->
			<div class="row top-bar">

				<!-- Logo Image -->
				<div class="col-md-3">
					<img src="http://localhost/gym/images/logo-magic.png" class="logo-image" onclick="go_home()">
				</div>

				<!-- SearchBar -->
				<div class="col-md-6">
					<input type="text" class="search-bar" placeholder="Search..." onkeypress="search_products(event)" id="search_values">
					<img src="http://localhost/gym/images/search.jpeg" class="search_icon" onclick="search_products(99)">
					<!--<gcse:search enableAutoComplete="true" class="search-bar"></gcse:search>-->
				</div>

				<!-- Top Buttons -->
				<div class="col-md-3">
					<input type="button" value="My profile" class="top_bar_buttons">
					<input type="button" value="Cart" class="top_bar_buttons">
					<input type="button" value="More" class="top_bar_buttons">
				</div>

			</div>
		</div>

			<!-- Bottom screen -->
		<div class="container-fluid">
			<div class="row" style="position: fixed;">
				<div class="col-md-3">
					<div class="left_menu">
						<div class="row" style="border-bottom:1px solid grey;">
							<div class="col-md-12">
								<span class="filter_text">Filters</span>
							</div>
						</div>
						<div class="row" style="border-bottom:1px solid grey;">
							<div class="col-md-12">
								<span class="categories_text">categories</span>
								<span class="categories_text">categories</span>
								<span class="categories_text">Food</span>
							</div>
						</div>
						<div class="row" style="border-bottom:1px solid grey;">
							<div class="col-md-12">
								<span class="categories_text">PRICE</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-9">
				</div>
			</div>
		</div>
	</body>
</html>