<html>
	<head>
		
	</head>
	
	<body>
		<div class = "header">
			<img/>
			<div class = "right_div"><p class = "right_no_separator"><a href = "cart.php"><strong>View cart</strong></a></p></div>
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
			<img/>
			<div class = "menu">
				<div class = "menu_item">
					<a href = "index.php"><p>Home</p></a>
				</div>
				<div class = "menu_item">
					<a href = "about.php"><p>About Us</p></a>
				</div>
				<div class = "menu_item">
					<a href = "contact.php"><p>Contact</p></a>
				</div>
				<div class = "menu_item">
					<a href = "shop.php"><p>Shop</p></a>
				</div>
				<div class = "menu_item">
					<a href = "faq.php"><p>FAQ</p></a>
				</div>
				<?php
					if($_SESSION["permission"] == "admin"){
						echo "<div class = 'menu_item'>";
							echo "<a href = 'admin.php'><p>Admin</p></a>";
						echo "</div>";					
					}
				?>
			</div>
		</div>
	</body>
</html>