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
		<title>Neal's Roaches - My Account</title>
	</head>
	
	<body>
		<?php
			require_once("header.php");
		?>
		
		<h1> your account info here!</h1>
		
		<?php
			require_once("footer.php");
		?>
	</body>
</html>