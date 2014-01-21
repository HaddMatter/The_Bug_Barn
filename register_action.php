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
		<title>The Bug Barn - Thank you!</title>
	</head>
	
	<body>	
		<?php 
			require_once("header.php");
			require_once("functions.php");
			require_once("classes.php");
			
			$required = array("username", "password", "confirm", "first", "last", "email");
		
			$error_code = check_reg($required);
			switch($error_code){
				case 0:
					echo "<h1>Congratulations, " .$_POST["first"]. "! Your account has been created!</h1>";
					$user = new user;
					$user->create();
					break;
				case 1:
					echo "<h1>Oops! Please fill in all the fields and try again!</h1><p><a href = 'register.php' style = 'color: green; text-align: center;'>Go Back!</a></p>";
					break;
				case 2:
					echo "<h1>Oops! Please make sure your password contains at least one number and is at least 8 characters long! Please try again!</h1><p><a href = 'register.php' style = 'color: green; text-align: center;'>Go Back!</a></p>";
					break;
				case 3: 
					echo "<h1>Oops! Please make sure your passwords match and try again!</h1><p><a href = 'register.php' style = 'color: green; text-align: center;'>Go Back!</a></p>";
					break;
				case 4:
					echo "<h1>" .$_POST[email]. " is not a valid email address. Please try again!</h1><p><a href = 'register.php' style = 'color: green; text-align: center;'>Go Back!</a></p>";
					break;
				default:
					echo "Oops! there seems to be an error. Please contact site administrator.";
			}
		?>
		
		<?php
			require_once("footer.php");
		?>
	</body>
</html>