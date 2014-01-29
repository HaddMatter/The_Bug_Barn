<html>
	<head>
		<link type = "text/css" rel = "stylesheet" href = "stylesheet.css"/>
		<link rel='stylesheet' type='text/css' href= "css/jqueryui.css"/>
		<script src="js/jquery.js"></script>
		<script src="js/jqueryui.js"></script>
		<script src="header.js"></script>
	</head>
	
	<body>
		<div class = "header">
			<div class = "right_div">
				
					<?php
						if ( $_SESSION["username"] == "" ){
							echo "<p class = 'right_separator'><strong><a href = 'login.php'>Log In</a></strong> or <strong><a href = 'register.php'>Register</a></strong></p>";
						} else{
							echo "<p class = 'right_separator'>Hello, <strong><a href = 'account.php'>" .$_SESSION["first"]. "</a></strong></p>";
						}	
					?> 
			</div>
			<div class = "right_div">
				<?php
					if ( $_SESSION["username"] != "" ){
						echo "<p class = 'right_separator'><strong><a href = 'logout.php'>Log Out</a></strong></a></p>";
					}
				?>
			</div>
			
			<ul id = "menu">
				<li><a href = "index.php">home</a></li>
				<li><a href = "about.php">About Us</a></li>
				<li><a href = "contact.php">Contact</a></li>
				<li><a href = "shop.php">Shop</a></li>
				<li><a href = "faq.php">FAQ</a></li>
				<li><a href = "cart.php">Cart</a></li>
				<?php
					if($_SESSION["permission"] == "admin"){
						echo "<li><a href = 'admin.php'>Admin</a></li>";
					}
				?>
			</ul>
		</div>
	</body>
</html>
