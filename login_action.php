<?php
	session_start();
	if(!isset($_SESSION["count"])){
		$_SESSION["count"] = 0;
	} else{
		$_SESSION["count"]++;
	}
	
	$_SESSION["username"] = $_POST["username"];
?>

<html>
	<head>
		<link type = "text/css" rel = "stylesheet" href = "stylesheet.css"/>
		<title>The Bug Barn - Welcome!</title>
	</head>
	
	<body>
		<?php
			require_once("header.php");
			require_once("functions.php");
			require_once("classes.php");
			
			$user = new user;
			$error_code = $user->check_login($_POST["username"], $_POST["password"]);
			switch($error_code){
				case 0:
					echo "<h1>Welcome back!</h1>";
					echo "<meta http-equiv='refresh' content='0;URL=index.php' />";
					break;
				case 1:
					echo "<h1>Oops! The password you provided was incorrect.</h1><p><a href = 'login.php' style = 'color: green; text-align: center;'>Try Again!</a></p>";
					break;
				case 2:
					echo "<h1>Oops! The username you provided does not match any in our records. you can register by clicking the link below.</h1><p><a href = 'register.php' style = 'color: green; text-align: center;'>Register</a></p>";
					break;
			}
			
			echo $_SESSION["permission"];
		?>
	</body>
</html>