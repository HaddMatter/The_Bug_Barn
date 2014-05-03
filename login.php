<?php
	session_start();
	if(!isset($_SESSION["count"])){
		$_SESSION["count"] = 0;
	} else{
		$_SESSION["count"]++;
	}
?>

<html>
	<head>
		<link type = "text/css" rel = "stylesheet" href = "stylesheet.css"/>
		<title>The Bug Barn - Login</title>
	</head>
	
	<body>
		<?php
			require_once ("header.php");
		?>
	
		
		<div class = "form">
			<div class="container">
				<form action="login_action.php" method="post">
					<label>Username:</label><input class="no_border" type="text" name="username"><br />
					<label>Password:</label><input class="no_border" type="password" name="password"><br />
					<p><input type="submit" /></p>
				</form>
			</div>
		
			<div class = "info">
					<p>Please remember that passwords must follow these rules:</p>
					<ul>
						<li>Passwords must be at least 8 letters long.</li>
						<li>Passwords must contain at least one number and one letter.</li>
						<li>Passwords are case sensitive.</li>
					</ul>
			</div>
		</div>
		
		<?php
			require_once ("footer.php");
		?>
	</body>
</html>