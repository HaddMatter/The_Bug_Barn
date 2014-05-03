<link type = "text/css" rel='stylesheet' href= "css/jqueryui.css"/>
<script src="js/jquery.js"></script>
<script src="js/jqueryui.js"></script>
<script src="header.js"></script>

<div class = "header">
	<div class = "right_div">
		<span class = "no_border">
			<?php
				if ( $_SESSION["username"] == "" ){
					echo "<strong><a href = 'login.php'class = 'no_border'>Log In</a></strong class = 'no_border'> or <strong><a href = 'register.php' class = 'no_border'>Register</a></strong>";
				} else{
					echo "Hello, " .$_SESSION["first"];
					echo "! - <strong><a href = 'logout.php' class = 'no_border'>Log Out</a></strong></a>";
				}	
			?>
		</span>
	</div>
	
	<ul id = "menu">
		<li><a href = "index.php" class = "no_border">Home</a></li>
		<li><a href = "about.php" class = "no_border">About Us</a></li>
		<li><a href = "contact.php" class = "no_border">Contact</a></li>
		<li><a href = "shop.php" class = "no_border">Shop</a></li>
		<li><a href = "faq.php" class = "no_border">FAQ</a></li>
		<li><a href = "cart.php" class = "no_border">Cart</a></li>
		<?php
			if($_SESSION["username"]!= ""){
				echo "<li><a href = 'account.php' class = 'no_border'>Account</a></li>";
			}
			if($_SESSION["permission"] == "admin"){
				echo "<li><a href = 'admin.php' class = 'no_border'>Admin</a></li>";
			}
		?>
	</ul>
</div>
