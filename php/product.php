<html>
	<head>
		<title>Products</title>
		<link rel="stylesheet" href="http://localhost/gym/css/product.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script type="text/javascript" src="http://localhost/gym/javascript/product.js"></script>
	<head>
	<body>
	  <div class="top">
	    <img src="http://localhost/gym/images/logo-magic.png" class="logo-image" onclick="go_home()">
	    <select class="select-box">
	      <option value="all">All</option>
        <option value="saab">Saab</option>
        <option value="opel">Opel</option>
        <option value="audi">Audi</option>
	    </select>
	    <input type="text" class="search-bar" placeholder="Search..">
	    <i class="fa fa-search search-icon"></i>  
	  </div>
	  <div class="bottom" id="bottom">
	    <div class="first_template">
	     <div class="arrow_left_container" onclick="change_background_image_towards_left()">
	      <div class="arrow_left">
	      </div>
	     </div>
	     <div class="arrow_right_container" onclick="change_background_image_towards_right()">
	      <div class="arrow_right">
	      </div>
	     </div>
	    </div>
	  </div>
	</body>
</html>
