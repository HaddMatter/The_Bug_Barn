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
		<title>Neal's Roaches - Register</title>
	</head>
	
	<body>
		<?php require_once("header.php"); ?>
		
		<h1>Register for an account with us! It's quick and easy!</h1>
		<div class = "form">
			<div class="container">
				<form action="register_action.php" method="post">
					<label>Username:</label><input type="text" name="username"><br />
					<p></p>
					<label>Password:</label><input type="password" name="password"><br />
					<p></p>
					<label>Confirm Password:</label><input type="password" name="confirm"><br/>
					<p></p>
					<label>First Name:</label><input type="text" name="first"><br/>
					<p></p>
					<label>Last Name:</label><input type="text" name="last"><br/>
					<p></p>
					<label>Email Address:</label><input type="text" name="email"><br/>
					<p><input type="submit" /></p>
				</form>
			</div>
			<div class = "info">
				<p>Please remember that passwords must follow these rules:</p>
				<ul>
					<li>Passwords must be at least 8 letters long.</li>
					<li>Passwords must contain at least one number and one letter.</li>
				</ul>
			</div>
		</div>
		<?php
			require_once("footer.php");
		?>
	</body>
</html>