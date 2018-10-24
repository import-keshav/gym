<html>
	<head>
		<title>About</title>
		<link rel="stylesheet" href="http://localhost/gym/css/about.css">
	</head>
	<body bgcolor="001f3f">
		<div class="top">
			<img src="http://localhost/gym/images/logo-magic.png" class="logo-image" onclick="location.href='http://localhost/gym/php/home.php'">
			<input type="submit" class="top-button" value="logout"  onclick="location.href='http://localhost/gym/php/logout.php'">
			<input type="submit" class="top-button" value="help" onclick="location.href='http://localhost/gym/php/help.php'">
			<input type="submit" class="top-button" value="home" onclick="location.href='http://localhost/gym/php/home.php'">
		<div>
		<div class="bottom">
			<div class="container" id="1">
				<div class="stay-fit">
					<p><span class="stay">STAY</span><span class="fit">FIT </span></p>
				</div>
				<div class="made-by">
					<p><span class="made-by">made by @import-keshav<span></p>
				</div>
			</div>
			<script>
				var container = document.getElementById("1");
				var id = setInterval(frame,5);
				var y=500;
				var x = 0;
				container.style.top = 500 + 'px';
				container.style.left = 0 + 'px';
				function frame()
					{
						if (y == 0 || x==400)
							{
								container.style.transition= "transform 1s linear";
								container.style.transform-origin= "top left";
								container.style.transform-style= "preserve-3D";
								container.style.transform = "rotate(240deg)";
								clearInterval(id);
							}
						else
							{
								y--; 
								x++;
      					container.style.top = y + 'px';
      					container.style.left = x + 'px';  
    					}
    			}
    		container.style.transform = "rotate(360deg)";
			</script>
		</div>
	<body>
</html>
