<link type = "text/css" rel='stylesheet' href= "css/jqueryui.css"/>
<script src="js/jquery.js"></script>
<script src="js/jqueryui.js"></script>
<script src="header.js"></script>

<div class = "header">
	<div class = "right_div">
		<span>
			<?php
				if ( $_SESSION["username"] == "" ){
					echo "<strong><a href = 'login.php'>Log In</a></strong> or <strong><a href = 'register.php'>Register</a></strong>";
				} else{
					echo "Hello, " .$_SESSION["first"];
					echo "! - <strong><a href = 'logout.php'>Log Out</a></strong></a>";
				}	
			?>
		</span>
	</div>
	
	<ul id = "menu">
		<li><a href = "index.php">Home</a></li>
		<li><a href = "about.php">About Us</a></li>
		<li><a href = "contact.php">Contact</a></li>
		<li><a href = "shop.php">Shop</a></li>
		<li><a href = "faq.php">FAQ</a></li>
		<li><a href = "cart.php">Cart</a></li>
		<?php
			if($_SESSION["username"]!= ""){
				echo "<li><a href = 'account.php'>Account</a></li>";
			}
			if($_SESSION["permission"] == "admin"){
				echo "<li><a href = 'admin.php'>Admin</a></li>";
			}
		?>
	</ul>
</div>
